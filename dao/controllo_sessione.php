<?php
session_start ();
//controllo login
if ($_SESSION['id'] != null)
	{} else
	die ("non è stato effettuato il login");
?>