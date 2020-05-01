<?php
include 'connect.php';

$latit = $_GET['lat'];
$longit = $_GET['lng'];

echo ($latit) . "\n" ;
echo ($longit) . "\n" ;

// recupero i valori si NOME e INDIRIZZO e li assegno alle variabili $name e $address
$name = $_POST['name'];
$cognome = $_POST['cognome'];
$eta = $_POST['età'];
$sesso = $_POST['sesso'];
$localita = $_POST['località'];



$connection = new MysqlClass();
$conn = $connection->connect();
$query = "INSERT INTO `dati_utenti` (`Nome`, `Cognome`, `Età`, `Sesso`, `Località`, `Latitudine`, `Longitudine`) VALUES ("
     . "'" . $name . "',"
     . "'" . $cognome . "',"
	 . "'" . $eta . "',"
     . "'" . $sesso . "',"
     . "'" . $localita . "',"
	 . "'" . $latit . "',"
     . "'" . $longit . "'
	 )";




// calcolo distanze minori di 1KM dal punto geolocalizzato
$query2="SELECT * FROM `dati_utenti`";
//$query2.="TRUNCATE ( 6363 * sqrt( POW( RADIANS('" . $latit . "') - RADIANS(Latitudine) , 2 ) + POW( RADIANS('" . $longit . "') - RADIANS(Longitudine) , 2 ) ) , 3 ) < 1";

//echo ($query2) ."\n";






	 
if (mysqli_query($conn, $query));
{
	echo "INSERIMENTO DATI AVVENUTO con successo";
}

if (mysqli_query($conn, $query2));
{
	echo "Calcolodistanze  avvenuto con successo";  
}
	









?>

