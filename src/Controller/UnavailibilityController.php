<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Unavailibility;
use App\Form\UnavailibilityType;
use App\Repository\ReservationRepository;
use App\Repository\UnavailibilityRepository;
use Symfony\Component\Validator\Constraints\Date;
use App\Entity\Reservation;

/**
 * @Route("/unavailibilities")
 */

class UnavailibilityController extends AbstractController
{
    /**
     * @Route("/", name="unavailibilities_index", methods={"GET"})
     */
    public function index(UnavailibilityRepository $unavailibilityRepository): Response
    {
        return $this->render('unavailibility/index.html.twig', [
            'unavailibilities' => $unavailibilityRepository->findAll(),
        ]);
    }
    
    /**
     * @Route("/new", name="new_unavailibility")
     */
    public function new(Request $request): Response
    {
        $unavailibility = new Unavailibility();
        $form = $this->createForm(UnavailibilityType::class, $unavailibility);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($unavailibility);
            $entityManager->flush();
            
            $this->get('session')->getFlashBag()->add('message', 'Indisponibilité bien ajoutée');
            
            return $this->redirectToRoute('unavailibilities_index');
        }
        
        return $this->render('unavailibility/new.html.twig', [
            'unavailibility' => $unavailibility,
            'form' => $form->createView(),
        ]);
    }
    
    /**
     * @Route("/new/booked", name="new_booking_unavailibility")
     */
    public function newBooked(): Response
    {
        $unavailibility = new Unavailibility();
        
        $em = $this->getDoctrine()->getManager();
        $BookedRoom=$em->getRepository(Reservation::class)->findOneBy(array('updatedUnavailibilities' => False));
        if($BookedRoom!=NULL){
        $BookedRoom->setUpdatedUnavailibilities(TRUE);
        $start=$BookedRoom->getArrival($BookedRoom);
        $ending=$BookedRoom->getDeparture($BookedRoom);
        $idroom=$BookedRoom->getRoom($BookedRoom);
        
        $unavailibility->setStart($start);
        $unavailibility->setEnding($ending);
        $unavailibility->setRoom($idroom);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($unavailibility);
        $entityManager->flush();
        }
        
        return $this->redirectToRoute('reservation_index');
    }
    
    /**
     * @Route("/{id}/edit", name="unavailibility_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Unavailibility $unavailibility): Response
    {
        $form = $this->createForm(UnavailibilityType::class, $unavailibility);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('unavailibilities_index');
        }
        
        return $this->render('unavailibility/edit.html.twig', [
            'unavailibility' => $unavailibility,
            'form' => $form->createView(),
        ]);
    }
    
    /**
     * @Route("/{id}", name="unavailibility_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Unavailibility $unavailibility): Response
    {
        if ($this->isCsrfTokenValid('delete'.$unavailibility->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($unavailibility);
            $entityManager->flush();
        }
        
        return $this->redirectToRoute('unavailibilities_index');
    }
    
//     /**
//      * @Route("/update", name="update_unavailibility")
//      */
//     public function updateUnavailibility(ReservationRepository $reservationRepository){
//         $bookedRoom = $reservationRepository->findOneBy(array('updatedUnavailibilities' => FALSE));
//         $unavailibility = new Unavailibility();
//         $unavailibility->setRoom($bookedRoom->getRoom());
//         $unavailibility->setStart($bookedRoom->getArrival());
//         $unavailibility->setEnding($bookedRoom->getDeparture());
//         $entityManager = $this->getDoctrine()->getManager();
//         $entityManager->persist($unavailibility);
//         $bookedRoom->setUpdatedUnavailibilities(TRUE);
//         $entityManager->flush();
//         return $this->redirectToRoute('reservation_index');        
//     }
}
