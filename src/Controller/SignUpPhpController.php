<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SignUpPhpController extends Controller
{
    /**
     * @Route("/signUp", name="sign_up_php")
     */
    public function index()
    {
        return $this->render('sign_up_php/index.html.twig', [
            'controller_name' => 'SignUpPhpController',
        ]);
    }
}
