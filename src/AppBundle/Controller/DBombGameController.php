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
        $typeGame='debutant';
        $grid= [array()];
  switch($typeGame){
       
   case 'debutant':
       
       $x=10;
       $y=10;
       for($i=0 ;$i<$x ;$i++){
               for($j=0 ;$j<$y ;$j++){
                   $grid[$i][$j]='';
                       
               }
       
       }
           
       break;  
    case 'Intermidaire': 
        
           
     case 'Avancé': 
       
       
   }
  
  
   $board=new Board;
   $board->setGrid($grid);      
       $aGrid=$board->getGrid(); 

        // replace this example code with whatever you need
        return $this->render('@App/DBomb/game.html.twig', [
                    'grid' => $aGrid
        ]);
    }

}

