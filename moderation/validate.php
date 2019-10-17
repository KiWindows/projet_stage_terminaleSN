<?php
    require('../admin/logins.php');
    $id_annonce = $_GET["id_annonce"];
    if (!$conn)
    {
        die('<div class="critic">Erreur lors de la validation de l annonce. Contactez un aministrateur et communiquez-lui cette erreur : '
        . mysqli_connect_error() . '</div>');
    }

    $sql = "UPDATE `annonce` SET `valide` = '1' WHERE `annonce`.`id_annonce` = $id_annonce";
    mysqli_query($conn, $sql); /* changement de la valeur valide de faux à vrai (0 à 1) */
?>
<meta http-equiv="refresh" content="0; URL=./">
