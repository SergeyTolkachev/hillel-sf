<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @return Response
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home.html.twig');
    }
}