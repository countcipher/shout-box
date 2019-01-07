<?php

//Connect to MySQL

$host = "localhost";
$username = "shoutboxuser";
$password = "123456789";
$dbase = "shoutit";

$con = mysqli_connect($host, $username, $password, $dbase);


//Test Connection
if(mysqli_connect_errno()){
    echo "Failed to connect:" .mysqli_connect_error();
}


?>