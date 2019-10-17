<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../style.css">
    </head>

<body>
    <div class="menu">
        <div class="inner">
            <div class="m-left">
                <a href=""> <!-- éventuel lien pour le site de l'eg ou autre entre les "" -->
                    <img src="../logo.png" alt="logo de l'École de Gendarmerie de Dijon" class="logo">
                </a>
            </div>

            <div class="m-right">
                <a href="/" class="mbtn">Accueil</a>
                <a href="/search/" class="mbtn">Rechercher</a>
                <a href="/up-annonce/" class="mbtn">Soumettre annonce</a>
                <a href="/me/" class="mbtn">Mes annonces</a>
                <!-- 
                    avec php, si groupe de l'utilisateur détecté le permet -> afficher les onglets admin et modé
                    sinon nope

                    de tête, à coup de if nigend == quelquechose // groupe == quelquechose
                    {
                        echo ('<a href="/moderation/" clss="mbtn">Modération</a>');...
                    }
                    pour les rendres dispos aux SSIC / autres uniquement.
                 -->
                <a href="/moderation/" class="mbtn">Modération</a>
                <a href="/admin/" class="mbtn">Admin</a>
            </div>
            </form>
        </div>
    </div>
    <br>