<?php
ob_start();
SESSION_START();
function loggedin(){
    

if(isset($_COOKIE['logged']) && !empty($_COOKIE['logged']))
{
    return true;
}
else
{
    return false;
}

}


?>