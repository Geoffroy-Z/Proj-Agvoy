<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\User;
use App\Entity\Client;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Room;

/**
 * @Route("/reservation")
 */
class ReservationController extends AbstractController
{
    /**
     * @Route("/", name="reservation_index", methods={"GET"})
     */
    public function index(ReservationRepository $reservationRepository): Response
    {
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reservation_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        $room= $entityManager->getRepository(Room::class)->findOneBy(array('id'=> (int)$_GET['id']));
        $reservation->setRoom($room);

        if ($form->isSubmitted() && $form->isValid()) {
            $unavailibilities = $reservation->getRoom()->getUnavailibilities();
            $possible=True;
            foreach($unavailibilities as $unavailibility){
                if($reservation->getArrival()>$reservation->getDeparture())
                {
                    $possible=False;
                    $this->get('session')->getFlashBag()->add('error', 'Réservation impossible, date d\'arrivée et de départ incohérentes');
                    break;
                }
                
                elseif($reservation->getArrival() < $unavailibility->getEnding() &&
                   $reservation->getDeparture() > $unavailibility->getStart())
                   {
                    $possible=False;
                    $this->get('session')->getFlashBag()->add('error', 'Réservation impossible, chambre indisponible');                   
                    break;
                    }
                
            }
            if($possible==True){
                $user = $this->container->get('security.token_storage')->getToken()->getUser();
                if($user->getClient()==NULL){
                    $client = new Client();
                    $client->setUser($user);
                    $client->addReservation($reservation);
                    $user->setClient($client);
                }
                else{
                    $client=$user->getClient();
                }

                $reservation->setClient($client);
                $reservation->setConfirmed(False);
                $reservation->setUpdatedUnavailibilities(False);
                $entityManager->persist($reservation);
                $entityManager->flush();
                $this->get('session')->getFlashBag()->add('message', 'Réservation bien ajoutée, en attente de confirmation');         
                
                return $this->redirectToRoute('reservation_index');
            }
            else
            {
                return $this->redirectToRoute('reservation_index');
                
            }
           
        }
        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservation_show", methods={"GET"})
     */
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reservation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reservation $reservation): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservation_index');
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Reservation $reservation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservation_index');
    }
    
    /**
     * @Route("/{id}/confirm", name="reservation_confirm")
     */
    public function confirm(Reservation $reservation){
        if($reservation->getConfirmed()==False)
        {
            $reservation->setConfirmed(True);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush(); 
            $this->get('session')->getFlashBag()->add('message', 'Réservation confirmée');
            
            return $this->redirectToRoute('new_booking_unavailibility');
        }
        else
        {
            $reservation->setConfirmed(False);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            $this->get('session')->getFlashBag()->add('message', 'Réservation non confirmée');
            
            return $this->redirectToRoute('new_booking_unavailibility');
            
        }

        
    }
}
