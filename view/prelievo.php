<?php									
include  'C:\xampp\htdocs\Mevo\dao\controllo_sessione.php';	
require_once 'C:\xampp\htdocs\Mevo\dao\connessione_magazzino.php';
include  'C:\xampp\htdocs\Mevo\model\raggruppamento_prelievo.php';

//per evitare equivoci usa i percorsi assoluti
?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
    crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <!-- mio file css per la tabella -->
  <link rel="stylesheet" href="css/stile.css">

  <link rel="stylesheet" href="text/css" href="default.css">
  <link href="jquery/themes/base/jquery.ui.all.css" rel="stylesheet" />

  <title>menu magazzino</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><i class="fas fa-warehouse"></i> Mevo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="menu_magazzino.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="inserimento.php">Inserimento merci <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="prelievo.php">Prelievo merci <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="ricerca.php">Ricerca merci <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="modifica.php">Modifica merci <span class="sr-only">(current)</span></a>
        </li>



      </ul>

      <form ACTION="logout.php" class="form-inline my-2 my-lg-0">
        <?php
			echo  '<p  style="color : white"; > Utente&nbsp;&nbsp;:&nbsp;'.$_SESSION['nome'].'&nbsp;&nbsp;'.$_SESSION['cogn'].'&nbsp;&nbsp;&nbsp;&nbsp;</p>'; 	
		?>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LogOut</button>
      </form>
    </div>
  </nav>
 
  <!-- disegno la tabella dentro al container -->

  <div class="container">
  <br><hr> 
  <div class="row">
   
      <div class="col-md-9 tabellone">
        <table class="table table-fixed table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#id</th>
              <th scope="col">Tipo</th>
              <th scope="col">Giacenze</th>
              <th scope="col">Marca</th>
              <th scope="col">modello</th>
              <th scope="col">Stato</th>
              <th scope="col">Data deposito</th>
              <th scope="col">Scaffale</th>
              <th scope="col">Descrizione</th>
              <th scope="col">check</th>
            </tr>
          </thead>
          <tbody>
            <!-- ciclo gli elementi -->
            <?php include 'C:\xampp\htdocs\Mevo\model\draw_row_table.php';?>
            <!-- fine script php for cicle -->

          </tbody>
        </table>
      </div>  <!--chiude il div col-9 tabellone-->
      <div class="col-md-3">
  <h2> Filtra per ...</h2>      
         <!-- caricamento delle select personalkizzate  -->
      <?php include  'C:\xampp\htdocs\Mevo\view\components\select_prelievi.php';	 ?> 
      </div>
    </div>  <!---chiude il row--->
    
  </div> <!---chiude il container -->




  <script src="jquery/jquery-1.4.2.js"></script>
  <script src="jquery/ui/jquery.ui.core.js"></script>
  <script src="jquery/ui/jquery.ui.widget.js"></script>
  <script src="jquery/ui/jquery.ui.position.js"></script>
  <script src="jquery/ui/jquery.ui.autocomplete.js"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>