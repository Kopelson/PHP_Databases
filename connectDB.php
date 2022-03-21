<?php

//Open a MySQL connection - Object Oriented

$serverName = "localhost";
$userName = "username";
$password = "password";

//open MySQL connection
$conn = new mysqli($serverName, $userName, $password);

//Check connection
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
echo "Successfully connected to MySQL!";


//Open a MySQL connection - Procedural

// $serverName = "localhost";
// $userName = "username";
// $password = "password";

// //open MySQL connection
// $conn = mysqli_connect($serverName, $userName, $password);

// //Check connection
// if (!$conn){
//     die("Connection failed: ".mysqli_connect_error());
// }
// echo "Successfully connected to MySQL!";

?>