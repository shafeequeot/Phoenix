

   

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "phoenix";

// Create connection
$conn = new mysqli($servername, $username, $password,$DB);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>
</body>
</html>

