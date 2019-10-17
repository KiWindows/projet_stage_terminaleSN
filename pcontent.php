<h1 class="t1"><?php echo $row["titre"]; ?></h1>
<?php $idannonce = $row["id_annonce"]; ?>
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

<h2 class="t2">Commentaires</h2>
<h3 class="t3">Poster un commentaire</h3>
<div class="center">
    <form action="upcomment.php?id_annonce=<?php echo($idannonce); ?>" method="POST">
        <textarea name="libelle" style="width: 50%; height: 150px;"></textarea><br>
        <input type="submit" class="lbtn" value="Envoyer">
    </form>
</div>
<h3 class="t3">Commentaires postés</h3>

<?php
    $sql = "SELECT * FROM commentaires  WHERE id_annonce IN ($idannonce) ORDER BY `commentaires`.`date_post` DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            include('comment.php');
        }
    }
    else
    {
        echo('<p class="note">Aucun commentaire à afficher.</p>');
    }
    mysqli_close($conn);
?>
