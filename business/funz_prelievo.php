<?php
include  'C:\xampp\htdocs\Mevo\dao\controllo_sessione.php';			//per evitare equivoci usa i percorsi assoluti
include  'C:\xampp\htdocs\Mevo\dao\connessione_magazzino.php';	


	//acquisizione variabili dalla pagina tabella_prelievo.php //
	//   $_SESSION['query']  non serve a niente , mi serve solo per ricordare da dove provengono i dati
	//   $_SESSION['where']
	$id_merce = mysql_real_escape_string($_POST ["id_merce"]);
	$quan_pre = mysql_real_escape_string($_POST ["quantita"]);
	$target = mysql_real_escape_string($_POST ["target"]);
	$id = $_SESSION ['id'];
	//-----------------------------------------------------------------------------------------------------	
				
				
				
				
			//verifica dell'esistenza delle merci indicate
			$controllo = mysql_query ( $_SESSION['query'] );
			if ( mysql_num_rows($controllo)==0 ) exit ("non sono presenti merci in magazzino con le caratteristiche indicate </br>");
			//fine controllo
			
			$risultato =  mysql_query ("SELECT * FROM merci WHERE id_merce=$id_merce");
				
			$riga = mysql_fetch_array($risultato);
			$cond = $riga ["giacenze"];
			echo $cond; 
			if ( $cond > $quan_pre )
			{ 	
				
				$differenza = $cond - $quan_pre ;
				echo $differenza;
				mysql_query("start transaction",$conn);//begin
				mysql_query("set autocommit = 0",$conn);// per ogni query non memorizzare subito i risultati
				$query_update = "UPDATE merci SET giacenze = '$differenza' where id_merce=$id_merce";
				if(mysql_query($query_update, $conn))
				{ }		
				else 
				{
				mysql_query("rollback",$conn);
				die("l'update non è stato effettuato, ripetere l'operazione");
				}
			}
			else
			{
			
				mysql_query("start transaction",$conn);//begin
				$query_update = "UPDATE merci SET giacenze = '$differenza' where id_merce=$id_merce";
				if(mysql_query($query_update, $conn))
				{ }		
				else
				{
				mysql_query("rollback",$conn);
				die("l'update non è stato effettuato, ripetere l'operazione");
				}
			}
			//aggiornamento del prelievo nella tabella
			 $data = Date ('Y-m-d');
			 if ($cond > $quan_pre)
			 {
			 $scorte = $differenza;
			 }
			 else
			 {
			 $scorte = "terminate";
			 }
			 
			 $cmdSQL = "INSERT INTO prelievi (data_prelievo,id_dipendente,id_merce,q_prelevata,scorte,destinazione) VALUES ('$data',$id,$id_merce,$quan_pre,'$scorte','$target')";
				if(mysql_query($cmdSQL, $conn))
				{
					mysql_query("commit",$conn);
					echo "aggiornamento prelievi effettuato con successo </br>";
					
				}
				else
				{
					mysql_query("rollback",$conn);
					die("non e' stato effettuato l'aggiornamento");
				}
	echo ("<script> location.href = 'http://localhost/Mevo/view/prelievo.php'; </script>");
	?>