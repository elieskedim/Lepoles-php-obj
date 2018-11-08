<?php 
//PDO : Php Data Object
/* 
Exec():
    INSERT, UPDATE, DELETE : Exec() est utilisé pour la formulation de requête ne retournant pas de resultat.
                             Exec() renvoie le nombre de lignes affectées par la requête.
    
    Valeur retour :
        Echec : False (BOOLEAN)
        Success : 1 (INT). Ce nombre peut bien evidemment etre supérieur tout dépend du nombre d'enregistrements affectés par la requête.
-----------------------------------------------------------------------------------------------------------------------------------------------------------
    Query() : 
        SELECT : Au contraire de Exec(), Query() est utilisé pour la formulation de requête retournant un ou plisueurs rédultats.
        Valeur de retur :
            Echec : False (BOOLEAN)
            Succes : PDOStatement (Object)
-----------------------------------------------------------------------------------------------------------------------------------------------------------

    Prepare() -> Execute() :
        INSERT, UPDATE , DELETE , SELECT : prepare() permet de préparer une requête mais ne l'execute pas.

        Excecute() permet d'éxecuter une resuête préparée.
        cette méthode est à préconiser si l'on  exécute plusieurs fois la même requête et ainsi vouloir eviter le cycle : analyse / interprétation /exécution.
        Valeur de retour:
            Prepare() renvoie TOUJOUR un PDOStatement (Object)
            Execute() :
                Echec : False (BOOLEAN)
                Succes : PDO Statement (Object)
------------------------------------------------------------------------------------------------------------------------------------------------------------
    Toutes ces methodes peuvent prendre un ou des arguments si nécessaire.
    Sauf pour Exec() : $pdo represente mon objet PDO, quand j'éxecute une requête PDO, il me retourne un objet PDOStatement (qui n'est donc plus l'objet PDO ..!!!)

    Permet d'afficher les erreur et la requête après executiopn:
        Pour Exec() ou Query() :
            print '<pre>';
            print_r($pdo->errorInfo()); //sur l'objet PDO
            print '</pre>';
        
        Pour Prepare() et Execute():
            print '<pre>';
            print_r($resultat->errorInfo()); //sur l'objet PDOStatement
            print '</pre>';

    Il est interessant d'utiliser Query ou Exec pour les requêtes en dur et d'utiliser prepare + execute pour les requetes dynamiques (incluant du post,get,etc...)
*/
$pdo = new PDO('mysql:host=localhost;dbname=entreprise_pole_s', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));

/*print '<pre>';
            print_r(get_class_methods($pdo));
print '</pre>';*/
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------
echo "<h1>SELECT + Query() + fetch()</h1>";

$resultat = $pdo->query('SELECT * from employes');// $resultat : PDOStatement
//var_dump($resultat);
/* print '<pre>';
print_r(get_class_methods($resultat));
print '</pre>';
print'<hr>';
print '<pre>';
print_r(get_object_vars($resultat));
print '</pre>'; */

$data = $resultat->fetch();// ou fetch(PDO::FETCH_ASSOC)
/* print '<pre>';
print_r($data);
print '</pre>'; */

foreach($data as $key => $value){
    echo$key . ' => ' . $value . '<br>';
}
echo '<hr>';
//fetch() ressort la première ligne de résultat et nous effectuons une boucle dessus pour afficher toutes les valeurs de chaque champs sur cette meme ligne.
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
echo "<h1>SELECT + fetch() ne renvoie pas un sel résultat si il est dans une boucle</h1>";

$resultat = $pdo->query('SELECT * from employes');// $resultat : PDOStatement

while($contenu=$resultat->fetch()){
    echo "<div>";
        echo $contenu['id_employes'] .'<br>';
        echo $contenu['prenom'] .'<br>';
        echo $contenu['nom'] .'<br>';
        echo $contenu['sexe'] .'<br>';
        echo $contenu['date_embauche'] .'<br>';
        echo $contenu['salaire'] .'<br>';
    echo "</div>";
    echo "<hr>";
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------
echo "<h1>SELECT + Query() +fetchAll() et PDO::FETCH_ASSOC</h1>";

$r = $pdo->query('SELECT * FROM employes');

$donnees = $r->fetchAll(PDO::FETCH_ASSOC); //fetchALL() retourne toutes les lignes de résultats dans un tableau multidimentionnel (sans faire de boucle)

/* print '<pre>';
print_r($donnees);
print '</pre>'; */

foreach($donnees as $indice => $contenu){
    echo '<div>';
        foreach($contenu as $indice2 => $contenu2){
            echo "$indice2 : $contenu2 <br>";
        }
    echo '</div>';
}