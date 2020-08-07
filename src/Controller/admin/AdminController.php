<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Reservation;

class AdminController extends AbstractController
{
    /**
     * @Route("/dashboard", name="admin")
     */
       public function index(): Response
    {
        $reservations = $this->getDoctrine()
            ->getRepository(Reservation::class)
            ->findAll();
        
        return $this->render('admin/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }

}