<?php
include('../default/header.php');
require('../admin/logins.php'); /* connecte automatiquement à la bdd */
?>
<div class="content">
<?php
    if (!$conn)
    {
        die('
        <div class="content">
        <h1 class="t1">Soumettre une annonce</h1>
        <h2 class="t2">Erreur</h2>
        <p class="critic">
            Une erreur est survenue lors de la mise en ligne de votre annonce. Réessayez plus tard. <br>
            Si ce n est pas votre première tentative, contactez un administrateur système
            et communiquez-lui le code d erreur suivant : <br>' . $conn->mysqli_connect_error() . '</p> </div>');
    }

        $titre = $_POST["title"];
        $libelle = $_POST["libelle"];
        $cat = $_POST["categorie"];
        $date_post = date("Y/m/d H:i:s"); /* datetime du serveur */
        $prix = $_POST["price"];
        $photo1 = "1"; 
        $photo2 = "1"; 
        $photo3 = "1"; 
        
        /* --------- le bordel pour les images ---------- */
        $sql = "SHOW TABLE STATUS LIKE 'annonce'";
        $result=$conn->query($sql);
        $row = $result->fetch_assoc();
        $nextid = $row['Auto_increment']; 
        /* ce bloc récupère la prochaine ID qui va être utilisée pour l'annonce */


        $uploadOk = 1;
        $target_dir = "../postimg/";
        $target_file1 = $target_dir . $nextid . '_1'; /* le nom de fichier est déterminé par IDannonce_numéro */

        $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
        

        // if(isset($_POST["submit"])) {
        //     $check = getimagesize($_FILES["photo1"]["tmp_name"]);
        //     if($check !== false) {
        //         echo "File is an image - " . $check["mime"] . ".";
        //         $uploadOk = 1;
        //     } else {
        //         echo "File is not an image.";
        //         $uploadOk = 0;
        //     }
        // }
        
        // if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" ) {
        //     echo "Le format de fichier ne correspond pas à ceux autorisés (JPG, JPEG PNG)";
        //     $uploadOk = 0;
        //     /* vérif que les formats de fichiers sont bien ceux tolérés par le site (ici png jpeg jpg) */
        // }

        // if ($uploadOk == 0) {
        //     /* pas upload */
        // } else {
        //     /* upload */
        //     if ($cat !== ""){
                
        
        //         if (move_uploaded_file($_FILES["Photo1"]["tmp_name"], $target_file)) {
        //             echo "The file ". basename( $_FILES["Photo1"]["name"]). " has been uploaded.";
        //         } else {
        //             echo "Sorry, there was an error uploading your file.";
        //         }
        //     }
        

        /* ------------------------- */
        
        $sql = "INSERT INTO annonce (titre, libelle, cat, date_post, prix, photo1, photo2, photo3)
        VALUES ('$titre', '$libelle', '$cat', '$date_post', '$prix', '$photo1', '$photo1','$photo1')"; 
        /* fonctionne mais vas falloir faire des tests plus poussés pour récupérer à chaque fois les infos données par le SSolocal FONCTIONNEL */

        if(mysqli_query($conn, $sql))
        {
            echo'
            <h2 class="t2">Annonce envoyée</h2>
            <p class="note">Votre annonce a été envoyée à la modération. Elle fera sa parution dès sa validation.</p>
            <p>Redirection à la page accueil...</p>
            </div>
            <meta http-equiv="refresh" content="4; URL=../">
            '; /* le meta http equiv refresh permet de charger la page d'accueil après un délai de 4 secondes */
        }
        else
        {
            echo'
            <h2 class="t2">Erreur</h2>
            <p class="critic">
            Une erreur est survenue lors de la mise en ligne de votre annonce. Réessayez plus tard. <br>
            Si ce n est pas votre première tentative, contactez un administrateur système
            et communiquez-lui le code d erreur suivant : <br>'
            . $sql->mysqli_connect_error . '</p>

            <p class="note">Avez-vous mis des apostrophes dans votre annonce ? Dans ce cas, réessayez sans les mettre</p>
            <p class="note">Avez-vous rentré une catégorie valide ?</p>
            <div class="center"><a href="./" class="lbtn">Retour</a></div></div>';
        }
        
    mysqli_close($conn);
?>
</div>
<?php include('../default/footer.php'); ?>