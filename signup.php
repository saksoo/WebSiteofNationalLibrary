<?php
	include ("./db-api/txt-db-api.php");
	$username = $_POST["username"] ;
	$password = $_POST["password"] ;
	$email = $_POST["email"];
	$news  = $_POST["news"];
	$onoma = $_POST["onoma"];
	$eponimo = $_POST["eponimo"];
	$idiotita = $_POST["idiotita"];
	$epagelma = $_POST["epagelma"];
	$tautotita = $_POST["tauto"];
	$katoikia  = $_POST["katoikia"];
	$poli = $_POST["poli"];
	$tk = $_POST["tk"];
	$tilefono = $_POST["tilefono"];
//	echo " $username $password $email $news $onoma $eponimo $idiotita $epagelma $tautotita $katoikia $poli $tk $tilefono \n";
	$flag = 0;
	if ( $username=="" || $password=="" || $email=="" ) {
			$flag=1;
			header("Location: signupfail.html");
	}
	if ( $flag == 0) 
	{
		$db = new Database("myDB");
		$rs=$db->executeQuery("SELECT user,email FROM user;");
		while($rs->next() ) {
			list($userr,$emaill)=$rs->getCurrentValues();
			if ( $username == $userr) {
				$flag=1;
				break; 
			}
			if ( $email == $emaill ) {
				$flag=1;
				break;
			}
			if ( $username == $userr &&  $email == $emaill  ) {
				$flag = 1;
				break;
			}
		}
		if ($flag == 1)	
				header("Location: signupfail.html");
		else if ( $flag == 0) {
			if ( $news =="" ) $news=0;
			if ( $onoma =="" ) $onoma=0;
			if ( $eponimo =="" ) $eponimo=0;
			if ( $idiotita =="" ) $idiotita=0;
			if ( $epagelma =="" ) $epagelma=0;
			if ( $tautotita =="" ) $tautotita=0;
			if ( $katoikia =="" ) $katoikia=0;
			if ( $poli =="" ) $poli=0;
			if ( $tk =="" ) $tk=0;
			if ( $tilefono =="" ) $tilefono=0;
			$db = new Database("myDB");
			$rs=$db->executeQuery("INSERT INTO user (user,pass,email,news,onoma,eponimo,idiotita,epagelma,tautotita,katoikia,poli,tk,tilefono) VALUES ($username,$password,$email,$news,$onoma,$eponimo,$idiotita,$epagelma,$tautotita,$katoikia,$poli,$tk,$tilefono);");
			header("Location: aftersignupsuccess.html");
		}	
	}
	
?>