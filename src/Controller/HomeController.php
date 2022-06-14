<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
     
    public function index(): Response
    {   
        $name = "Dupond";
        $age = 16;
        $image = "img/Arrow.jpg";
        $tabDays = ["Lundi", "Mardi","Mercredi", "Jeudi", "Vendredi"];
        

        return $this->render('home/index.html.twig', 
        ['n' => $name, 'a' => $age, 'days' => $tabDays, 'arrow' => $image]);
    }
}
