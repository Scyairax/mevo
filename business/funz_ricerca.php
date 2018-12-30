<?php
include  'C:\xampp\htdocs\Mevo\dao\controllo_sessione.php';	
include  'C:\xampp\htdocs\Mevo\dao\connessione_magazzino.php';
?>
<HTML>

<HEAD> 
<?php

	//acquisizione variabili dalla maschera di inserimento dati//
	$tipo = mysql_real_escape_string($_POST["tipo"]);
	$marca = mysql_real_escape_string($_POST["marca"]);
	$data_dep = mysql_real_escape_string($_POST["data_deposito"]);
	$modello = mysql_real_escape_string($_POST["modello"]);
	$stato = mysql_real_escape_string($_POST["stato"]);
	//inizio costruzione condizioni di filtraggio della query
include  'C:\xampp\htdocs\Mevo\model\creazione_condizioni_ricerca.php';
include  'C:\xampp\htdocs\Mevo\model\and_maker.php';	
?>			
	<TITLE>tabella prelievo</TITLE>

</HEAD>

	<BODY bgcolor="lightblue">
	
	<TABLE border="1" bgcolor="yellow" align="center">
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
		<DIV align="center">
			<TABLE align="center" border="20">
					<A HREF="http://localhost/Mevo/view/modifica.php"><INPUT TYPE="submit" VALUE="modifica dati merce"></A>
					<A HREF="http://localhost/Mevo/view/ricerca.php"><INPUT TYPE="submit" VALUE="torna indietro"></A></br>
	
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