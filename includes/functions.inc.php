<?php

function emptyInputSignup($name, $surname, $email, $username, $pwd, $pwdrepeat){
	
	if(empty($name) || empty($email) || empty($surname) || empty($username) || empty($pwd) || empty($pwdrepeat)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}


function invalidUid($username){
	
	if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}


function invalidEmail($email){
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}


function pwdMatch($pwd, $pwdrepeat){
	
	if($pwd !== $pwdrepeat){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}



function uidExists($conn, $username){
	$sql = "SELECT * FROM users WHERE usersUid = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../signup.php?error=Υπήρξε κάποιο πρόβλημα");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "s", $username);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else{
		$result = false;
		return $result;
	}
	
	mysqli_stmt_close($stmt);
}



function createusers($conn, $name, $surname, $email, $username, $pwd){
	$sql = "INSERT INTO users (usersName,usersSurname, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../signup.php?error=Υπήρξε κάποιο πρόβλημα");
		exit();
	}
	
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	
	mysqli_stmt_bind_param($stmt, "sssss", $name, $surname, $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	header("location: ../signup.php?error=Όλα πήγαν καλά");
	exit();
}



function emptyInputLogin($username, $pwd){
	
	if(empty($username) || empty($pwd)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}



function loginUser($conn, $username, $pwd){
	$uidExists = uidExists($conn, $username);
	
	if ($uidExists === false) {
		header("location: ../login.php?error=Λάθος όνομα χρήστη");
		exit();
	}
	
	$pwdHashed = $uidExists["usersPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);
	
	if ($checkPwd === false) {
		header("location: ../login.php?error=Λάθος κωδικός πρόσβασης");
		exit();
	}
	else if ($checkPwd === true){
		session_start();
		$_SESSION["userId"] = $uidExists["usersId"];
		$_SESSION["useruid"] = $uidExists["usersUid"];
		header("location: ../indexmain.php");
		exit();
	}
		
}