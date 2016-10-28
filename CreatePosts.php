<?php
$username = $_POST["username"];
$content = $_POST["content"];

$servername = "mysql.eecs.ku.edu";
$dbusername = "jstevens";
$password = "Password123!";
$db_name = "jstevens";

$mysqli = new mysqli($servername, $dbusername, $password, $db_name);

/* check connection */

if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$sQuery = "SELECT * FROM Users WHERE user_id='$username'";
$insertQuery = "INSERT INTO posts (content, author_id) VALUES('$content','$username') ";
$userResult = $mysqli->query($sQuery);
  if (empty($content)) {
    echo "Please put content in the post";
  }
  else if ($userResult->num_rows === 0) {
    echo "user does not exist";
  } else {

  if ($mysqli->query($insertQuery)) {
    echo "New Post Created";
    echo "<br /> <br />";
    echo "<a href='../448-Lab5-master/index.html'>Index</a> ";
  } else {
    echo "Post not created";
    echo "<br /> <br />";
    echo "<a href='../448-Lab5-master/CreateUser.html'>Go to User Creation Page</a> ";
    echo "<br /> <br />";
    echo "<a href='../448-Lab5-master/CreatePosts.html'>Return to Post Creation Page</a> ";
  }
  $userResult->free();
}
//close connection
$mysqli->close();

 ?>
