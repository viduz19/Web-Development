<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "morito";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into a table named "login"
$tableName = "login";

$sql = "INSERT INTO $tableName (firstname, lastname, email, phone, password)
        VALUES ('$_POST[firstname]','$_POST[lastname]', '$_POST[email]', '$_POST[phone]','$_POST[password]')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
    header('location:login.php');
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$conn->close();
?>
