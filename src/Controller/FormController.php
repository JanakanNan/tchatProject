<?php
/**
 * Created by PhpStorm.
 * User: janakannandakumaran
 * Date: 21/12/2017
 * Time: 00:57
 */

namespace App\Controller;

use App\Entity\Users;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends Controller{

    /**
     * @Route("/register")
     */

    public function register(Request $request){
        if(isset ($_POST['submit'])){

            $em = $this->getDoctrine()->getManager();

            $pseudo = $request->request->get('pseudo');
            $mdp = $request->request->get('mdp');

            $user= new Users();
            $user->setPseudo($pseudo);
            $user->setMdp($mdp);

            $em->persist($user);

            $em->flush();
        }
        return $this->render('form.html.twig');
    }
}