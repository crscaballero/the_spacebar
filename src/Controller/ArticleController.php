<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController{

	/**
	* @Route("/")
	*/
	public function homepage(){
		return new Response('OMG! my first page already! Woo!');
	}

	/**
	* @Route("/news/{slug}")
	*/
	public function show($slug){
		return new Response(sprintf('Future page to the article: %s', $slug));
	}

}