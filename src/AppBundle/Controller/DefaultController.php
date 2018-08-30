<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@App/Default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

       /**
     * @Route("/jeu", name="jeu")
     */
    public function jeuAction(Request $request)
    {

        $aGrid = [
            [0,1,2,0,0,0],
            [0,0,0,0,0,0],
            [0,0,0,0,0,0],
            [0,0,0,0,0,0], 
            [0,0,0,0,0,0], 
            [0,0,0,0,0,0]
         ];

        // replace this example code with whatever you need
        return $this->render('@App/Default/jeu.html.twig',[
            'grid' => $aGrid
        ]);
    }
}





