<?php require("inc/header.php") ?>
<body>
 <div id="container">
 <!-- zone de connexion -->
<?php 
if(isset($_POST['username']) && isset($_POST['password']))
{
	foreach($bdd->query('SELECT * from users WHERE pseudo = "'.$_POST["username"].'" and mdp ="'.$_POST["password"].'" ') as $row)
	{
		 $_SESSION['id'] = $row["id"];
		 $_SESSION['pseudo'] = $row["pseudo"];
	}
}

?>

 <form action="connexion.php" method="POST">
 <h1>Connexion</h1>

 <label><b>Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="password" required>

 <input type="submit" id='submit' value='LOGIN' >
 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 ?>
 </form>
 </div>
 </body>
<?php require("inc/footer.php") ?>
