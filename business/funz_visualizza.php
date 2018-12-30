<?php
include  'C:\xampp\htdocs\Mevo\dao\controllo_sessione.php';			//per evitare equivoci usa i percorsi assoluti
include  'C:\xampp\htdocs\Mevo\dao\connessione_magazzino.php';	
?>
<html>
<head>
 <!-- richiamo il file css -->
	<LINK rel="stylesheet" type="text/css" href="default.css">
<?php

	//acquisizione variabili dalla maschera di inserimento dati//
	$data = mysql_real_escape_string($_POST["date"]);
	$nome = mysql_real_escape_string($_POST["name"]);
	$tipo = mysql_real_escape_string($_POST["type"]);
	//inizio costruzione condizioni di filtraggio della query
		
	if ($data != NULL ) 
	{
	$sql = "AND prelievi.data_prelievo = '$data' "; 
	}

	//creazione var1
	if ( $nome != NULL ) 
	{ 
	$sql .= " AND dipendenti.nome = '$nome' ";
	}
	//fine creazione var1
	//creazione var2
	if ( $tipo != NULL ) 
	{ 
	$sql .= " AND merci.tipo = '$tipo' "; 
	}
	//fine where
	$strSQL = "SELECT merci.id_merce,nome,cognome,data_prelievo,tipo,scorte,q_prelevata,destinazione FROM prelievi INNER JOIN (merci,dipendenti) ON (dipendenti.id_dipendente = prelievi.id_dipendente";
	$strSQL .= " AND merci.id_merce = prelievi.id_merce ".$sql.")";
	
			if($rs = mysql_query($strSQL, $conn))
				{ echo "query effettuata</br>";}		
				else
					exit("ATTENZIONE,i dati inseriti potrebbero essere errati");
			//verifica dell'esistenza delle merci indicate
			$controllo = mysql_query ( $strSQL );
			if ( mysql_num_rows($controllo)==0 ) exit ("non sono presenti prelievi effettuati con queste caratteristiche </br>");
			//fine controllo
			$risultato = mysql_query ( $strSQL, $conn );
			if ( ! $risultato) exit ("errore nell'interrogazione: <br> $strSQL");
?>

</head>
<body>
<FORM ACTION="http://localhost/Mevo/view/visualizza2.php" METHOD="POST">
								<!--  creazione tabella -->					
  <table border="1" align="center">  
	<tr>
       <td>nome</td>
	   <td>cognome</td>
       <td>data prelievo</td>
	   <td>id_merce</td>
	   <td>tipo</td>
	   <td>scorte</td>
	   <td>q_prelievo</td>
	   <td>destinato a</td>
	</tr>
<?php
if ($rs = mysql_query($strSQL, $conn))
	
while (($riga = mysql_fetch_array($rs)) !== false )
{
echo '<tr> 
	<td>'.$riga["nome"].'</td>
	<td>'.$riga["cognome"].'</td>
	<td>'.$riga["data_prelievo"].'</td>
	<td>'.$riga["id_merce"].'</td>
	<td>'.$riga["tipo"].'</td>
	<td>'.$riga["scorte"].'</td>
	<td>'.$riga["q_prelevata"].'</td>
	<td>'.$riga["destinazione"].'</td>
	</tr>';
}
?>
</table>
<A><INPUT TYPE="submit" VALUE="torna indietro"></A>
</body>
		