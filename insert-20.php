<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MBATECH";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$first_name =  $_POST['firstname'];
$last_name =  $_POST['lastname'];
$email_address =  $_POST['email'];
 
// attempt insert query execution
$sql = "INSERT INTO myguests(firstname, lastname, email) VALUES ('$first_name', '$last_name', '$email_address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
?>