<?php					//avvio sessione

if ($_SESSION['id'] != null)
	{} else
       { session_start (); } 
//variabili accesso al database
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "magazzino_evo";



						//apertura connessione al database
//apertura connessione al database
try {
    $conn = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>