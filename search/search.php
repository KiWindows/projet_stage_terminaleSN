<?php
    include('index.php');
    include('../admin/logins.php');

    $requete = $_GET['requete'];
    $cat = $_GET['categorie'];
    $requete = htmlspecialchars($requete);

/*      
        j'utilise GET pour qu'on puisse mettre au point une petite API,
        des fois qu'une application puisse paraître

        voir avec AD au sujet des injections PHP.
        Normalement ça devras largement faire l'affaire
*/
?>

<p>
    <span id="results">
        <h1 class="t1" id="ttt">
            <?php
                if ($requete !== NULL)
                {
                    echo ('résultats pour ' . $requete);
                }
                if ($cat !== NULL)
                {
                    echo ($cat);
                }
            ?>
        </h1>

        <?php
        if ($requete !== "")
        {
            $sql = "SELECT * FROM annonce
            WHERE valide IN (1) AND titre LIKE '%". $requete . "%' OR libelle LIKE '%". $requete . "%' ORDER BY `annonce`.`date_post` DESC";
            /* reprendre ces deux lignes ci dessus pour la page mes annonces */
        }
        elseif ($cat !== "")
        {
            $sql = "SELECT * FROM annonce
            WHERE valide IN (1) AND cat LIKE '$cat' ORDER BY `annonce`.`date_post` DESC";
        }
        else
        {
            echo(' <p class="critic">Aucun résultat. Réessayez avec une autre requête, et assurez-vous '
            . "d'avoir " . 'entré un mot clé ou sélectionné une catégorie.</p>');
        }
        
         $result = mysqli_query($conn, $sql);
         if (mysqli_num_rows($result) > 0)
         {
            while($row = mysqli_fetch_assoc($result))
            {
                include('../post.php');
            }
        }
        else
        {
            echo(' <p class="critic">Aucun résultat. Réessayez avec une autre requête, et assurez-vous ' . "d'avoir " . 'entré un mot clé ou sélectionné une catégorie.</p>');
        }
         ?>
    </span>
</p>
</div>

<?php include('../default/footer.php'); ?>