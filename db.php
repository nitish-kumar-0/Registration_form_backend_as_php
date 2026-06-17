<?php 
$hostname = "localhost";
$username = "root";
$password ="";
$database ="intern";

$conn = mysqli_connect($hostname,$username,$password,$database);

if(!$conn){
die("Unable to connect");
}
?>