<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
	/**
	 * @Route("/")
	 */
	public function homepage()
	{
		return new Response('Insert funny quip about homepage');
	}

	/**
	 * @Route("/news/{slug}")
	 */
	public function show($slug)
	{
		$comments = [
			'One time I ate a rock and it did not taste like bacon! Fake news!',
			'YAAAAS Im going on an all asteroid diet',
			'I like bacon and I like turtles'
		];
		return $this->render('article/show.html.twig', [
			'title' => ucwords(str_replace('-', ' ', $slug)),
			'comments' => $comments,
		]);
	}
}