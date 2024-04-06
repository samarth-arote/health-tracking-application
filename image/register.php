<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "madhura";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = $_POST["username"];
    $password = $_POST["password"];
    // Additional fields from your form
    $email = $_POST["email"];
    $terms = isset($_POST["terms"]) ? $_POST["terms"] : 0; // Assuming "terms" is the checkbox for agreeing to terms



    // You can add additional validation/sanitization here

    $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $email);

    if ($stmt->execute()) {
        header("Location: login.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
