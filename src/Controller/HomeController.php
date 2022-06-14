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

    /**
     * @Route("/personne", name="app_person")
     */
    public function getData(){
        $data = [
            ["id" => 1, "q" => "Dupond", "prenom" => "Thomas", "age" => 20, "image" => "arrow.png"],
            ["id" => 2, "name" => "Dupond", "prenom" => "Martin", "age" => 20, "image" => "arrow.png"],
            ["id" => 3, "name" => "Dupond", "prenom" => "Robert", "age" => 20, "image" => "arrow.png"],
            ["id" => 4, "name" => "Dupond", "prenom" => "Michel", "age" => 20, "image" => "arrow.png"],
        ];
        return $this->render('home/data.html.twig', ['person'=>$data]);
    }
}
