<?php
    require('../admin/logins.php');

    $id_annonce = $_GET["id_annonce"];
    if (!$conn)
    {
        die('<div class="critic">
        Erreur lors de la suppression de l annonce. Contactez un aministrateur et communiquez-lui cette erreur : '
        . mysqli_connect_error() . '</div>');
    }

    $sql = "DELETE FROM `annonce` WHERE `annonce`.`id_annonce` = $id_annonce";
    $result = mysqli_query($conn, $sql);
?>

<meta http-equiv="refresh" content="0; URL=./">
