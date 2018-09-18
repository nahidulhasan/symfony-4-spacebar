<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;


class ArticleController
{

    /**
     * @Route("/")
     */
    public function index()
    {
       return new Response('Home Page');

    }


    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('Future page show the article: %s', $slug));
    }

}