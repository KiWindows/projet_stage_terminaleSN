<?php
require('../logins.php'); /* ne pas oubliez de changer les logins dans ce fichier */

// Check connection
if (!$conn)
{
    echo('Avez-vous changé les identifiants / mot de passe / nom de serveur sur le fichier db-install.php ?');
    echo '<br>';
    echo('Vérifiez la connexion de votre poste sur le réseau, ainsi que celle du serveur, et vérifiez l"état de ce dernier.');
    echo '<br>';
    echo '<br>'; /* Le stagiaire présente ses plus plates excuses pour ce pissage de code dégueulasse */

    die("Connection failed: " . $conn->connect_error);
}


if (mysqli_query($conn, "DROP DATABASE " . $db)) // supprime la db existante sous le même nom
{
    echo('Base de donnée ' . $db . ' supprimée avec succès');
    echo('<br>');
}
else
{
    echo 'La base de donnée ' . $db . " n'a pas été supprimée : " . $conn->error;
    echo('<br>');
}
?>
<br>
<a href="../">retour à la page administrateurs</a>