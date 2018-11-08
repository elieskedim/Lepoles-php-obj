<?php
//Cette classe represente la connexion à la base de données. L'approche Singleton nous permettra d'être certain qu'il n'y ais pas plusieurs connexions initialisées.
namespace Manager;

class PDOManager{

    private static $instance = null; // contiendra l'instance de notre class
    protected $pdo; //Contiendra l'instance PDO

    private function __construct(){}

    private function __clone(){}

    public function getInstance(){
        //Si on a pas encore instancier notre class
        if(is_null(self::$instance)){
            self::$instance = new self;// Revien a faire un new PDOManager
        }
        return self::$instance; // on retourne toujour le même objet (avec la reference [1])
    }

    public function getPdo(){
        include __DIR__ . '/../../app/Congig.php'; // On ressort pour se diriger au bon endroit

        $config = new \Config(); //Config à été déclarer sans namespace dans l'éspace global, d'où l'utilisation du '\' devant onfig()

        $connect = $config->getParametersConnect(); //On recupère les paramètres de connexion à travers la config

        try{
            $this->pdo = new PDO("mysql:dbname" . $connect['dbname'] . ";host=" . $connect['host'], $connect['user'], $connect['password'], array(\PDO::ATTR_MODE=>\PDO::ERRMODE_EXCEPTION));
            //PDO est une classe éxistante déclaré dans l'éspace global d'où la encore le '\'
        }catch(\PDOException $e){//PDOException est une class existante déclarer dans l'éspace global d'ou le '\'
            echo "La connexion à échoué : " . $e->getMessage();
        }

        return $this->pdo;
    }



}