<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ticket_exchange";

// create connection
$conn = mysql_connect($servername, $username, $password);

// check connection
if(!$conn){
    die("Connection failed: " . mysql_connect_error());
}

// set database
mysql_select_db($database);
?>
