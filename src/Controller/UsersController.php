<?php
/**
 * Created by PhpStorm.
 * User: janakannandakumaran
 * Date: 20/12/2017
 * Time: 14:54
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends Controller {

    /**
     * @Route ("/login")
     */

    public function indexAction(){

        return $this->render('base.html.twig');
    }


}