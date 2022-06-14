<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class DefaultController{

	/**
	 * @Route("/")
	 */
	public function index(){
		return new Response("Hello World");
	}

	/**
	 * @Route("/services", name="app_services")
	 */
	public function services(){
		return new Response("<ul>
												 <li>Informatique</li>
												 <li>Gestion</li>
												 </ul>");
	}

	/**
	 * @Route("/product/{id?}", name="app_product_id")
	 */
	public function getShoes(?int $id, SessionInterface $session ){
		// $session->set('numero', $id);
		dd($session->get('numero'));
		return new Response("La chaussure n° $id" );
	}

	/**
	 * @Route("/post", name="app_post")
	 */
	public function articles(Request $request, SessionInterface $session){
		// dd($request->attributes->get('_route'));
		// dd($request);
		dd($session->get('numero')); 
		return new Response("");
	}


}