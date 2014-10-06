<?php 
	include ("./db-api/txt-db-api.php");
	$user = $_POST["username"] ;
	$pass = $_POST["password"] ;
	$db = new Database("myDB");
	$rs=$db->executeQuery("SELECT user , pass FROM user;");
	$flag = 0;
	while($rs->next() ) {
		list($userr,$passs)=$rs->getCurrentValues();
		if ( $user == $userr  && $pass == $passs ) {
			$flag = 1;
			header("Location: afterloginsuccess.html");
		}
	}
	if ($flag == 0)	
			header("Location: loginafterfail.html");
?>
