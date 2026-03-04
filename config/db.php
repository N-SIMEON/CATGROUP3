//Gafar mouatsm babikir role:connectdb and php reg:2528635//
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "musanze_mvc";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>