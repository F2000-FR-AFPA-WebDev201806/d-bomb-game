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
        // Stocker le jeu en session
        $session=$request->getSession();
        $session->set('board',$board);
        // replace this example code with whatever you need
        return $this->render('@App/DBomb/game.html.twig', [
                    'board' => $board,
        ]);
    }

    /**
     * @Route("/jeu/play/{x}/{y}", name="play")
     */
    public function playAction(Request $request,$x, $y) {
        // Recuperer le jeu en session
       $board = $request->getSession()->get('board');
        // Jouer ("jeu"->play)
        $board->play($x,$y);
        // Stocker le jeu en session
        $request->getSession()->set('board',$board);
        
        return $this->render('@App/DBomb/board.html.twig', [
                    'board' => $board,
        ]);
    }
    }


