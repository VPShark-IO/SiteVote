<?php
	session_start();
	$choix_ue31 = $_GET['vote_ue31'];
	$choix_ue32 = $_GET['vote_ue32'];

	$_SESSION['vote_ue32'] = $choix_ue32 ;
	$_SESSION['vote_ue31'] = $choix_ue31 ;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vote UE | Récapitulatif résultats</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Récapitulatif</h1>
	<hr>
	<p>Voici les résultats de vos votes:</p>
	<?php
		session_start();
		echo "UE 31 - Informatique: " .$_SESSION['vote_ue32'];
		echo "<br />";
		echo "UE 32 - Général:		" .$_SESSION['vote_ue31'];
		echo "<br />";
	?>
	<br>
	<input type="button" name="retour_ue32" value="<- Retour" onclick="self.location.href='ue32.php'">
	<input type="button" name="retour_home" value="Accueil" onclick="self.location.href='index.php'">
	<input type="button" name="soumettre_vote" value="Soumettre vote" onclick="">
</body>
</html>
