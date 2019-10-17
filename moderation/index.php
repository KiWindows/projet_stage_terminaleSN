<?php
    include('../default/header.php');
    require('../admin/logins.php');
?>

<head>
    <title>Annonces - Modération</title>
</head>

<div class="content">
    <h1 class="t1">
        modération
    </h1>
    <h2 class="t2">
        Annonces en attente de modération
    </h2>

    <?php
        if (!$conn)
        {
            die('<div class="critic">
            Erreur lors de la récupération des articles. Contactez un aministrateur et communiquez-lui cette erreur : '
            . mysqli_connect_error() . '</div>');
        }

        $sql = "SELECT * FROM annonce  WHERE valide IN (0) ORDER BY `annonce`.`date_post` ASC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                include('post.php');
            }
        }
        else
        {
            echo(' <p class="note">');
            echo("Aucune annonce en attente de modération. Dès qu'une annonce sera soumise par un utilisateur,
            elle apparaîtra ici.</p>");
        }

        mysqli_close($conn); ?>
</div>

<?php include('../default/footer.php'); ?>