<?php

namespace App\Controller;

use App\Entity\JobOffer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
      $jobOffers = $this->getDoctrine()
          ->getRepository(JobOffer::class)
          ->findAll();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'job_offers' => $jobOffers,
        ]);
    }
}
