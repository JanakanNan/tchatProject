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

        if( $request->request->has('submit')){

            $pseudo = $request->request->get('pseudo');
            $mdp= $request->request->get('mdp');

            $user = $this->getDoctrine()
                -> getRepository(Users::class)
                -> findOneBy([
                    'pseudo' => $pseudo,
                    'mdp' => $mdp
                ]);

            if($user){
                $session->set('idUser', $user->getId());
                return $this->redirect('/tchat');
            }
        }

        return $this->render('base.html.twig');

    }


}