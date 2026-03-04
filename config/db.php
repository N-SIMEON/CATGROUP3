<?php
// NAME DUSHIMIMANA SALME | REG NO 2528419
// Database Configuration

define('DB_HOST', 'sql111.byetcluster.com');   
define('DB_USER', 'if0_41298433');              
define('DB_PASS', 'YOUR_PASSWORD_HERE');        
define('DB_NAME', 'if0_41298433_order');       

function getConnection() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->set_charset("utf8mb4");
    return $conn;
}
?>
