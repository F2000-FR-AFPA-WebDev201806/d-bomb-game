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
                $this->grid[$i][$j]='fas fa-apple-alt';

                if ($bomb >9) {
                    
                    $this->grid[$i][$j] ='fas fa-bomb';
                    
                }
            }
        }
        
        $this->player = new Player(0, $x-1, $x, $y);
        $this->grid[$x-1][0] = 'fab fa-android';
        $this->grid[0][$y-1] = 'fas fa-sign-out-alt';
    }
    
    public function play($x, $y) {
        if ($this->player->isMovementPossible($x, $y)) {
            if ($this->grid[$y][$x] == 'fas fa-bomb') {
                $this->player->bomb();
            }
            
            $this->grid[$this->player->getY()][$this->player->getX()] = '';            
            $this->player->deplacer($x, $y);
            $this->grid[$this->player->getY()][$this->player->getX()] = 'fab fa-android';
        }
        
        return $this->isWin();
    }
   public function isWin(){
       if(($this->player->getX() == count($this->grid)-1) && $this->player->getY()== 0 && $this->player->getPointsVie() > 0 ){
          return true; 
       }       
       
   }
    public function isDead(){
        return ($this->player->getPointsVie() <= 0);
   }
   
   public function getGrid() {
        return $this->grid;
    }

   public  function setGrid($grid) {
        $this->grid = $grid;
    }
    function getPlayer() {
        return $this->player;
    }

    function setPlayer($player) {
        $this->player = $player;
    }


}
