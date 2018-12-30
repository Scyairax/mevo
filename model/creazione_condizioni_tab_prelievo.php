<?php
	//CREAZIONE WHERE controlla la prima variabile , se esiste viene creato il where
	//where
	$sql = "WHERE (giacenze > 0)";
	//------------------------------------------------------------------------------
	//fine where
	//creazione var1
	if ( $tipo == NULL ) { $tipo = "";}
	else { 
	$var[0] = ("(tipo = '$tipo')"); 
		 }
	//fine creazione var1
	//creazione var2
	if ( $marca == NULL ) { $marca = ""; }
	else { 
	$var[1] = ("(marca = '$marca')"); 
		 }
	//fine var2
	//creazione var3
	if ( $data_dep == NULL ) { $data_dep = "";}
	else {
	$var[2] = ("(data_deposito = '$data_dep')");
		 }
	//fine  var3
	// inizio var4
	if ( $modello == NULL ) { $modello = "";}
	else { 
	$var[3] = ("(modello = '$modello')");
		 }
	//fine var4
?>