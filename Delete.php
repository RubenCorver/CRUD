<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php

include "config.php";

$id = $_GET["id"];

$del = mysqli_query($link,"delete from houses where id = '$id'");

if($del)
{
    mysqli_close($link);
    header("location:profile.php");
    exit;	
}
?>