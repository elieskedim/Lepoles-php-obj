# Cours Lepoles Php POO
## 3 moyens de crée un site web
 - from scratch
 - CMS
 - Framework

--------------

## Orienté objet :
**Inconvénient:**
 - Techniquement, on ne peut rien faire de plus avec l'orienté objet qu'avec le procédural.
 - En général, l'approche orienté objet est moins intuitive que l'approche procédural.

Il est effectivement, pus facile de décomposer un problème séquentiellement ligne par ligne qu'avec une interaction entre les objet. => permet une meilleure evolution vers les autres langages (c++, java, c#...)
 - Légère perte de performance, car on passe par des méthodes (get et set) au lieu de travailler directement sur la variable ou la structure.

**Avantage:**
 - Modularisé afin d'avoir un code évolutif. Si on a une série de if/else à changer à droite à gauche; en procédural il faudrait aller dans tous les fichiers dans lequel on doit faire des modifications alors qu'avec l'oo on aura juste à modifier le module correspondant.
 - Encourager le travail collaboratif. L'oo permet de normaliser le développement de notre projet, et donc de le rendre plus facilement compréhensible par d'autres développeurs.
 - Masquer la compléxité du code grâce au principe d'encapsulation. 
   * En effet, c'est plus simple de lire :
       * panier->affichage() plutot qu'une série de if/else et de boucle.
* Possibilité de documenter son code.
* Réutiliser le code, ne pas repartir de zéro, effectuer un code type pouvant etre repris sur d'autres projet.
* Faciliter la maintenance et la mise à jour.
   * Tout se passe dans la class en question.
* Assouplir le code; factorisation de code : meilleur conceptualisation.
   * Les pages seront moins chargées.
* Permet d'appréhender les autres langages beaucoup plus simplement.
* Plus d'option dans le langages (encapsulation, heritage, exception, interface ...)

------
## Vocabulaire

Variable = Propriété (= attribut)

Fonction = Méthodes

Objet = Instance

Une variable permet de contenir une information.

Un array permet de contenir plusieurs information.

Une class permet de contenir: des propriétés et des méthodes comportant des traitements.

L'objet qui va permettre d'atteindre les élèment contenus dans la classe.

**Class :** (= plan, modèle, moule à gateau)
   * Une classe est un regroupement d'informations (propriétés, valeurs, méthodes) relatives à un sujet global.

**Objet :** (= application du plan)
   * Un objet permet d'atteindre/d'accéder aux informations contenues dans la classe.

    Exemple: class Voiture
                 Propriétés : $couleur, $taille, etc...
                 Méthodes: demarrer(), rouler(), etc...

---
**3 bonnes questions à se poser l'orsque l'on développe:**
   * Mon projet est-il compréhensible par les autres développeur ?
   * Mon projet est-il réutilmisable par un autre dév ou devra-t-il réécrire toutes les classe?
   * Mon projet prévoit-il les évolutrions futures?