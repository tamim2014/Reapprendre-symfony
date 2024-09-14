<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/test', name: 'app_test')]
    public function test(){
        return $this->render('blog/test.html.twig', [
            'title' => "Bienvenue ici les amis !",
            'age'  => 31
        ]);
    }

    #[Route('/', name: 'home')]
    public function home(){
        return $this->render('blog/home.html.twig', [
            'title' => "Bienvenue ici les amis !",
            'age'  => 31
        ]);
    }

    #[Route('/blog/12', name: 'blog_show')]
    public function show(){
        return $this->render('blog/show.html.twig',[

        ]);
    }
}
