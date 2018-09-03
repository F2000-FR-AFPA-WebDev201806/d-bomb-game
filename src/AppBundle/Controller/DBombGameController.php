<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use \AppBundle\Model\Board;

class DBombGameController extends Controller {

    /**
     * @Route("/jeu", name="game")
     */
    public function indexAction(Request $request) {
        $typeGame = 'debutant';

        $board = new Board($typeGame);

        // replace this example code with whatever you need
        return $this->render('@App/DBomb/game.html.twig', [
                    'board' => $board
        ]);
    }

    public function isWinAction() {

    }

}
