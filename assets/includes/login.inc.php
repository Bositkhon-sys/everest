<?phpmailer_init
if (isset($_POST["submit"])) {
	$username = $_POST["UserName"];
	$pwd = $_POST["Password"];
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	if (emptyInputLogin($username, $pwd) !== false) {
		header("location: ../header.php?error=emptyinput");
		exit();
	}
	
	loginUser($conn, $username, $pwd);
}
else{
	header("location: ../header.php");
	exit();
}