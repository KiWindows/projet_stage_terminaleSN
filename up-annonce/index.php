<?php
    include('../default/header.php');
    require('../admin/logins.php');
?>

<head>
    <title>Annonces - Soumettre une annonce</title>
</head>

<div class="content">
    <form action="up-post.php" method="POST" enctype="multipart/form-data"> 
        <h1 class="t1">Soumettre une annonce</h1>
        <h2 class="t2">Titre de l'annonce</h2>

        <p>Choisissez un titre court mais assez détaillé. Le titre ne peux excéder 200 caractères</p>
        Titre de l'annonce: <br><input type="text" name="title" style="width: 500px;"><br>

        <h2 class="t2">Catégorie et prix</h2>
        <p>Sélectionnez à quelle catégorie appartient votre bien, et donnez lui un prix.</p>
        Prix: <br> <input type="text" name="price" style="width: 80px;"> €<br> <br>

        <select name="categorie" class="select">
            <?php include('../default/categories.html'); ?> <!-- liste des catégogies -->
        </select>

        <h2 class="t2">photos</h2>
        <p>Les photos ne sont pas obligatoires, en revanche, il est fortement recommandé 
            de mettre au moins la photo 1 (qui sera utilisée comme miniature).</p>

        <p class="note">Seules les images au format JPEG, JPG et PNG seront mises en ligne !</p>

        <p>Photo 1 : <input type="file" name="photo1" /> </p>
        <p>Photo 2 : <input type="file" name="photo2" /> </p> <!-- sélection de fichier -->
        <p>Photo 3 : <input type="file" name="photo3" /> </p>

        <h2 class="t2">Description</h2>
        <p>Détaillez votre annonce au mieux possible. La description se doit d'être complète.</p>
        Description: <br> <textarea name="libelle" style="width: 50%; height: 150px;"></textarea><br>

        <div class="center">
            <input type="submit" class="lbtn" value="Envoyer">
        </div>
    </form>
</div>

<?php
    mysqli_close($conn);
    include('../default/footer.php');
?>