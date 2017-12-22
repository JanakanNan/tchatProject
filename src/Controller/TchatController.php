<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;



/**
 * Created by PhpStorm.
 * User: janakannandakumaran
 * Date: 21/12/2017
 * Time: 17:38
 */

class TchatController extends Controller{

    /**
     * @Route("/tchat")
     */

        public function messsage(){
            return $this->render('tchat.html.twig');
        }

}