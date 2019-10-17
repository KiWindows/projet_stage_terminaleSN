<!-- 
    Script d'installation de la BDD du site d'annonces pour l'école de Gendarmerie de Dijon
    Pensez évidemment à changez les variables dans le fichier logins.php pour permettre le bon déroulement de l'installation
 -->

<?php require('../logins.php'); /* ne pas oublier de changer les logins dans ce fichier */

// on n'utilise pas la variable $conn du fichier logins.php car la BDD n'est théoriquement pas encore créée !
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn)
{
    echo('Avez-vous changé les identifiants / mot de passe / nom de serveur sur le fichier db-install.php ?');
    echo '<br>';
    echo('Vérifiez la connexion de votre poste sur le réseau, ainsi que celle du serveur, et vérifiez l"état de ce dernier.');
    echo '<br><br>'; /* Le stagiaire présente ses plus plates excuses pour ce pissage de code dégueulasse */

    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE $db";
if (mysqli_query($conn, $sql))
{
    echo '<div class="note">Base de donnée ' . $db . ' créée avec succès</div>';
    echo('<br><br>');
}
else
{
    echo "La base de donnée " . $db . " n'a pas été créée. Erreur: " . $conn->error;
    echo('<br>');
    echo("Vérifiez que la BDD n'est pas déjà existante");    
    echo('<br><br>');
}

$sql1 = "USE " . $db;
mysqli_query($conn, $sql1); /* là on sélectionne la BDD créée car sinon ça fonctionne pas */

$sql2 = "CREATE TABLE utilisateurs ( /* création d'une table */
nom VARCHAR(30) NOT NULL, /* les colonnes à créer */
prenom VARCHAR(30) NOT NULL,
email VARCHAR(80) NOT NULL )";

if (mysqli_query($conn, $sql2))
{
    echo('La table utilisateurs a bien été créée.');
    echo('<br><br>');
}
else
{
    echo('Erreur durant la création de la table utilisateurs. Erreur: ') . $conn->error;
    echo('<br><br>');
}

$sql3 = "CREATE TABLE annonce (
id_annonce INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
titre VARCHAR(200) NOT NULL,
libelle VARCHAR(2000) NOT NULL,
cat CHAR(32) NOT NULL,
date_post DATETIME NOT NULL,
prix INT(9) NOT NULL,
photo1 VARCHAR(1),
photo2 VARCHAR(1),
photo3 VARCHAR(1),
valide BOOLEAN NOT NULL DEFAULT FALSE
)"; 

if (mysqli_query($conn, $sql3)) {
    echo('La table annonce a bien été créée.');
    echo('<br><br>');
}
else
{
    echo('Erreur durant la création de la table annonce. Erreur: ') . $conn->error;
    echo('<br><br>');
}

$sql4 = "CREATE TABLE commentaires (
id_commentaire INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id_annonce INT(6) UNSIGNED,
libelle VARCHAR(1000) NOT NULL,
nom VARCHAR(30) NOT NULL,
date_post DATETIME NOT NULL)";

if (mysqli_query($conn, $sql4))
{
    echo('La table commentaires a bien été créée.');
    echo('<br><br>');
}
else
{
    echo('Erreur durant la création de la table annonce. Erreur: ') . $conn->error;
    echo('<br><br>');
}
            
$conn->close();
?>
<br>
<a href="../">retour à la page administrateurs</a>