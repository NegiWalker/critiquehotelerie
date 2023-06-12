<?php require("inc/header.php");


foreach($bdd->query('SELECT * from hotels') as $row) {
        
?>

<section>
	<img src="https://picsum.photos/500/300">
	<h1><a href="visualisation.php?id=<?php echo $row["id"] ?>"><?php echo $row["nom"] ?></a></h1>
	<p><?php echo $row["description"] ?></p>
</section>

<?php	
    }
?>
	
<?php require("inc/footer.php") ?>
