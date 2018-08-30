<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\User;

class DBombController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('@App/DBomb/index.html.twig', [
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request) {
        $oUser = new User();
        $oForm = $this->createForm(\AppBundle\Form\UserConnexionType::class, $oUser);

        $rep = $this->getDoctrine()->getRepository('AppBundle:User');
        $user = $rep->findOneBy(Array(
            'login' => $oUser->getLogin(),
            'password' => $oUser->getPassword()
        ));
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request) {
        $user = new User();
        $oForm = $this->createForm(\AppBundle\Form\UserConnexionType::class, $user);
        $oForm->handleRequest($request);
        if ($oForm->isSubmitted() && $oForm->isValid()) {

        }
    }

}
