<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController{

	/**
	 * @Route("/")
	 */
	public function index(){
		return new Response("Hello World");
	}

	/**
	 * @Route("/services")
	 */
	public function services(){
		return new Response("<ul><li>Informatique</li><li>Gestion</li></ul>");
	}

}