<?php
  echo '<hr>';
  echo '<div class="form-group">';
echo '<select class="form-control">';
  for($i=0;$i<count($listaMerci);$i++){
        echo '<option value="'.$listaMerci[$i]->tipo.'">'.$listaMerci[$i]->tipo.'</option>';
  }
  echo '</select>';
  echo '</div>';
echo '<hr>';
  echo '<div class="form-group">';
echo '<select class="form-control">';
  for($i=0;$i<count($listaMarcche);$i++){
        echo '<option value="'.$listaMarcche[$i]->nomeMarca.'">'.$listaMarcche[$i]->nomeMarca.'</option>';
  }
  echo '</select>';
  echo '</div>';
  echo '<hr>';
  echo '<div class="form-group">';
echo '<select class="form-control">';
  for($i=0;$i<count($listaDateDepositi);$i++){
        echo '<option value="'.$listaDateDepositi[$i]->data_deposito.'">'.$listaDateDepositi[$i]->data_deposito.'</option>';
  }
  echo '</select>';
  echo '</div>';
  echo '<hr>';
  echo '<div class="form-group">';
echo '<select class="form-control">';
  for($i=0;$i<count($listaModelli);$i++){
        echo '<option value="'.$listaModelli[$i]->serie.'">'.$listaModelli[$i]->serie.'</option>';
  }
  echo '</select>';
  echo '</div>';
?>