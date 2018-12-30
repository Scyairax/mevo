<?php
	// CREAZIONE DEGLI OPERATORI AND	
		for ($j = 0;$j <= 7;$j++)
	{

	if	($var[$j] != null)
		{
		if ($var[$j] != null)
		{
		$sql .= "AND";
		}
		$sql .= $var[$j];
		$flag = 0;
		$k = $j + 1;
		
		}
	}
?>