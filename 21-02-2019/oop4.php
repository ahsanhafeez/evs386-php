<?php

//interface Car{
//    
//    public function getEngine();
//    
//    public function setEngine();
//}



abstract class Car{
    
    
    abstract public function getEngine();
    
    public function setEngine(){
        
    }
}
        
class Honda extends Car{
    public function getEngine() {
        ;
    }
//    public function setEngine() {
//        ;
//    }
}

//class Bmw implements Car{
//    public function getEngine() {
//        ;
//    }
//    public function setEngine() {
//        ;
//    }
//}

?>