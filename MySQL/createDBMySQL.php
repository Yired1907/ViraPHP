<?php
$servername = "localhost";
$username = "root";
$password = "";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Create database
// $sql = "CREATE DATABASE myDdB";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }

// mysqli_close($conn);

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE mydataVira";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
