<?php

namespace AppBundle\Model;

class Space {

    private $isMined;
    
     public function setisMined($bool){
         
         $this->isMined=$bool;
       
     }
     public function getisMined(){
         return $this->isMined;
     }
}
