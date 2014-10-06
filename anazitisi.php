<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Εθνική βιβλιοθήκη της Ελλάδος</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="wrap">
			<div id="header">
				<h1>Εθνική Βιβλιοθήκη της Ελλάδος</h1>
				<a href="index.html">
				<img src="head.jpg" alt="Head Image" height="230" width="760" />
				</a>
			</div>
			<div id="nav">
				<ul>	
					<li><a href="index.html">Αρχική</a></li>
					<li><a href="login.html">Είσοδος χρήστη</a></li>
					<li><a href="signup.html">Δημιουργία λογαριασμού</a></li>
					<li><a href="#">Καλάθι χρήστη*</a></li>
					<li><a href="#">Βοήθεια</a></li>
				</ul>
				<div id="search">			
												<form action="anazitisi.php" method="POST">
												<input type="text" name="keimeno" />
												<input type="submit" value="Αναζήτηση" />
												</form>
				</div>				
			</div>
			<div id="main">
		<!--		<h2>Κεντρικό μενού</h2>		-->
				<ul>	
					<li><a href="index.html">Αρχική</a></li>
					<li><a href="#">Ανακοινώσεις</a></li>
					<li><a href="sintheti.html">Αναζήτηση</a></li>
					<li><a href="plirofories.html">Πληροφορίες</a></li>
					<li><a href="katalogos.html">Κατάλογος</a></li>
					<li><a href="#">Για βιβλιοθηκονόμους</a></li>
					<li><a href="#">Για εκδότες</a></li>
					<li><a href="#">Νέα</a></li>
				</ul>
				<img src="logo.jpeg" alt="logo" width="200" height="150" /> 
				
			</div>
			<div id="periexomeno">
				<p style="font-size:15px;margin:-2;"><a href="index.html">Αρχική</a><span style="color:red;font-size:20px;"> -> </span>Αναζήτηση</p><br />
				<p style="font-size:14px;margin-top:-22px;">*Για να δανειστείτε κάποιο βιβλίο πιέστε πάνω στον τίτλο του. Προσοχή η διαδικασία απαιτεί να έχετε κάνει είσοδο στο σύστημα.</p> 
				<table  style="margin-left:auto;margin-right:auto;"  cellpadding="5" cellspacing="10" border="1">
				<tr>
					<td><p align="center" style="color:blue;"><strong><u>Τίτλος</u></strong></p></td>
					<td><p align="center" style="color:blue;"><strong><u>Συγγραφέας</u></strong></p></td>
					<td><p align="center" style="color:blue;"><strong><u>Εκδόσεις</u></strong></p></td>
					<td><p align="center" style="color:blue;"><strong><u>Είδος</u></strong></p></td>
					<td><p align="center" style="color:blue;"><strong><u>ISBN</u></strong></p></td>
					<td><p align="center" style="color:blue;"><strong><u>Χρονολογία</u></strong></p></td>
				</tr>	
				<tr>
					<td style="font-size:13px;"><?php
								include ("./db-api/txt-db-api.php");
								$keimeno = $_POST["keimeno"];
								$db = new Database("myDB");
								$rs=$db->executeQuery("SELECT Nr,titlos,sugrafeas,ekdoseis,eidos,isbn,xronologia FROM biblia;");
								while($rs->next() ) {
									list($nrr,$titloss,$sugrafeass,$ekdoseiss,$eidoss,$isbnn,$xronologiaa)=$rs->getCurrentValues();
									if ( $keimeno == $titloss  ||$keimeno==$sugrafeass ||$keimeno==$ekdoseiss ||$keimeno==$eidoss ||$keimeno==$isbnn ||$keimeno==$xronologiaa ) {
										echo "<p>$titloss</p>";
									}
								}
								
								?>
					</td>
					<td style="font-size:13px;"><?php
								$db = new Database("myDB");
								$rs=$db->executeQuery("SELECT Nr,titlos,sugrafeas,ekdoseis,eidos,isbn,xronologia FROM biblia;");
								while($rs->next() ) {
									list($nrr,$titloss,$sugrafeass,$ekdoseiss,$eidoss,$isbnn,$xronologiaa)=$rs->getCurrentValues();
									if ( $keimeno == $titloss  ||$keimeno==$sugrafeass ||$keimeno==$ekdoseiss ||$keimeno==$eidoss ||$keimeno==$isbnn ||$keimeno==$xronologiaa ) {
										echo "<p>$sugrafeass</p>";
									}
								}
						?>
					</td>
					<td style="font-size:13px;"><?php
								$db = new Database("myDB");
								$rs=$db->executeQuery("SELECT Nr,titlos,sugrafeas,ekdoseis,eidos,isbn,xronologia FROM biblia;");
								while($rs->next() ) {
									list($nrr,$titloss,$sugrafeass,$ekdoseiss,$eidoss,$isbnn,$xronologiaa)=$rs->getCurrentValues();
									if ( $keimeno == $titloss  ||$keimeno==$sugrafeass ||$keimeno==$ekdoseiss ||$keimeno==$eidoss ||$keimeno==$isbnn ||$keimeno==$xronologiaa ) {
										echo "<p>$ekdoseiss</p>";
									}
								}
						?>
					</td>
					<td style="font-size:13px;"><?php
								$db = new Database("myDB");
							$rs=$db->executeQuery("SELECT Nr,titlos,sugrafeas,ekdoseis,eidos,isbn,xronologia FROM biblia;");
								while($rs->next() ) {
									list($nrr,$titloss,$sugrafeass,$ekdoseiss,$eidoss,$isbnn,$xronologiaa)=$rs->getCurrentValues();
									if ( $keimeno == $titloss  ||$keimeno==$sugrafeass ||$keimeno==$ekdoseiss ||$keimeno==$eidoss ||$keimeno==$isbnn ||$keimeno==$xronologiaa ){
										echo "<p>$eidoss</p>";
									}
								}
						?>
					</td>
					<td style="font-size:13px;"><?php
								$db = new Database("myDB");
								$rs=$db->executeQuery("SELECT Nr,titlos,sugrafeas,ekdoseis,eidos,isbn,xronologia FROM biblia;");
								while($rs->next() ) {
									list($nrr,$titloss,$sugrafeass,$ekdoseiss,$eidoss,$isbnn,$xronologiaa)=$rs->getCurrentValues();
									if ( $keimeno == $titloss  ||$keimeno==$sugrafeass ||$keimeno==$ekdoseiss ||$keimeno==$eidoss ||$keimeno==$isbnn ||$keimeno==$xronologiaa ) {
										echo "<p>$isbnn</p>";
									}
								}
						?>
					</td>
					<td style="font-size:13px;"><?php
								$db = new Database("myDB");
								$rs=$db->executeQuery("SELECT Nr,titlos,sugrafeas,ekdoseis,eidos,isbn,xronologia FROM biblia;");
								while($rs->next() ) {
									list($nrr,$titloss,$sugrafeass,$ekdoseiss,$eidoss,$isbnn,$xronologiaa)=$rs->getCurrentValues();
									if ( $keimeno == $titloss  ||$keimeno==$sugrafeass ||$keimeno==$ekdoseiss ||$keimeno==$eidoss ||$keimeno==$isbnn ||$keimeno==$xronologiaa ) {
										echo "<p>$xronologiaa</p>";
									}
								}
						?>
					</td>
				</tr>
				</table>
			<p style="text-align:center;font-size:20px;border-top:2px solid black;border-bottom:2px solid black;"><a href="sintheti.html">Για σύνθετη αναζήτηση παρακαλώ πατήστε εδώ</a></p>
			</div>
			<div id="footer">
				<p class="wrario">Ώρες Λειτουργίας : Καθημερινά 08:00-14:00<span style="color:red;margin-left:200px;">*απαιτείται εγγραφή</span></p>
				<p><a href="index.html">Αρχική&nbsp;&nbsp; </a><a href="#">Επικοινωνία &nbsp; </a><a href="#">  Χάρτης</a></p>
			</div>
		</div>
		
	</body>
</html>
