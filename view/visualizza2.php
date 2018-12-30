<?php									
include  'C:\xampp\htdocs\Mevo\dao\controllo_sessione.php';			//per evitare equivoci usa i percorsi assoluti
?>
<HTML>
<HEAD>
<!-- richiamo il file css -->
	<link rel="stylesheet" type="text/css" href="default.css">
<TITLE>
visualizza prelievi
</TITLE>
<FORM ACTION="http://localhost/Mevo/business/funz_visualizza.php" METHOD="POST">
<?php
include  'C:\xampp\htdocs\Mevo\model\raggruppamento_visualizza.php';			
?>
 <meta http-equiv="content-type" content="text/html; charset=utf-8">
 
    <script src="jquery/jquery-1.4.2.js"></script>
    <script src="jquery/ui/jquery.ui.core.js"></script>
    <script src="jquery/ui/jquery.ui.widget.js"></script>
    <script src="jquery/ui/jquery.ui.position.js"></script>
    <script src="jquery/ui/jquery.ui.autocomplete.js"></script>
    <link href="jquery/themes/base/jquery.ui.all.css" rel="stylesheet" />
<TITLE>
prelievo merci
</TITLE>
</HEAD>
<BODY>
<div>

<script type="text/javascript">
		function mystart()
		{
            var vVoci = new Array();
			<?php
					$i = 0;
						while ($i < count($vResult))
						{
						echo "vVoci[" . $i . "] = '" . $vResult{$i} . "';\n"; // generico output (JS in questo caso) di variabile da php
						$i++;
						}
			?>;
			 var vVoci2 = new Array();
			<?php
					$i = 0;
						while ($i < count($vResult2))
						{
						echo "vVoci2[" . $i . "] = '" . $vResult2{$i} . "';\n"; // generico output (JS in questo caso) di variabile da php
						$i++;
						}
			?>;
				 var vVoci3 = new Array();
			<?php
					$i = 0;
						while ($i < count($vResult3))
						{
						echo "vVoci3[" . $i . "] = '" . $vResult3{$i} . "';\n"; // generico output (JS in questo caso) di variabile da php
						$i++;
						}
			?>;
			$("#enter").autocomplete(
			{
                source : vVoci 
            });
			$("#enter2").autocomplete(
			{
                source : vVoci2 
            });
			$("#enter3").autocomplete(
			{
                source : vVoci3 
            });
			}			
		 $(document).ready(mystart);
		 
	 </script>
</br></br></br></br></br></br>
	 <table border="1" align = "center">
<tr>
<td>

<h3 align = "center" >visualizza prelievi</h3></br>


<h3>riempire uno o piu' campi per filtrare la ricerca<h4>
<FORM ACTION="http://localhost/funz_visualizza.php" METHOD="POST">
	<table border=1 align="center">
		<tr><td><h3 >prelievi effettuati in data (yyyy-mm-dd)</h3></td><td><input  type="text" id="enter"  name="date" /></td></tr>
		<tr><td><h3>prelievi effettuati dal dipendente</h3></td><td><input  type="text" id="enter2" name="name" /></td></tr>		 
		<tr><td><h3>prelievi effettuati su un tipo di merce</h3></td><td><input  type="text" id="enter3" name="type" /></td></tr>						 
				 
</table>
			<table align="center">
			<td>
	<INPUT TYPE="submit" VALUE="conferma dati">
	<INPUT TYPE="reset" VALUE="cancella dati">
	<A HREF="menu_magazzino.php"><INPUT TYPE="" VALUE="torna al menu"></A></br></br>
		
		<?php 
		echo  '<p align="right">utente :'.$_SESSION['nome'].' id :'.$_SESSION['id'];
		?>
			</td>
			</table>
	</td>
	</tr>
			</table>

				</FORM>

</table>
	</div>
	</BODY>
</HTML>