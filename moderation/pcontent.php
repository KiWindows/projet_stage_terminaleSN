<div class="center">
    <a href="validate.php?id_annonce=<?php echo $row["id_annonce"]; ?>" class="lbtn">Valider</a>
    <a href="decline.php?id_annonce=<?php echo $row["id_annonce"]; ?>" class="lbtn">Refuser</a>
</div>

<h1 class="t1"><?php echo $row["titre"]; ?></h1>

<p>
    <div>
        <img src="../img/<?php echo $row["id_annonce"]; ?>.png" alt="" onerror="this.src='../no_logo.png';" class="pcphoto">
        <div class="pdesc">
            Prix : <?php echo $row["prix"]; ?> € <br>
            Catégorie : <?php echo $row["cat"]; ?><br>
            Publié le : <?php echo $row["date_post"]; ?> <br>
            <!-- à modifier avec le ssolocal.php -->
            <p>Description : <br>
            <p>
                <?php 
                    if (($row["libelle"]) == !NULL)
                    {
                        echo $row["libelle"];
                    }
                    else
                    {
                        echo ("Aucune description.");
                    }
                ?>
            </p>
        </div>
    </div>
</p>