<!DOCTYPE html>
<html>
<head>
	<title>Vote UE | UE31</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1>UE31 - Informatique</h1>
	<hr>
	<form action="action.php" method="POST">
		<h3>Module général</h3>
		<input type="radio" id="bouton_algo" name="vote_ue31" value="algo"><label for="bouton_algo">Algorithmique</label><br>
		<input type="radio" id="bouton_programmationweb" name="vote_ue31" value="programmationweb"><label for="bouton_programmation">Programmation web</label><br>
		<input type="radio" id="bouton_reseaux" name="vote_ue31" value="reseaux"><label for="bouton_reseaux">Réseaux</label><br>
		<input type="radio" id="bouton_bd" name="vote_ue31" value="basedd"><label for="bouton_bd">Base de données</label><br>
		<input type="radio" id="bouton_genielogiciel" name="vote_ue31" value="genielogiciel"><label for="bouton_genielogiciel">Génie logiciel</label><br>

		<h3>Module complémentaire</h3>
		<input type="radio" id="bouton_ihm" name="vote_ue31" value="ihm"><label for="bouton_ihm">I.H.M.</label><br>
		<input type="radio" id="bouton_threads" name="vote_ue31" value="threads"><label for="bouton_threads">Threads</label><br>
		<br>
		<input type="button" name="retour_home" value="<- Accueil" onclick="self.location.href='index.php'">
		<input type="reset" id="reset_ue31" name="reset_ue31" value="Réinitialiser">
		<input type="submit" id="submit_ue31" name="submit_ue31" value="Envoyer">
	</form>
	
</body>
</html>

