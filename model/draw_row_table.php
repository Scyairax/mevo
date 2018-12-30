<?php
            //recupero tutti i datai dalla tabella maerci
    $query_merce = "SELECT * FROM merci ";
    $stmt = $conn->prepare($query_merce);
    $stmt->execute();

    $listaMerciComplete = [];
    $totale_righe = $stmt->rowCount();
 

    if($totale_righe!=0){
        if($stmt->rowCount() > 0){
            while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
              $prodotto = new stdClass();
              $prodotto->id = $result['id_merce'];
              $prodotto->tipo = $result['tipo'];    
              $prodotto->giacenze = $result['giacenze'];
              $prodotto->marca = $result['marca'];
              $prodotto->modello = $result['modello'];
              $prodotto->stato = $result['stato'];
              $prodotto->data_deposito = $result['data_deposito'];
              $prodotto->scaffale = $result['scaffale'];
              $prodotto->descrizione = $result['descrizione'];
                array_push($listaMerciComplete, $prodotto);
                }
            } //chiude il while
        //chiude l'if
        }else{
            $outputHTML = 'non ci sono prodotti nel magazzino';
            echo $outputHTML;
        }

          // print_r($listaMerciComplete);
           
            for($i=0;$i<count($listaMerciComplete);$i++){
                echo '<tr scope="row">';
                echo '<td class="col-xs-1"><div style="width: 20px;">'.$listaMerciComplete[$i]->id.'</div></td>';
                echo '<td class="col-xs-1"><div style="width: 60px;">'.$listaMerciComplete[$i]->tipo.'</div></td>';
                echo '<td class="col-xs-1"><div style="width: 35px;">'.$listaMerciComplete[$i]->giacenze.'</div></td>';
                echo '<td class="col-xs-2"><div style="width: 60px;">'.$listaMerciComplete[$i]->marca.'</div></td>';
                echo '<td class="col-xs-2"><div style="width: 60px;">'.$listaMerciComplete[$i]->modello.'</div></td>';
                echo '<td class="col-xs-1"><div style="width: 50px;">'.$listaMerciComplete[$i]->stato.'</div></td>';
                echo '<td class="col-xs-1"><div style="width: 90px;">'.$listaMerciComplete[$i]->data_deposito.'</div></td>';
                echo '<td class="col-xs-1"><div style="width: 70px;">'.$listaMerciComplete[$i]->scaffale.'</div></td>';
                echo '<td class="col-xs-1"><div style="width: 90px;"><a hred="#">descrizione</a></div></td>';
                echo '<td class="col-xs-1"><div style="width: 30px;"><input type="checkbox" name="'.$listaMerciComplete[$i]->id.'" value="'.$listaMerciComplete[$i]->id.'"></div></td>';
                echo '</tr>';
            }
           

        //disegno le righe della tabella
?>