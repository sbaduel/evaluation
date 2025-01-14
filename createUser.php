<?php
	require 'User.php';
	if (isset($_POST['submit']))
	{
		$pseudo = htmlspecialchars($_POST['login']); 
		$mdp = htmlspecialchars($_POST['mdp']);
		$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);
		$age = htmlspecialchars($_POST['age']);
		$date = $_POST['creation'];
		$utilisateur = new User($pseudo,$mdp,$email,$date);
		echo $utilisateur;
	}
?>