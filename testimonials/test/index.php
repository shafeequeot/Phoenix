<?php
require 'core.php';

if(loggedin())
{
    echo "you are logged in/////";
}
else
{
header ('location:login.php');

}

?>