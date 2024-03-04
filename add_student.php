<?php

// Database configuration
$host = 'localhost';
$dbname = 'test';
$username = 'username';
$password = 'SebandJo1';

// Get the form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birthyear = $_POST['birthyear'];

// Create a new PDO instance to connect to the database
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to insert a new record
    $sql = "INSERT INTO student (firstname, lastname, birthyear) VALUES (:firstname, :lastname, :birthyear)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':birthyear', $birthyear);

    // Execute the statement
    $stmt->execute();

    echo "New record created successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$conn = null;

?>
