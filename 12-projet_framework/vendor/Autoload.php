<?php

class Autoload{
    public static $nb = 0; // permet de compter le nombre de fois que l'on passe dans l'autoload

    public static function ClassName($className){
        echo '<pre>' . self::$nb . ' - Autoload : ' . $className;
        $tab = explode('\\', $className); // explode permet de prendre la chaine et de la transformer en array. Ici, on cherche le caractère '\' MAIS si on ne met qu'un seul backslash ('\'), c'est comme si on voulais échapper la quote, d'où l'intérêt ici de mettre 2 backslash (\\).

        if($tab[0] == 'Backoffice'){ // L'explode nous permet de savoir si l'on doit reculer d'un dossier pour aller chercher un module spécifique (bundle)
            $path = __DIR__ . '/../src' . implode('/', $tab) . '.php'; // On remet chaque élément du tableau avec un '/'
        } else{
            $path = __DIR__ . '/' . implode('/', $tab) . '.php'; // 
        }
        echo "\n => $path </pre><hr>"; // permet de voir les classes instanciée grâce à l'autoload.

        require $path;

        self::$nb++;
    }
}

spl_autoload_register(array('Autoload', 'className')); // Lorsque l'on utilise l'autoload sur une class, il faut passer un array et la méthode doit être static