<?php
class Autoload{
    public static $nb = 0;//Permet de compter le nombre de fois que l'on passe dans l'autoload.

    public static function className($className){
        $tab = explode('\\', $className);

        if($tab[0] == Backoffice){
            $path = __DIR__ .'/../src' . implode('/', $tab) .'.php';
        }else{
            $path = __DIR__ .'/../src' . implode('/', $tab) .'.php';
        }
        require $path;
        self::$nb++;
    }

    spl_autoload_register(array('Autoload', 'className'));
}