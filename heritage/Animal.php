<?php
class Animal{
    protected function deplacement(){
        return "je me déplace <br>";
    }

    public function manger(){
        return "Je mange <br>";
    }
}
class Elephant extends Animal{
    public function quiSuisJe(){
        return "Je suis un elephant et " . $t his->deplacement() . "<br>";
    }
}
class Chat extends Animal{
    public function quiSuisJe(){
        return "Je suis un chat <br>";
    }
    public function manger(){
        return "Je mange comme un chat <br>";
    }
}
/******************************************************* */
$elephant1 = new Elephant;
echo 'Elephant : ' . $elephant1->manger();
echo 'Elephant : ' . $elephant1->quiSuisJe();