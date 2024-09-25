<?php
$server="localhost";
$user="root";
$password="";
$database="interiordb";
$con= mysqli_connect($server,$user,$password,$database);

if(mysqli_connect_errno())
{
    printf("Connection Failed:%s\n",mysqli_connect_error());
    exit();
}
?>
