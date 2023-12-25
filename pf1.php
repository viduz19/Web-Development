<?php
$servername = "Localhost";
$username = "root";
$password = "";
$database = "morito";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tableName = "delivery";

$sql = "INSERT INTO $tableName (name,address, email, phone)
        VALUES ('$_POST[name]', '$_POST[address]','$_POST[email]', '$_POST[phone]')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data inserted successfully');
    window.location.href='CheckOut.php';
    </script>";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$conn->close();
?>
