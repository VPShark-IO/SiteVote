<!DOCTYPE html>
<html>
<head>
	<title>Vote UE | UE32</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1>UE32 - Connaissances complémentaires</h1>
	<hr>
	<form action="action.php" method="POST">
		<h3>Module général</h3>
		<input type="radio" id="bouton_maths" name="vote_ue32" value="maths"><label for="bouton_maths">Mathématiques</label><br>
		<input type="radio" id="bouton_ego" name="vote_ue32" value="ego"><label for="bouton_ego">E.G.O.</label><br>
		<input type="radio" id="bouton_anglais" name="vote_ue32" value="anglais"><label for="bouton_anglais">Anglais</label><br>
		<input type="radio" id="bouton_commexpr" name="vote_ue32" value="commexpr"><label for="bouton_commexpr">Communication - Expression</label><br>

		<h3>Module complémentaire</h3>
		<input type="radio" id="bouton_maths2" name="vote_ue32" value="maths2"><label for="bouton_maths2">Maths 2</label><br>
		<br>
		<input type="button" name="retour_ue31" value="<- Retour" onclick="self.location.href='ue31.php'">
		<input type="reset" id="reset_ue32" name="reset_ue32" value="Réinitialiser">
		<input type="submit" id="submit_ue32" name="submit_ue32" value="Envoyer">
	</form>
</body>
</html>
