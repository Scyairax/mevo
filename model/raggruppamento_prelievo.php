<?php
	
//*********************************************************/
			$query = "SELECT tipo FROM merci GROUP BY tipo";
			$stmt = $conn->prepare($query);
			$stmt->execute();
			
			$listaMerci = [] ;
			$totale_righe = $stmt->rowCount();

			if($totale_righe!=0){
				if($stmt->rowCount() > 0){
					while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
					  $merce = new stdClass();
					  $merce->tipo = $result['tipo'];
						array_push($listaMerci, $merce);
						}
					} //chiude il while
				//chiude l'if
				}else{
					$outputHTML = 'non ci sono merci';
					echo $outputHTML;
				}


			//	print_r($listaMerci);
//*********************************************************/
				$query2 = "SELECT marca FROM merci GROUP BY marca" ;
			$stmt = $conn->prepare($query2);
			$stmt->execute();
			
			$listaMarcche = [] ;
			$totale_righe = $stmt->rowCount();

			if($totale_righe!=0){
				if($stmt->rowCount() > 0){
					while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
					  $marca = new stdClass();
					  $marca->nomeMarca = $result['marca'];
						array_push($listaMarcche, $marca);
						}
					} //chiude il while
				//chiude l'if
				
				}else{
					$outputHTML = 'non ci sono marche';
					echo $outputHTML;
				}
			//	print_r($listaMarcche);
//*********************************************************/
				$query3 = "SELECT data_deposito FROM merci GROUP BY data_deposito";
			$stmt = $conn->prepare($query3);
			$stmt->execute();
			
			$listaDateDepositi = [];
			$totale_righe = $stmt->rowCount();

			if($totale_righe!=0){
				if($stmt->rowCount() > 0){
					while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
					  $data = new stdClass();
					  $data->data_deposito = $result['data_deposito'];
						array_push($listaDateDepositi, $data);
						}
					} //chiude il while
				//chiude l'if
				
				}else{
					$outputHTML = 'non ci sono date di deposito';
					echo $outputHTML;
				}
				//print_r($listaDateDepositi);
//*********************************************************/
				$query4 = "SELECT modello FROM merci GROUP BY modello";
			$stmt = $conn->prepare($query4);
			$stmt->execute();
			
			$listaModelli = [];
			$totale_righe = $stmt->rowCount();

			if($totale_righe!=0){
				if($stmt->rowCount() > 0){
					while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
					  $modello = new stdClass();
					  $modello->serie = $result['modello'];
						array_push($listaModelli, $modello);
						}
					} //chiude il while
				//chiude l'if
				
				}else{
					$outputHTML = 'non ci sono modelli';
					echo $outputHTML;
				}

?>