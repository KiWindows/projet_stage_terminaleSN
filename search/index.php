<?php
include ('../default/header.php');
require ('../admin/logins.php');
?>
<header>
    <title>Annonces - Rechercher</title>
</header>

<div class="content">
    <h1 class="t1">Rechercher</h1>
    <h2 class="t2">Par nom</h2>
    <div class="center">
        <form action="search.php#results" method="GET">
        <input type="text" class="search" placeholder="Rechercher..." name="requete">
    </div>
    
    <h2 class="t2">Par catégorie</h2>
    <div class="center">
        <select name="categorie" class="select">
            <?php include('../default/categories.html'); ?>
        </select>
        <p>
            <input type="submit" value="Rechercher" class="lbtn">
        </p>
        </form>
    </div>

<?php include ('../default/footer.php'); ?>