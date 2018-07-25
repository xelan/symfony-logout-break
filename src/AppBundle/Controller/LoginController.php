<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="example_login")
     */
    public function loginAction(Request $request)
    {
        return $this->render('default/login.html.twig');
    }

    /**
     * @Route("/login_check", name="example_login_check")
     */
    public function loginCheckAction(Request $request)
    {
    }

    /**
     * @Route("/logout", name="example_logout")
     */
    public function logoutAction(Request $request)
    {
    }
}
