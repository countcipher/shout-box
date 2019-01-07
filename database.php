<?php

//Connect to MySQL

$host = "localhost";
$username = "usernam";//insert username of dbase
$password = "password";//insert password of dbase
$dbase = "shoutit";

$con = mysqli_connect($host, $username, $password, $dbase);


//Test Connection
if(mysqli_connect_errno()){
    echo "Failed to connect:" .mysqli_connect_error();
}


?>