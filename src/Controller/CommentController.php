<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;
use App\Entity\Comment;
use App\Entity\Room;
use App\Entity\User;

class CommentController extends AbstractController
{
    /**
     * @Route("/comment", name="comment")
     */
    public function create()
    {
        if($_GET['message']!=NULL){
            $comment = new Comment();
            $comment->setMessage($_GET['message']);
            $comment->setDate(DateTime::createFromFormat("Y-m-d H:i:s",date("Y-m-d H:i:s", strtotime($_GET['date']))));
            $entityManager = $this->getDoctrine()->getManager();
            $room = $entityManager->getRepository(Room::class)->findOneBy(array('id' => (int)$_GET['room']));
            $comment->setRoom($room);
            $user = $entityManager->getRepository(User::class)->findOneBy(array('email' => $_GET['uid']));
            $comment->setUser($user);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();   
        }
        
        return $this->redirectToRoute('room_show', array('id'=>$_GET['room']));
    }
}
