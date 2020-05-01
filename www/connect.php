<?php

class createCon  {
    var $host = 'sql7.freemysqlhosting.net';
    var $user = 'sql7336825';
    var $pass = ' sDnADW975T';
    var $db = 'sql7336825';
    var $myconn;

    function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;
            echo 'Connection established!';}
        return $this->myconn;
    }

    function close() {
        mysqli_close($myconn);
        echo 'Connection closed!';
    }

}

?>