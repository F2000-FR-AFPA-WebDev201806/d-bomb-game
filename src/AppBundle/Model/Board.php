<?php

namespace AppBundle\Model;

class Board {

    private $grid = [];

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
                $this->grid[$i][$j] = '';

                if ($bomb > 9) {
                    $this->grid[$i][$j] = '*';
                }
            }
        }
    }

    function getGrid() {
        return $this->grid;
    }

    function setGrid($grid) {
        $this->grid = $grid;
    }

}
