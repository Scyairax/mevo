<?php
session_start ();
session_destroy ();

?>
<html>
<head>
<LINK rel="stylesheet" type="text/css" href="default.css">
<title>Arrivederci</title>
<head>
<body bgcolor="lightblue">
<h2 align="center" >Arrivederci</h2>
	<script language="JavaScript">

	setTimeout("document.location.href='login_magaz.php'",1500);
	
	</script> 	

</body>
</html>