<?php
	require 'User.php';
	if (isset($_POST['submit']))
	{
		$pseudo = htmlspecialchars($_POST['login']); 
		$mdp = htmlspecialchars($_POST['mdp']);
		$email = htmlspecialchars($_POST['email']);
		$date = $_POST['creation'];
		$utilisateur = new User($pseudo,$mdp,$email,$date);
		echo $utilisateur;
	}
?>