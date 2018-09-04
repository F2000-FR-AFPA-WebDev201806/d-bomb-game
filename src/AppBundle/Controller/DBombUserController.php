<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class DBombUserController extends Controller {

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
    public function loginAction() {
        $oUser = new User();
        $oForm = $this->createForm(\AppBundle\Form\UserConnexionType::class, $oUser);

        return $this->render('@App/DBomb/login.html.twig', array(
                    'form' => $oForm->createView()
        ));
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request,UserPasswordEncoderInterface $encoder)  {
        $oUser = new User();
        $oForm = $this->createForm(\AppBundle\Form\UserRegisterType::class, $oUser);

        $oForm->handleRequest($request);
        if($oForm->isSubmitted() && $oForm->isValid()) {
            $encoded=$encoder->encodePassword($oUser, $oUser->getPassword());
            $oUser->setPassword($encoded);
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($oUser);
            $entityManager->flush();
            
            $this->addFlash(
                    'notice', 'veuillez vous connnecte pour jouer!'
            );
            return $this->redirectToRoute('homepage');
        }
        return $this->render('@App/DBomb/register.html.twig', array(
                    'form' => $oForm->createView()
        ));
    }

    /**
     *
     * @Route("/logout", name="logout")
     */
    public function logoutAction() {
    }

}
