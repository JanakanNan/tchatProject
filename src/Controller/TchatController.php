<?php

namespace App\Controller;
use App\Entity\Message;
use dateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
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

        public function SaveMessage(Request $request, SessionInterface $session){
            $idUser= $session->get('idUser');

            if(isset ($_POST['send'])){

                $em = $this->getDoctrine()->getManager();

                $tchats = $request->request->get('message');

                $message = new Message();
                $message->setMessage($tchats);
                $message->setIdUser($idUser);
                $message->setDateMessage(new \DateTime());

                $em->persist($message);
                $em->flush();




            }
            return $this->render('tchat.html.twig');
        }
    /**
     * @Route("/tchat")
     */
        public function showMessage(){
            $message= $this->getDoctrine()
                ->getRepository(Message::class)
                ->findAll();
        }

}