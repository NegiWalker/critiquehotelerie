<?php require("inc/header.php") ?>
<?php
if(isset($_POST["validation"]))
{	
	$req = $bdd->prepare("INSERT INTO commentaires(idUser, idHotel, commentaire) VALUES (?,?,?)");
	$req->bindParam(1,$_SESSION["id"]);
	$req->bindParam(2,$_POST["hotel"]);
	$req->bindParam(3,$_POST["commentaire"]);
	$req->execute();
}

?>
<section>
<img src="https://picsum.photos/500/300">
<?php
foreach($bdd->query('SELECT * from hotels WHERE id = '.$_GET["id"].' ') as $row)
echo "<h1>".$row["nom"]."</h1>";
echo $row["description"]."<br/><br/>";
echo $row["adresse"]." "; 
echo $row["cp"]." "; 
echo $row["ville"]."<br/>"; 
echo "prix :".$row["prix"]."€"; ?>
<br/>
<br>
<?php
if(isset($_SESSION['id']))
{
?>
<form action="visualisation.php" method="POST">
Entrez ici votre commentaire 
<br/>
<textarea name="commentaire" rows="10" cols="100">
</textarea>
<br/>
<input name="validation" type="submit"/>
<input name="hotel" type="hidden" value="<?php echo $_GET["id"]?>"/>
<br/>
<br/>
</form>
<?php
}
?>
</section>
<?php require("inc/footer.php") ?>
