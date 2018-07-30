<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SignInPhpController extends Controller
{
    /**
     * @Route("/signIn", name="sign_in_php")
     */
    public function index()
    {
        return $this->render('sign_in_php/index.html.twig', [
            'controller_name' => 'SignInPhpController',
        ]);
    }
}
