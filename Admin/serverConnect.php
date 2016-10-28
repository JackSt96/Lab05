<?php
$servername = "mysql.eecs.ku.edu";
$dbusername = "jstevens";
$password = "Password123!";
$db_name = "jstevens";

$mysqli = new mysqli($servername, $dbusername, $password, $db_name);

//check conection to database
if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
