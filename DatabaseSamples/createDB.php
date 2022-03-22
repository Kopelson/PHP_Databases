<?
//Create a MySQL Database - MySQLi Object-oriented

$sql = "CREATE DATABASE myDB";

if ($conn->query($sql) === TRUE){
    echo "Successfully created the database!";
} else {
    echo "Error creating database: ".$conn->error;
}

//Create a MySQL Database - MySQLi procedural

$sql = "CREATE DATABASE myDB";

if (mysqli_query($conn, $sql) === TRUE){
    echo "Successfully created the database!";
} else {
    echo "Error creating database: ".$conn->error;
}