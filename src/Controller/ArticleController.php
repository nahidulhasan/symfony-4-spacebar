<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ArticleController extends abstractController
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
        return $this->render('article/show.html.twig',[
            'tittle' => ucwords(str_replace('_', ' ', $slug))
        ]);

    }

}