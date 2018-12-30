<?php			
	include 'connessione_magazzino.php';  //include il file contenenti le variabili di accesso al DBMS e al database
	
	$NOME = ($_POST ["var1"]);				//acquisizione variabili dal form login_magazzino.php
	$COGNOME = ($_POST ["var2"]);
	$ID_dipendente =($_POST ["var3"]);
																	//costruzione comando sql
	$query = "SELECT nome,cognome,id_dipendente
			   FROM dipendenti
			   WHERE (nome='$NOME')AND(cognome='$COGNOME')AND(id_dipendente='$ID_dipendente')";
																	// se il controllo viene passato , rimane connesso, altrimenti disconnetti e dai messaggio di errore
	
			$stmt = $conn->prepare($query);
			$stmt->execute();
			$righe_di_risp = $stmt->rowCount();									
	
			if($righe_di_risp!=0)  {
																			//reindirizzamento menu del magazzino
			echo ("<script> location.href = 'http://localhost/Mevo/view/menu_magazzino.php'; </script>");
		}else
		{
			
		echo ("ATTENZIONE,i dati inseriti potrebbero essere errati");
	//	exit ("credenziali d'accesso non valide")
		}


	 $_SESSION['nome']=$_POST['var1']; 
	 $_SESSION['cogn']=$_POST['var2'];
	 $_SESSION['id']=$_POST['var3'];
  ?>