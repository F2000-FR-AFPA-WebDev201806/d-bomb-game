<?php

namespace AppBundle\Model;

class Board {

    private $grid = [];
    private $player;

    public function __construct($typeGame) {
        switch ($typeGame) {

            case 'debutant':
                $x = 10;
                $y = 10;
                break;

            case 'Intermidaire':
                $x = 15;
                $y = 15;
                break;

            case 'Avancé':
                $x = 20;
                $y = 20;
                break;
        }

        $this->init($x, $y);
    }

    public function init($x, $y) {
        
        for ($i = 0; $i < $x; $i++) {
            $this->grid[$i] = [];

            for ($j = 0; $j < $y; $j++) {
                $bomb = rand(0, 10);
                $this->grid[$i][$j]='';

                if ($bomb >9) {
                    
                    $this->grid[$i][$j] ='fas fa-bomb';
                    
                }
            }
        }
        
        $this->player = new Player(0, $x-1, $x, $y);
        $this->grid[$x-1][0] = 'fas fa-android';
        
    }
    public function play($x, $y) {
        if ($this->player->isMovementPossible($x, $y)) {
            $this->player->deplacer($x, $y);
            
            if ($this->grid[$y][$x] === 'fas fa-bomb') {
                $this->player->bomb();
            }
        }
        
        return $this->isWin();
    }
   public function isWin(){
       
       if(($this->player->getX()==0 && $this->player->getY()== count($this->grid)-1) && $this->player->getPointsVie()>0 ){
          return true; 
       }else{
        return $this->isDead();
      }
       
       
   }
    public function isDead(){
  
       if ($this->player->getPointsVie()==0){
           return false;
       }
   }
   public function getGrid() {
        return $this->grid;
    }

   public  function setGrid($grid) {
        $this->grid = $grid;
    }

}
