<?php
// Gihozo patient | REG NO 2530654
// Model — handles all database operations for records

require_once __DIR__ . '/../../config/db.php';

class RecordModel {

    private $conn;

    public function __construct() {
        $this->conn = getConnection();
    }


    public function save($client, $service, $quantity, $unit_price) {
        $client     = $this->conn->real_escape_string(trim($client));
        $service    = $this->conn->real_escape_string(trim($service));
        $quantity   = intval($quantity);
        $unit_price = floatval($unit_price);
        $total      = $quantity * $unit_price;

        $sql = "INSERT INTO records (client, service, quantity, unit_price, total)
                VALUES ('$client', '$service', $quantity, $unit_price, $total)";

        if ($this->conn->query($sql)) {
            return ['success' => true, 'total' => $total];
        }
        return ['success' => false, 'error' => $this->conn->error];
    }

    public function getAll() {
        $result = $this->conn->query(
            "SELECT client, service, total, created_at FROM records ORDER BY created_at DESC LIMIT 50"
        );
        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
}
?>
