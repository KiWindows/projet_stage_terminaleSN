<?php include ('../default/header.php');
require ('../admin/logins.php'); ?>

<head>
    <title>Annonces - Mes annonces</title>
</head>

<div class="content">
    <h1 class="t1">Mes annonces</h1>
    <h2 class="t2">Validées</h2>

    <?php

        $sql = "SELECT * FROM annonce  WHERE valide IN (1) ORDER BY `annonce`.`date_post` DESC";
        $result = mysqli_query($conn, $sql);
        /* affiche seulement les annonces de l'utilisateur ayant le même nigend que les annonces et qui ont été validées */

        if (mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                include('post.php');
            }
        }
        else
        {
            echo('<p class="note">Aucune annonce à afficher. Postez-en une dès maintenant !</p>');
            echo('<div class="center"><a href="/up-annonce/" class="lbtn">Poster une annonce</a></div>');
        }
    ?>

    <h2 class="t2">En attente de validation</h2>

    <?php
    $usernigend = 0; /* changer pour récupérer le nigend de l'utilisateur présentement connecté */

    $sql = "SELECT * FROM annonce  WHERE nigend IN ($usernigend) AND valide IN (0) ORDER BY `annonce`.`date_post` DESC";
    $result = mysqli_query($conn, $sql);
    /* affiche seulement les annonces de l'utilisateur ayant le même nigend que les annonces et qui n'ont pas été validées */

    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            include('post.php');
        }
    }
    else
    {
        echo('<p class="note">Aucune annonce en attente</p>');
    }
    ?>
</div>

<?php include ('../default/footer.php'); ?>