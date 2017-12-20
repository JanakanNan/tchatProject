<?php
/**
 * Created by PhpStorm.
 * User: janakannandakumaran
 * Date: 20/12/2017
 * Time: 15:36
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller{

    /**
     * @Route("/login", name="login")
     */

    public function login(Request $request, AuthenticationUtils $authenUtils){

        $error = $authenUtils->getLastAuthenticationError();

        $lastUsername= $authenUtils->getLastUsername();

        return $this->render('base.html.twig', array(
           'last_username' => $lastUsername,
            'error' => $error,
        ));

    }
}