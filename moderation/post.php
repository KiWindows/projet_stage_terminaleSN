<div class="phcontent" class="post">
    <a href="annonce.php?id_annonce=<?php echo $row["id_annonce"]; ?>" class="post">
        <div class="ptitle">
            <?php echo $row["titre"]; ?>
        </div>
            
        <div class="pbody">
            <img src="../img/<?php echo $row["id_annonce"];?>.png" alt="" onerror="this.src='../no_logo.png';" class="photo">
            <div class="pinfo">
                Prix : <?php echo $row["prix"]; ?> €
                <hr>
                Date : <?php echo $row["date_post"]; ?>
            </div>
        </div>
    </a>
</div><br>

<div class="center">
<a href="validate.php?id_annonce=<?php echo $row["id_annonce"]; ?>" class="btn">Valider</a>
    <a href="decline.php?id_annonce=<?php echo $row["id_annonce"]; ?>" class="btn">Refuser</a>
</div> <hr>