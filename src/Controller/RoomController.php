<?php

namespace App\Controller;

use App\Entity\Region;
use App\Entity\Room;
use App\Entity\Owner;
use App\Form\RoomType;
use App\Repository\RoomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;
use App\Entity\Unavailibility;
use App\Entity\Comment;


/**
 * @Route("/room")
 */
class RoomController extends AbstractController
{
    /**
     * @Route("/", name="room_index", methods={"GET"})
     */
    public function index(RoomRepository $roomRepository): Response
    {
        $this->get('session')->set('ViewingLikes', False);
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        if(gettype($user)!="string" && $user->getOwner()==NULL){
                $owner=FALSE;
            }
            else
            {
                $owner=TRUE;                        
            }
        
        $em = $this->getDoctrine()->getManager();
        $regions = $em->getRepository(Region::class)->findall();
        $availableRooms= $roomRepository->findAll();
        
        
        if(isset($_GET['region'])){
            foreach($availableRooms as $room){
                if($room->getRegion()->getId()!=$_GET['region']){
                    $availableRooms=\array_diff($availableRooms, [$room]);
                }
            }
                
            
        }
        
        if(isset($_GET['startDate']) && isset($_GET['endDate'])){
            
            $startDate=$_GET['startDate'];
            $startDate=DateTime::createFromFormat("Y-m-d H:i:s",date("Y-m-d H:i:s", strtotime($startDate)));
            $endDate=$_GET['endDate'];
            $endDate=DateTime::createFromFormat("Y-m-d H:i:s",date("Y-m-d H:i:s", strtotime($endDate)));
            
             if($startDate>$endDate)
            {
                $this->get('session')->getFlashBag()->add('error', 'Recherche impossible, date de départ et d\'arrivée incohérentes');
                return $this->render('room/index.html.twig', [
                    'rooms' => $roomRepository->findAll(), 'likes'=> $this->get('session')->get('likes'),'regions' => $regions,'owner'=>$owner, 'user'=>$user,
                ]);
                
            }
            
            $em = $this->getDoctrine()->getManager();
            $unavailibilities = $em->getRepository(Unavailibility::class)->findAll();
            
             foreach($unavailibilities as $unavailibility){
                dump($startDate);
                dump($endDate);
                dump($unavailibility);
                if($startDate < $unavailibility->getEnding() &&
                    $endDate > $unavailibility->getStart())
                {
                    $room=$unavailibility->getRoom();
                    $availableRooms=\array_diff($availableRooms, [$room]);
                    
                }
            } 
            return $this->render('room/index.html.twig', [
                'rooms' => $availableRooms, 'likes'=> $this->get('session')->get('likes'), 'regions' => $regions, 'owner'=>$owner,'user'=>$user,
            ]);
        }
        else
        {
        
        return $this->render('room/index.html.twig', [
            'rooms' => $availableRooms, 'likes'=> $this->get('session')->get('likes'),'regions' => $regions,'owner'=>$owner,'user'=>$user,
        ]);
        }
    }
    

    /**
     * @Route("/new", name="room_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $room = new Room();
        $form = $this->createForm(RoomType::class, $room);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($room);
            $entityManager->flush();
            
            $this->get('session')->getFlashBag()->add('message', 'Couette et café bien ajouté');

            return $this->redirectToRoute('room_index');
        }

        return $this->render('room/new.html.twig', [
            'room' => $room,
            'form' => $form->createView(),
            
        ]);
    }

    /**
     * @Route("/likes", name="room_likes", methods={"GET"})
     */
    
    public function showLikes(){
        $this->get('session')->set('ViewingLikes', True);
        $likes = $this->get('session')->get('likes');
        
        $em = $this->getDoctrine()->getManager();
        $rooms = $em->getRepository(Room::class)->findBy(array('id' => $likes));
        
        return $this->render('room/list.html.twig',[
            'rooms' => $rooms,'likes'=> $this->get('session')->get('likes'),
        ]);
        
    }
    
    /**
     * @Route("/{id}", name="room_show", methods={"GET"})
     */
    public function show(Room $room): Response
    {
        $em = $this->getDoctrine()->getManager();
        $comments = $em->getRepository(Comment::class)->findBy(array('room' => $room->getId()));
        
        return $this->render('room/show.html.twig', [
            'room' => $room, 'comments'=> $comments , 'date'=>date('Y-m-d H:i:s',date_default_timezone_set('Europe/Berlin')),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="room_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Room $room): Response
    {
        $form = $this->createForm(RoomType::class, $room);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('room_index');
        }

        return $this->render('room/edit.html.twig', [
            'room' => $room,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="room_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Room $room): Response
    {
        if ($this->isCsrfTokenValid('delete'.$room->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($room);
            $entityManager->flush();
        }

        return $this->redirectToRoute('room_index');
    }
    
    /**
     * @Route("/{id}/like", name = "room_like")
     */
    public function consultRooms(Room $room){
        
        $id = $room->getId();
        $likes = $this->get('session')->get('likes');
        
        if(! isset($likes))
        {
            $likes=array();
        }
        
        
        // si l'identifiant n'est pas présent dans le tableau des likes, l'ajouter
        if (! in_array($id, $likes))
        {
            $likes[] = $id;
        }
        else
        // sinon, le retirer du tableau
        {
            $likes = array_diff($likes, array($id));
        }
        
        $this->get('session')->set('likes', $likes);
        $ViewingLikes= $this->get('session')->get('ViewingLikes');
        
        
        if($ViewingLikes)
        {
            return $this->redirectToRoute('room_likes');
            
        }
        else
        {
            return $this->redirectToRoute('room_index');
        }
    }
}
