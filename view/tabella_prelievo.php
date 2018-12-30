<HTML>

<HEAD>
<?php
include  'C:\xampp\htdocs\Mevo\dao\controllo_sessione.php';			//per evitare equivoci usa i percorsi assoluti
include  'C:\xampp\htdocs\Mevo\dao\connessione_magazzino.php';	
	//acquisizione variabili dalla maschera di inserimento dati//
	$tipo = mysql_real_escape_string($_POST["tipo"]);
	$marca = mysql_real_escape_string($_POST["marca"]);
	$data_dep = mysql_real_escape_string($_POST["data_deposito"]);
	$modello = mysql_real_escape_string($_POST["modello"]);
	$quan_pre = mysql_real_escape_string($_POST["giacenze"]);
	//inizio costruzione condizioni di filtraggio della query
	include  'C:\xampp\htdocs\Mevo\model\creazione_condizioni_tab_prelievo.php';
	include  'C:\xampp\htdocs\Mevo\model\and_maker.php';	

?>			
	<TITLE>tabella prelievo</TITLE>
<LINK rel="stylesheet" type="text/css" href="default.css">
</HEAD>

	<BODY bgcolor="lightblue">
	
	
<?php	
		$strSQL = "SELECT id_merce,tipo,marca,modello,stato,scaffale,data_deposito,giacenze,descrizione FROM merci ".$sql;
			
			if($rs = mysql_query($strSQL, $conn))
				{ }		
				else
					die("la query non è stata effettuata, ripetere l'inserimento");
			
			//verifica dell'esistenza delle merci indicate
					$controllo = mysql_query ( $strSQL );
							if ( mysql_num_rows($controllo)==0 ) exit ("non sono presenti merci in magazzino con le caratteristiche indicate </br>");
			//fine controllo
			
					$risultato = mysql_query ( $strSQL, $conn );
							if ( ! $risultato) exit ("errore nell'interrogazione: <br> $strSQL");
?>
	<TABLE border="1" align="center">
		<tr>
					<td>id_merce</td>
					<td>tipo</td>
					<td>giacenze</td>
					<td>marca</td>
					<td>modello</td>
					<td>stato</td>
					<td>data_deposito</td>
					<td>scaffale</td>
					<td>descrizione</td>
				</tr>
<?php
	if ($rs = mysql_query($strSQL, $conn))
	
	while (($riga = mysql_fetch_array($rs)) !== false )
		{
		  echo '<tr> 
					<td>'.$riga["id_merce"].'</td>
					<td>'.$riga["tipo"].'</td>
					<td>'.$riga["giacenze"].'</td>
					<td>'.$riga["marca"].'</td>
					<td>'.$riga["modello"].'</td>
					<td>'.$riga["stato"].'</td>
					<td>'.$riga["data_deposito"].'</td>
					<td>'.$riga["scaffale"].'</td>
					<td>'.$riga["descrizione"].'</td>
				</tr>';
		}
?>
	</TABLE>
	</br></br> 
		<DIV align="center">
			<TABLE align="center" border="1">
				<FORM ACTION="http://localhost/Mevo/business/funz_prelievo.php" METHOD="POST">
					id merce				   <INPUT Type="text" NAME="id_merce" SIZE="10">
					quantita' da prelevare     <INPUT Type="text" NAME="quantita" SIZE="10">
					destinazione merce		   <INPUT Type="text" NAME="target" SIZE="10">
											   
											</br><INPUT TYPE="submit" VALUE="preleva merce">
					<A HREF="modifica.php"><INPUT TYPE="" VALUE="modifica dati merce"></A>
					<A HREF="prelievo.php"><INPUT TYPE="" VALUE="torna indietro"></A></br>
	
<?php
		//passaggio della variabile $strSQL contenente la query
		$_SESSION['query']= $strSQL;
		$_SESSION['where']= $sql;
			echo  "utente :".$_SESSION['nome']." id :".$_SESSION['id']; 	
?>

			</TABLE>
		</DIV>	
	</BODY>
</HTML>