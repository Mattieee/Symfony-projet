<?php

namespace App\Controller;

use App\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cocur\Slugify\Slugify;




class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        $em   = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Article::class);

        $articles = $repo->findAll();

        return $this->render('homepage.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/article", name="article")
     */
    public function article()
    {
        $em   = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Article::class);

        $articles = $repo->findAll();

        return $this->render('article.php.twig', [
            'articles' => $articles,
        ]);


    }
    /**
    * @Route("/article2", name="article1")
    */
    public function article1()
    {
        $em   = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Article::class);

        $articles1 = $repo->findAll();

        return $this->render('article2.php', [
            'articles1' => $articles1,
        ]);
    }

    /**
     * @Route("/article3", name="article2")
     */
    public function article2()
    {
        $em   = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Article::class);

        $articles2 = $repo->findAll();

        return $this->render('article3.html.twig', [
            'articles2' => $articles2,
        ]);
    }

    /**
     * @Route("/article4", name="article3")
     */
    public function article3()
    {
        $em   = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Article::class);

        $articles3 = $repo->findAll();

        return $this->render('article4.html.twig', [
            'articles3' => $articles3,
        ]);
    }
}
