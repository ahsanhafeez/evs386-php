<?php


final class User{
    
    public function getName(){
        
    }
}


class User2 extends User{
    
    
    public function setName(){
        $this->getName();
    }
}

$user = new User();

?>