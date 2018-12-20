<!DOCTYPE html>
<html>
<head>
	<title>My Task List - Dencina</title>
</head>
<body>
	<form method="POST" action="add.php">
		<b><label>Tasca a realitzar: </label></b>
		<br>	
		<input type="text" name="Tasca">
		<input type="submit" name="submit" value="Afegir Tasca">
	</form>
	<br>
	<label><b>Tasques pendents: </b></label>
	<?php
		$BBDD = new PDO('mysql:host=127.0.0.1;dbname=heroku','Dencina','P@ssw0rd');
		$Query = $BBDD->prepare('SELECT Description FROM Tasks WHERE Status = 0');
		$Query->execute();
		$Result = $Query->rowCount();
		
		while ($Row = $Query->fetch(PDO::FETCH_ASSOC)) {
			
			echo "<br>&nbsp&nbsp-".$Row['Description'];
		}
	?>
	<br><br>
	<label><b>Tasques fetes: </b></label>
	<?php
		$BBDD = new PDO('mysql:host=127.0.0.1;dbname=heroku','Dencina','P@ssw0rd');
		$Query = $BBDD->prepare('SELECT Description FROM Tasks WHERE Status = 1');
		$Query->execute();
		$Result = $Query->rowCount();
		
		while ($Row = $Query->fetch(PDO::FETCH_ASSOC)) {
			
			echo "<br>&nbsp&nbsp-".$Row['Description'];
		}
	?>
</body>
</html>
