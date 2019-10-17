<?php
    require('admin/logins.php');

    $libelle = $_POST["libelle"];
    $idannonce = $_GET["idannonce"];
    $cdate = date("Y/m/d H:i:s");

    $sql = "INSERT INTO `commentaires` (`id_annonce`, `libelle`, `nom`, `date_post`)
    VALUES ('$idannonce', '$libelle', 'UTILISATEUR', $cdate())";

    mysqli_query($conn, $sql);
?>

<meta http-equiv="refresh" content="0; URL=annonce.php?id_annonce=<?php echo($idannonce); ?>">