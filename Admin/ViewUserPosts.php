<?php
$username = $_POST["user_id"];

$servername = "mysql.eecs.ku.edu";
$dbusername = "jstevens";
$password = "Password123!";
$db_name = "jstevens";

$mysqli = new mysqli($servername, $dbusername, $password, $db_name);

//check conection to database
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query = "SELECT * FROM posts WHERE author_id = '$username'";

if ($result = $mysqli->query($query)) {
  echo "<table><tr><th>Posts</th></tr>";
  while($row = $result->fetch_assoc()){
    echo "<tr><td>".$row['content']."</td></tr>";
  }
  //free the result set
  $result->free();
} else {
  echo "Error";
  echo "<br /> <br />";
  echo "<a href='../Admin/AdminHome.html'>Go to AdminHome</a> ";
  echo "<br /> <br />";
}
//close connection
$mysqli->close();
 ?>
