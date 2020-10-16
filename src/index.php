<?php

echo 'index file <br>';

$servername = "mysql_docker";
$username = "root";
$password = "12345";
$dbname = "docker_db";
$port = '3307';

/*
$link = mysqli_connect("mysql_docker", "root", "12345", "docker_db");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);


die;
 */


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

$sql = "SELECT id, email FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Email: " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
