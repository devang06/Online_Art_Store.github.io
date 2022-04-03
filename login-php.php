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

    $myusername = mysqli_real_escape_string($conn,$_POST['email']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 
      
      $sql = "SELECT id FROM myusers1 WHERE email = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        header("Location: http://localhost/dev/WP%20PROJECT/welcome.html");
      }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
?>