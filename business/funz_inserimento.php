<?php									
include  'C:\xampp\htdocs\Mevo\dao\controllo_sessione.php';			//per evitare equivoci usa i percorsi assoluti
include  'C:\xampp\htdocs\Mevo\dao\connessione_magazzino.php';	


	//acquisizione variabili dalla maschera di inserimento dati
	$tipo =	($_POST ["tipo"]);
	$quantit = ($_POST ["quantita"]);
	$marca = ($_POST ["marca"]);
	$modello = ($_POST ["modello"]);	   
	$stato = ($_POST ["stato"]);	   
	$data = Date ('Y-m-d');//questa funzione restituisce la data giornaliera   
	$scaffale = ($_POST ["scaffale"]);			   
	$descrizione = ($_POST ["descrizione"]);
	//costruzion del comando sql
	$query = "INSERT INTO merci (tipo,giacenze,marca,modello,stato,data_deposito,scaffale,descrizione) 
			   VALUES (?,?,?,?,?,?,?,?)"; 
	$bound = [$tipo,$quantit,$marca,$modello,$stato,$data,$scaffale,$descrizione];
				//se il controllo viene passato, rimani connesso, altrimenti disconnetti e dai messaggio di errore
	
				$stmt = $conn->prepare($query);
				$stmt->execute($bound);
	

	if ($stmt->rowCount()==1){

		sleep(1);
		echo "record inserito";
		header("Location: http://localhost/Mevo/view/inserimento.php");
	
			
	}
	else{
		sleep(1);
		echo "record non inserito";
		header("Location: http://localhost/Mevo/view/inserimento.php");
	}
	?>
	

