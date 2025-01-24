
<?php

$servername = "localhost";
$username  ="root";
$password = "";
$dbname = "photo_gallery";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Mysql connection Error! " . $conn->connect_error);
}





?>