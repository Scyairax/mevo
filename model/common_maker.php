<?php
//CREAZIONE DELLE VIRGOLE TRA I CAMPI DA INSERIRE NELL'UPDAT
	for ($j = 0;$j <= 6;$j++)
	{

	if	($var[$j] != null)
		{
		$sql .= $var[$j];
		$flag = 0;
		$k = $j + 1;
		while (($j <= 5)and($flag == 0)and($k <= 6))
			{
			
				if ($var[$k] != null)
					{
					
					$sql .= ",";
					$flag = 1;
					$k++;
					}
				else
					{
					$k++;
					}
			} 
		}
		
	
	}// 		porco di quel dio bastardo
?>