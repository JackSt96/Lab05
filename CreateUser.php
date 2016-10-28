<?php
error_reporting(E_ALL);
$username = $_POST["username"];

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
$query = "INSERT INTO users (user_id) VALUES('$username')";
if (empty($username)) {
  echo "Please give a username";
}
else if ($mysqli->query($query)===TRUE) {
  echo "New Record Created";
  echo "<br /> <br />";
  echo "<a href='../448-Lab5-master/index.html'>Index</a> ";
} else {
  echo "user not created";
  echo "<br /> <br />";
  echo "<a href='../448-Lab5-master/CreateUser.html'>Go to User Creation Page</a> ";
  echo "<br /> <br />";
  echo "<a href='../448-Lab5-master/CreatePosts.html'>Return to Post Creation Page</a> ";
}
//close connection
$mysqli->close();

 ?>
