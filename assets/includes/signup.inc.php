<?php

if (isset($_POST["submit"])) {
	
	$firstname = $_POST["FirstName"];
	$lastname = $_POST["LastName"];
	$email = $_POST["Email"];
	$username = $_POST["UserName"];
	$pwd = $_POST["Password"];
	$pwdRepeat = $_POST["ConfirmPassword"];
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	if (emptyInputSignup($username, $email, $firstname, $lastname, $pwd, $pwdRepeat) !== false) {
		header("location: ../header.php?error=emptyinput");
		exit();
	}
	if (invalidUid($username) !== false) {
		header("location: ../header.php?error=invaliduid");
		exit();
	}
	if (invalidEmail($email) !== false) {
		header("location: ../header.php?error=invalidemail");
		exit();
	}
	if (pwdMatch($pwd, $pwdRepeat) !== false) {
		header("location: ../header.php?error=passwordsdontmatch");
		exit();
	}
	if (uidExsists($conn, $username, $email) !== false) {
		header("location: ../header.php?error=usernametaken");
		exit();
	}
	
	createUser($conn, $username, $email, $firstname, $lastname, $pwd);
	
}
else{
	header("location: ../header.php");
	exit();
}