<?php
ini_set("display_errors",1);
//session_start();
$hostname="localhost";//127:0:01
$username="root";
$password="";
$database="bmsT";

$host="localhost";
$username="root";
$password="";
$db="";

// $conn = new mysqli($host,$username,$password,$db);
$conn = new mysqli("localhost","root","","bmsT");
if($conn->connect_error){
    //echo'failed';
}else{
    //echo'pass';
}
?>