<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@App/Default/index.html.twig', [
        ]);
    }
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscriptionAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@App/Default/inscription.html.twig', [
        ]);
    }

    /**
     * @Route("/game", name="game")
     */
    public function gameAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@App/Default/game.html.twig', [
        ]);
    }
}
