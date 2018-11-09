<?php
// Cette class représente la connexion à la BDD. L'approche Singleton nous permettre d'être certain qu'il n'y ait pas plusieurs connexions initialisées.

namespace Manager;

class PDOManager{
    private static $instance = null; // contiendra l'instance de notre class
    protected $pdo; // contiendra l'instance PDO

    private function __construct(){}
    private function __clone(){}
    
    public static function getInstance(){
        // Si on a pas encore instancié notre class
        if(is_null(self::$instance)){
            self::$instance = new self; // revient à faire un new PDOManager
        }
        return self::$instance; // on retourne toujours le même objet (avec la référence [1])
    }
    public function getPdo(){
        include __DIR__ . '/../../app/Config.php'; // On ressort pour se diriger au bon endroit

        $config = new \Config(); // Config a été délcaré sans namespace dasn l'espace global, d'où l'utilisation du '\' devant Config()

        $connect = $config->getParametersConnect(); // On récupère les paramètres de connexion à travers la config

        try{
            $this->pdo = new \PDO("mysql:dbname=". $connect['dbname'] . ";host=". $connect['host'], $connect['user'], $connect['password'], array(\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION)); // PDO est une class existante déclarée dans l'espace global d'où là encore l'utilisation du '\'
        }

        catch(\PDOException $e){ // PDOException est une class existante déclarée dans l'espace global d'où là encore l'utilisation du '\'
            echo 'La connexion a échouée : ' . $e->getMessage();
        }
        return $this->pdo;
    }
}