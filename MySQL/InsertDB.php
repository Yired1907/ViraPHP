<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vira_db";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Qui', 'Nguyen', 'qui@gmail.com'),
//        ('Truong', 'Nguyen', 'truong@gmail.com'),
//        ('Phuc', 'Nguyen', 'phuc@gmail.com')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
 VALUES ('Qui', 'Nguyen', 'qui@gmail.com'),
        ('Truong', 'Nguyen', 'truong@gmail.com'),
        ('Phuc', 'Nguyen', 'phuc@gmail.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Tuan', 'Nguyen', 'tuan@gmail.com')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
