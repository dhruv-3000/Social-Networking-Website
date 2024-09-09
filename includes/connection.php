<?php
//$con = mysqli_connect("localhost","root","","social_network");
ob_start();
session_start();

$con = mysqli_connect("localhost", "root", "root", "social_network");

if(mysqli_connect_errno()){
    echo "Failed to connect: " . mysqli_connect_errno();
}
?>