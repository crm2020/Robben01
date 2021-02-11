<?php
// src/Controller/home.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class home extends AbstractController {
    #Creates the URL route
    /**
    * @Route("/")
    * @Method({"GET"})
    */

    public function home_page() {
        
        //return new Response();

        return $this->render('bootstrap/index.html.twig');
    }
}

