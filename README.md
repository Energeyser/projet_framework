            ----- Administration de l'application rentrée -----
            ------------ Axel Aubry - Robin Minster -----------

Installation :

- Décompressez le fichier compressé contenant les sources à la racine de votre serveur web.
- Modifiez les identifiant et mot de passe dans le fichier connexion.php.
    Ces identifiants sont ceux demandés lors de la connexion à l'application.
- Modifiez les données d'hôte et d'identifiants de connexion à la base de donnée dans les fichiers suivants :
    -> donnees_extraire.php
    -> donnees_modifier.php
    -> fichiers_ajouter.php
    -> fichiers_modifier.php
    -> fichiers_supprimer.php
    -> promo_ajouter.php
    -> promo_modifier.php
    -> promo_supprimer.php
(L'ensemble de ces fichiers se trouve dans le dossier 'controllers'.)
Modifiez dans ces fichiers la ligne "new PDO('mysql:host=localhost;dbname=rentree;charset=utf8', 'rentree', 'rentree');" en replaçant 'localhost' et 'rentree' par les identifiants de connexion de votre base de données.