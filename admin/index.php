<?php include('../default/header.php'); ?>

<head>
    <title>Annonces - Admin</title>
</head>

<div class="content">
    <h1 class="t1">Page Administrateurs Système</h1>

    <div>
        <h2 class="t2">Serveur</h2>
        <h3 class="t3">Uptime</h3>
        <p>
            Le serveur est en fonctionnement depuis :

        <?php
            $str   = @file_get_contents('/proc/uptime');
            $num   = floatval($str);

            $secs  = fmod($num, 60); $num = (int)($num / 60);
            $mins  = $num % 60;      $num = (int)($num / 60); 
            $hours = $num % 24;      $num = (int)($num / 24); 
            $days  = $num;
            echo ($days . ' jours ' . $hours . ' heures ' . $mins . ' minutes');
            
            /* rêvez pas, je l'ai trouvé sur stackoverflow tout fait, 
            mais c'est intéressant de voir comment le bricolage peut-être efficace */
        ?>
        </p>
    </div>

    <div>
        <h2 class="t2">Base de Donnée</h2>
        <div class="note">
            N'oubliez pas de changer les logins du serveur dans le fichier logins.php
        </div>
        <h3 class="t3">Installation</h3>
        <br>
        <div class="center">
            <a class="btn" href="/admin/scripts/db-install.php">
                Installer la BDD
            </a>
        </div>
        <p>
            Installe automatiquement la base de donnée sur le serveur.
            Pensez à modifier le fichier <a href="/admin/scripts/">logins.php</a> pour vous assurer du bon
            déroulement de l'installation.
        </p>
        <div class="critic">
            Notez de supprimer la précédente BDD avant d'installer la nouvelle
        </div>
        <h3 class="t3">Suppression</h3>
        <div class="center">
            <a href="/admin/scripts/db-remove.php" class="btn">Supprimer la BDD</a>
        </div>
        <p>
            Supprime la base de donnée existante sur le serveur. Pensez à modifier le fichier
            <a href="/admin/scripts/">logins.php</a> pour vous assurer du bon déroulement de la suppression.
        </p>
        <div class="critic">
            La BDD ne peut être récupérée dès l'instant ou le processus de suppression est exécuté
        </div>
        <h3 class="t3">Information sur l'installation</h3>
        <div class="note">
            Les tables ainsi que les colones sont triées par ordre d'installation et par ordre hiérarchique
        </div>
        <pre class="tree">
ANNONCES
|
|- utilisateur
|   |
|   |- nom
|   |- prenom
|   |- email
|
|- annonce
|   |
|   |- id_annonce
|   |- titre
|   |- libelle
|   |- date_post
|   |- prix
|   |- photo1
|   |- photo2
|   |- photo3
|   |- valide
|
|- commentaires
|   |
|   |- id_commentaire
|   |- id_annonce
|   |- nom
|   |- libelle
|   |- date_post
        </pre>
    </div>
</div>

<?php include('../default/footer.php'); ?>
