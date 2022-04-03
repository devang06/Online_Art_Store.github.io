<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "painting_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security

$pass =  $_POST['pass'];
$email =  $_POST['email'];
 
// attempt insert query execution
$sql = "INSERT INTO myusers1(pass, email) VALUES ('$pass','$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/dev/WP%20PROJECT/wp.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
?>