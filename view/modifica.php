<?php									
include  'C:\xampp\htdocs\Mevo\dao\controllo_sessione.php';			//per evitare equivoci usa i percorsi assoluti
	
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="text/css" href="default.css">

    <title>menu magazzino</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-warehouse"></i>   Mevo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

