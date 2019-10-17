<?php
    $servername = "localhost"; /* changez "localhost" par le serveur */
    $username = "admin"; /* changez "username" pour le nom d'utilisateur qui devra utiliser la base */
    $password = "admin"; /* changez "password" par le mot de passe de l'utilisateur cité ci-dessus */
    $db = "ANNONCES"; 

    $conn = mysqli_connect($servername, $username, $password, $db);
    /* à chaque fois que le fichier est invoqué (php require ('logins.php'); il a la requête de connexion de base
    pour faciliter la tâche des futurs devs qui travailleront dessus */
?>