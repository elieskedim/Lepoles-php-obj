<?php
namespace controller;

class Controller{
    private $db;

    public function __construct(){
        $e = new Error; //gestion des erreurs. Pas besoin d'ecrire controller/Error car le fichier error.php se trouve dans la recine du dossier controller

        $this->db = new \model\EntityRepository;
    }

    public function handleRequest(){
        $op = isset($_GET['op']) ? $_GET['op'] : NULL;

        try{
            if( !$op || $op == 'list'){
                $this->listContacts();
            }elseif($op = 'new'){
                $this->saveContact();
            }elseif()
        }
    }
}