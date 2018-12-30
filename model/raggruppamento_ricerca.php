<?php
		if ($conn = mysql_connect("localhost","root",""))
		{	
			if (mysql_select_db("magazzino_evo", $conn))
			{
			$strSQL = "SELECT tipo FROM merci GROUP BY tipo";
			
				if($rs = mysql_query($strSQL, $conn))
				{ 
					while (($row = mysql_fetch_array($rs)) !== false)
						{
						$vResult[] = $row["tipo"];
						}
					
				}		
				else
					die("impossibile effettuare la query");
			$strSQL2 = "SELECT marca FROM merci GROUP BY marca";
			
				if($rs2 = mysql_query($strSQL2, $conn))
				{ 
					while (($row2 = mysql_fetch_array($rs2)) !== false)
						{
						$vResult2[] = $row2["marca"];
						}
					
				}		
				else
					die("impossibile effettuare la query");
			$strSQL3 = "SELECT data_deposito FROM merci GROUP BY data_deposito";
			
				if($rs3 = mysql_query($strSQL3, $conn))
				{ 
					while (($row3 = mysql_fetch_array($rs3)) !== false)
						{
						$vResult3[] = $row3["data_deposito"];
						}
					
				}		
				else
					die("impossibile effettuare la query");
			$strSQL4 = "SELECT modello FROM merci GROUP BY modello";
			
				if($rs4 = mysql_query($strSQL4, $conn))
				{ 
					while (($row4 = mysql_fetch_array($rs4)) !== false)
						{
						$vResult4[] = $row4["modello"];
						}
					
				}		
				else
					die("impossibile effettuare la query");
			$strSQL5 = "SELECT stato FROM merci GROUP BY stato";
			
				if($rs5 = mysql_query($strSQL5, $conn))
				{ 
					while (($row5 = mysql_fetch_array($rs5)) !== false)
						{
						$vResult5[] = $row5["stato"];
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