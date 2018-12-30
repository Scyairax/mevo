<?php
if ($conn = mysql_connect("localhost","root",""))
		{	
			if (mysql_select_db("magazzino_evo", $conn))
			{
			$strSQL = "SELECT data_prelievo FROM prelievi GROUP BY data_prelievo";
			
				if($rs = mysql_query($strSQL, $conn))
				{ 
					while (($row = mysql_fetch_array($rs)) !== false)
						{
						$vResult[] = $row["data_prelievo"];
						}
					
				}		
				else
					die("impossibile effettuare la query");
			$strSQL2 = "SELECT nome FROM dipendenti GROUP BY nome";
			
				if($rs2 = mysql_query($strSQL2, $conn))
				{ 
					while (($row2 = mysql_fetch_array($rs2)) !== false)
						{
						$vResult2[] = $row2["nome"];
						}
					
				}		
				else
					die("impossibile effettuare la query");
			$strSQL3 = "SELECT tipo FROM merci GROUP BY tipo";
			
				if($rs3 = mysql_query($strSQL3, $conn))
				{ 
					while (($row3 = mysql_fetch_array($rs3)) !== false)
						{
						$vResult3[] = $row3["tipo"];
						}
					
				}		
				else
					die("impossibile effettuare la query");
			
			}
			else
				die("impossibile interrogare il database");
		}
		else
			die("impossibile connettersi al database");
?>