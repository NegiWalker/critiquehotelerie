<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

try
{
$bdd = new PDO('mysql:host=192.168.0.171;dbname=critiquehotel', "yanis", "yanis");
}
catch(PDOException $e)
{
	echo "Erreur de connexion à la base";
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Critique d'hôtelerie</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="design.css" />
    </head>
    <body>
        <header>
            <h1>Critique d'hôtelerie</h1>
            <nav><a href="index.php">Accueil</a> | 
            <?php
            if(isset($_GET["logout"]))
{
	session_destroy();
}
            	if(!isset($_SESSION['pseudo'])) echo "<a href='connexion.php'>Connexion</a>";
            	else echo "Bienvenue, ".$_SESSION['pseudo']." <a href='index.php?logout'>Deconnexion</a>";
            ?></nav>
            <hr/>
        </header>
