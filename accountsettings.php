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
	$flag = 0;
	if ( $username=="" || $password=="" ) {
			$flag=1;
			header("Location: accountsettingsfail.html");
	}
	if ( $flag == 0) {
		$db = new Database("myDB");
		$rs=$db->executeQuery("SELECT user,pass,email,news,onoma,eponimo,idiotita,epagelma,tautotita,katoikia,poli,tk,tilefono FROM user;");
		$rsupdate = 0;
		while($rs->next() ) {
			list($userr,$passs,$emaill,$newss,$onomaa,$eponimoo,$idiotitaa,$epagelmaa,$tautotitaa,$katoikiaa,$polii,$tkk,$tilefonoo)=$rs->getCurrentValues();
			if ( $username == $userr && $password == $passs  ) {				
				//echo " $username $password $email $news $onoma $eponimo $idiotita $epagelma $tautotita $katoikia $poli $tk $tilefono \n";
				if ( $email!="" ) {
					$rsupdate=$db->executeQuery("UPDATE user SET email='$email' WHERE user='$username' ;   ");
				}
				if ( $news!="" ) {
					$rsupdate=$db->executeQuery("UPDATE user SET news='$news' WHERE user='$username' ;   ");
				}
				if ( $onoma!="" ) {
					$rsupdate=$db->executeQuery("UPDATE user SET onoma='$onoma' WHERE user='$username' ;   ");
				}
				if ( $eponimo!="" ) {
					$rsupdate=$db->executeQuery("UPDATE user SET eponimo='$eponimo' WHERE user='$username' ;   ");
				}
				if ( $idiotita!="" ) {
					$rsupdate=$db->executeQuery("UPDATE user SET idiotita='$idiotita' WHERE user='$username' ;   ");
				}
				if ( $epagelma!="" ) {
					$rsupdate=$db->executeQuery("UPDATE user SET epagelma='$epagelma' WHERE user='$username' ;   ");
				}
				if ( $tautotita!="" ) {
					$rsupdate=$db->executeQuery("UPDATE user SET tautotita='$tautotita' WHERE user='$username' ;   ");
				}
				if ( $katoikia!="" ) {
					$rsupdate=$db->executeQuery("UPDATE user SET katoikia='$katoikia' WHERE user='$username' ;   ");
				}
				if ( $poli!="" ) {
					$rsupdate=$db->executeQuery("UPDATE user SET poli='$poli' WHERE user='$username' ;   ");
				}
				if ( $tk!="" ) {
					$rsupdate=$db->executeQuery("UPDATE user SET tk='$tk' WHERE user='$username' ;   ");
				}
				if ( $tilefono!="" ) {
					$rsupdate=$db->executeQuery("UPDATE user SET tilefono='$tilefono' WHERE user='$username' ;   ");
				}
				
			}
		}
		if ( $rsupdate==1 ) 
			header("Location: accountsettingssuccess.html");
		else 
			header("Location: accountsettingsfail.html");
	}
?>