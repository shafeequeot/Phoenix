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


if(isset($_POST['submit']))
{
    $username = $_POST['user'];
    $password = $_POST['Password'];
    $encpword = openssl_encrypt($password,"AES-128-ECB","password");
    $encuser = openssl_encrypt($username,"AES-128-ECB","password");
    
    
  $query = "SELECT `Name`, `Password` FROM `Loggin` WHERE `Name` = '$username' AND `Password` = '$encpword'";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        $query_num = mysqli_num_rows($result);
        if($query_num == 0)
        {
            echo "Invalid Username / Password Combination";
    
          
        }
        else if($query_num == 1)
        {
            $_SESSION['logged'] = $username;
         setcookie('logged', $encuser, time() + (86400 * 30), "/"); // 86400 = 1 day
           header('location:index.php');
        }
    }
}





//$string_to_encrypt="phonixadmin";
//$password="password";
// $enc = $encrypted_string=openssl_encrypt($string_to_encrypt,"AES-128-ECB","password");
//
//$dcr = $decrypted_string=openssl_decrypt("$encrypted_string","AES-128-ECB","password");
//
//echo "<br>encrypt= ". $enc . "<br>dncrypt= ". $dcr;

?>







<form action="" method="post">
User Name : <input type="text" Name="user"><br>
Password : <input type="password"   Name="Password"><br>
<input type="submit" name="submit">
</form>