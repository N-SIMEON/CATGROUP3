<?php
class Service {

    private $conn;
    private $table = "services";

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function create($service, $name, $quantity, $price, $total) {

        $stmt = $this->conn->prepare(
            "INSERT INTO {$this->table}
            (service_type, client_name, quantity, price, total)
            VALUES (?, ?, ?, ?, ?)"
        );

        $stmt->bind_param("ssidd", $service, $name, $quantity, $price, $total);
        return $stmt->execute();
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM {$this->table} ORDER BY id DESC");
    }
}