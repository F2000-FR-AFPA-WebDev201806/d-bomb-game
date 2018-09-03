<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\User;

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
    public function loginAction(Request $request) {
        $oUser = new User();
        $oForm = $this->createForm(\AppBundle\Form\UserConnexionType::class, $oUser);

        $oForm->handleRequest($request);
        if ($oForm->isSubmitted() && $oForm->isValid()) {
            $rep = $this->getDoctrine()->getRepository('AppBundle:User');
            $user = $rep->findOneBy(Array(
                'login' => $oUser->getLogin(),
                'password' => $oUser->getPassword()
            ));

            if ($user) {
                $request->getSession()->set('user', $user);

                return $this->redirectToRoute('game');
            } else {
                $this->addFlash(
                        'erreur', 'login ou mot de passe inconnu!'
                );
            }
        }

        return $this->render('@App/DBomb/login.html.twig', array(
                    'form' => $oForm->createView()
        ));
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request) {
        $oUser = new User();
        $oForm = $this->createForm(\AppBundle\Form\UserRegisterType::class, $oUser);
        $oForm->handleRequest($request);
        if ($oForm->isSubmitted() && $oForm->isValid()) {
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

}
