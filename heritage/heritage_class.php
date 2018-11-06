<?php
class A{
    public function direBonjour(){
        return 'Bonjour';
    }
}
//-------------------------------
class B{
    public $mavariable;

    public function __construct(){
        $this->mavariable = new A;
    }

    public function maMethode(){
        return $this->mavariable->direBonjour();
    }
}
$b = new B;

echo $b->maMethode();