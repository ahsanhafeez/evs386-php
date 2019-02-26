<?php

interface Car{
    
    public function getEngine();
    
    public function setEngine();
}


class Honda implements Car{
    public function getEngine() {
        ;
    }
    public function setEngine() {
        ;
    }
}

class Bmw implements Car{
    public function getEngine() {
        ;
    }
    public function setEngine() {
        ;
    }
}


class A{
    
    public function getName(){
        
    }
}

class B extends A{
    
}

class C extends A{
    
}

?>