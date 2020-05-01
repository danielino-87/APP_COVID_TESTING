<?php
class MysqlClass
{
// parametri per la connessione al database
private $nomehost = "sql7.freemysqlhosting.net";
private $nomeuser = "sql7336825";
private $password = "sDnADW975T";
private $database = "sql7336825";
// controllo sulle connessioni attive
private $attiva = false;
// funzione per la connessione a MySQL
public function connect()
{
if(!$this->attiva)
{
$connessione = mysql_connect($this->nomehost,$this->nomeuser,$this->password);
}else{
return true;
}
}
}
?>