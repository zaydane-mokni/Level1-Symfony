<?php
// src/Controller/ContactUsController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ContactUsController {
    /**
     * @Route("/ContactUs", name="Contact_index")
     */
    public function index(Environment $twig)
    {
        $content = $twig->render('Contact/index.html.twig');
        return new Response($content);
    }

}