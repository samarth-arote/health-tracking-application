<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "madhura";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$weight = $_POST['weight'];
$height = $_POST['height'];

// Prepare and execute SQL query
$sql = "INSERT INTO usersinfo (username, age, dob, weight, height) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sisii", $username, $age, $dob, $weight, $height);

if ($stmt->execute()) {
    header("Location: welcom.html")
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
