<?php

namespace App\Controller;

use App\Entity\Region;
use App\Entity\Room;
use App\Form\RegionType;
use App\Repository\RegionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/region")
 */
class BackofficeRegionController extends AbstractController
{
    /**
     * @Route("/", name="admin_region_index", methods={"GET"})
     */
    public function index(RegionRepository $regionRepository): Response
    {
        return $this->render('backoffice/region/index.html.twig', [
            'regions' => $regionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_region_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $region = new Region();
        $form = $this->createForm(RegionType::class, $region);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($region);
            $entityManager->flush();
            
            $this->get('session')->getFlashBag()->add('message', 'Région bien ajoutée');
            

            return $this->redirectToRoute('admin_region_index');
        }

        return $this->render('backoffice/region/new.html.twig', [
            'region' => $region,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_region_show", methods={"GET"})
     */
    public function show(Region $region): Response
    {
        return $this->render('backoffice/region/show.html.twig', [
            'region' => $region,
        ]);
    }
    
    /**
     * @Route("/{id}/roomList", name="admin_region_rooms", methods={"GET"})
     */
    public function listRegionRooms(Region $region): Response
    {
        $region=$region->getId();
        dump($region);
        $em = $this->getDoctrine()->getManager();
        $rooms = $em->getRepository(Room::class)->findBy(array('region' => $region));
        
        
        return $this->render('room/list.html.twig', [
            'rooms' => $rooms, 'likes' => $this->get('session')->get('likes')
        
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_region_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Region $region): Response
    {
        $form = $this->createForm(RegionType::class, $region);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_region_index');
        }

        return $this->render('backoffice/region/edit.html.twig', [
            'region' => $region,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_region_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Region $region): Response
    {
        if ($this->isCsrfTokenValid('delete'.$region->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($region);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_region_index');
    }
}
