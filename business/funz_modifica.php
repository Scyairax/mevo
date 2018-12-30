<?php
include  'C:\xampp\htdocs\Mevo\dao\controllo_sessione.php';	
include  'C:\xampp\htdocs\Mevo\dao\connessione_magazzino.php';
?>
<html>
<head> 
<?php
	//acquisizione variabili dalla maschera di inserimento dati//
	$id_merce = mysql_real_escape_string($_POST["id_merce"]);
	$tipo = mysql_real_escape_string($_POST["tipo"]);
	$giacenze = mysql_real_escape_string($_POST["giacenze"]);
	$marca = mysql_real_escape_string($_POST["marca"]);
	$modello = mysql_real_escape_string($_POST["modello"]);
	$stato = mysql_real_escape_string($_POST["stato"]);
	$scaffale = mysql_real_escape_string($_POST["scaffale"]);
	$descrizione = mysql_real_escape_string($_POST["descrizione"]);
	//inizio costruzione condizioni di filtraggio della query di update
include  'C:\xampp\htdocs\Mevo\model\creazione_condizioni_modifica.php';
include  'C:\xampp\htdocs\Mevo\model\common_maker.php';	

	$update = "UPDATE merci SET ".$sql." where id_merce = $id_merce";		
			if($rs = mysql_query($update, $conn))
				{ echo "query effettuata"; }		
				else
					die("la query non è stata effettuata, ripetere l'inserimento");
			?>
</head>
	<body>
	<script language="JavaScript">

setTimeout("document.location.href='http://localhost/Mevo/view/modifica.php'",1000);//basta mettere il link assoluto e lo script java funziona correttamente
</script> 
	</body>
</html>