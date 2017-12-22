<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;



/**
 * Created by PhpStorm.
 * User: janakannandakumaran
 * Date: 21/12/2017
 * Time: 17:38
 */

class LogoutController extends Controller{

    /**
     * @Route("/logout")
     */

    public function logout(SessionInterface $session){
        $session->clear();
        return $this->redirect('/login');
    }

}