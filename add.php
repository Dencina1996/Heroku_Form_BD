<?php
	$Tasca = $_POST["Tasca"];
	$BBDD = new PDO('mysql:host=127.0.0.1;dbname=heroku','Dencina','P@ssw0rd');
	$Query = $BBDD->prepare('INSERT INTO Tasks VALUES (null,"'.$Tasca.'",0);');
	$Query->execute();
	header("location: index.php");
?>