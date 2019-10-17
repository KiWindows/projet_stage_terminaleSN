<div class="comment">
    <div class="comhead">
        <div class="comheadleft">
            <?php echo($row["nom"]); ?>
        </div>
        <div class="comheadright">
            <div class="msglogo">
                <a href="mailto:<?php echo($row[""]); ?>">
                <!-- changer pour le mail de la personne qui a posté le commentaire -->
                    <img src="/contact.png" alt="Contact" class="msglogo">
                </a>
            </div>
        </div>

    </div>

    <div class="combody">
        <div class="comcontent">
            <?php echo($row["libelle"]); ?>
        </div>

        <div class="comdate">
            <?php echo($row["date_post"]); ?>
        </div>
    </div>
</div>
<br>