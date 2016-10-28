<?php
$deletePost = $_POST["deleteArray"];

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
for ($i=0; $i <count($deletePost) ; $i++) {
  $query = "DELETE FROM posts WHERE post_id ='".$deletePost[$i]."'";
  if($mysqli->query($query)){
    echo "Post with ID of ".$deletePost[$i] ." deleted successfully<br>";
    echo "<br /> <br />";
    echo "<a href='../Admin/AdminHome.html'>Go to AdminHome</a> ";
  }
  else {
    echo "Deletion Failed<br>";
    echo "<br /> <br />";
    echo "<a href='../Admin/AdminHome.html'>Go to AdminHome</a> ";
    echo "<br /> <br />";
  }
}

 ?>
