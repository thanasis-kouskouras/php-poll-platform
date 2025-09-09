<?php

if (isset($_POST["submit"])){
	
	$name = $_POST["name"];
	$surname = $_POST["surname"];
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	$pwdrepeat = $_POST["pwdrepeat"];
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	if(emptyInputSignup($name, $surname, $email, $username, $pwd, $pwdrepeat) !== false){
		header("location: ../signup.php?error=Κενό στοιχείο");
		exit();
	}
	if(invalidUid($username1) !== false){
		header("location: ../signup.php?error=Μη έγκυρο όναμα χρήστη");
		exit();
	}
	if(invalidEmail($email1) !== false){
		header("location: ../signup.php?error=Μη έγκυρη διεύθυνση ηλεκτρονικού ταχυδρομείου");
		exit();
	}
	if(pwdMatch($pwd, $pwdrepeat1) !== false){
		header("location: ../signup.php?error=Οι κωδικοί δεν ταιριάζουν");
		exit();
	}
	if(uidExists($conn, $username1) !== false){
		header("location: ../signup.php?error=Αυτό το όναμα χρήστη υπάρχει ήδη");
		exit();
	}
	
	createusers($conn, $name, $surname, $email, $username, $pwd);
	
}
else {
	header("location: ../signup.php");
	exit();
}