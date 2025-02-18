<?php  

$insert = false;
$update = false;
$delete = false;

$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";
$port = "4306";


$conn = mysqli_connect($servername, $username, $password, $database,$port);


if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
?>