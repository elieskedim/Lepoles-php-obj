<?php
//Controller général de l'application permet d'appeler des reporsitory et contient nottament la methode render() qui affiche un rendu à l'ecran, de manière générique.

namespace Controller;

class Controller{

    protected $table;

    public function __construct(){};
    public function getRepository($table){// On recupére la table employes

        $class = 'Repository\\' . $table . 'Repository';

        if(!isset($this->table) ){

            $this->table = new $class; //On instancie un ibjet "employe"(s'il n'existe pas !! donc oui la première fois)
        }
        return $this->table;
    }
    //$layout : Le design general du site / $template : la view qui rentre à l'interieur / $parameters : Les parameters disponibles dan le layout et le template
    public function render($layout, $template, $parameters = array() ){

            $dirViews = __DIR__ . '/../../src/' . str_replace('\\','/', get_called_class() . '/../../Views');
            //get_called_class() : retourne le nom de la class depuis laquel une methode statique a été appelée

            $ex = explode('\\', get_called_class() ); //explode() transforme la chaine en tableau

            $dirFile = str_replace('Controller', '', $ex[2]); //On retire le mot 'Controller' grâce à str_replace car dans la view, il y a un dossier au nom du module "Employe" et non pas "ControllerEmploye".

            $__template__ = $dirViews . '/' . $dirFile .'/'. $template; //Chemin pour aller au bon endroit du template

            $__layout__ = $dirViews . '/' . $layout; //Chemin pour aller bont endroit au layout

            extract($parameters, EXTR_SKIP);// extract() permet de créer des variables au noms des indices //EXTR_SKIP : permet lors d'une collision, de ne pq réécrire la variable existante.

            ob_start(); //Enclenche La temporisation de sortie.C'est à dire que ce qui suit ne se produit pas tout de suite, nous retenons l'affichage pour etre totalement MVC. ob_start: enclenche la bufferisation de sortie, permet de mettre tout son site en "tampon" avant de l'afficher grâce à ob_end_flush(on veut le faire en dernier pour respecter le MVC)

                require $__template__; //permet de mettre le contenu dans une variable et avec la ligne du dessous l'envoie des données est retenue.
                $content = ob_get_clean();// Le template sera représenté par $content. Cette variable est utilise dans le layout $content sera le require.Il représente le contenu du fichier indiqué par $template

            ob_start();
                require $__layout__;//ob_start()va retenir l'envoie des données.
            return ob_end_flush();//Envoie le contenu du tampon de sortie (s'il existe ) et eteint la temporisation de sortie 

    }

}
