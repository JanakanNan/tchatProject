<?php
/**
 * Created by PhpStorm.
 * User: janakannandakumaran
 * Date: 20/12/2017
 * Time: 15:36
 */

namespace App\Controller;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ParameterBag;

class SecurityController extends Controller{

    /**
     * @Route("/login")
     */

    public function login(Request $request, SessionInterface $session){

        if( isset($_POST['submit'])){

            $Users = new Users();

            $user = $request->request->get('pseudo');
            $password = $request->request->get('mdp');

            $Users = $this->getDoctrine()
                -> getRepository(Users::class)
                -> findBy([
                    'pseudo' => $user,
                    'mdp' => $password
                ]);

            if($session){
                return $this->redirect('/tchat');
            }
        }

        return $this->render('base.html.twig');


    }

    public function session(SessionInterface $session){
        return $session->get('pseudo');
    }


}