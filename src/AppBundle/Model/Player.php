<?php

namespace AppBundle\Model;

class Player {

    private $x;
    private $y;
    private $pointsVie=3; 
    private $max_x = null;
    private $max_y = null;

    public function __construct($x, $y, $max_x, $max_y) {
        $this->x = $x;
        $this->y = $y;
        $this->max_x = $max_x;
        $this->max_y = $max_y;
    }

    public function isMovementPossible($x, $y) 
  {
    // case dans le tableau
    if ($x < 0 || $y < 0 || $x > $this->max_x || $y > $this->max_y) {
        return false;
    }


    // case haut
    if ($y == $this->y-1 && $x == $this->x) {
        return true;
    }


    // case bas
    if ($y == $this->y+1 && $x == $this->x) {
        return true;
    }

   // cas droite
     if ($y == $this->y && $x == $this->x+1) {
        return true;
    }


   // cas gauche
     if ($y == $this->y && $x == $this->x-1) {
        return true;
    }

  }

    public function deplacer($x, $y) 
      {
            $this->x = $x;
            $this->y = $y;
       }  



   public function bomb() 
      {
        $this->pointsVie -= 1; 
      }


   public Function getPointsVie()
       {
          return $this->pointsVie; 
       }   

            
   public Function getX()
       {
          return $this->x; 
       } 
      public Function setX($x)
       {
           $this->x=$x; 
       }        

    public Function getY()
       {
          return $this->y; 
       } 

     public Function setY($y)
       {
           $this->y=$y; 
       }        
                 
    
}
