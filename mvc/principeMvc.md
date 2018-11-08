# Le principe du MVC

Structure MVC : 

M : Modèle => echange BDD (requête SQL)

V : View => affichage et présentation des données (HTML/CSS)

C : Controller => traitements (PHP)

    exemple:
        - Dans le Model : je fais ma requête SQL qui vas aller récuperer tous les produits de la BDD 
        - Dans le controller : je fais des traitements (php) et décide d'afficher uniquement des produit 10 par 10
        -Dans la view : je prèsente les données (HTML/CSS) qui sortent du traitement (Controller) issue de la requete SQL (Model)

Un seule et unique point d'entré : l'index.

Les frontController (FC)

Model => Model

BackController1(BC) => backController2(BC)

View => View

**exemple : Si un internaute clic sur un lien, il déclenche une action dans la view **

