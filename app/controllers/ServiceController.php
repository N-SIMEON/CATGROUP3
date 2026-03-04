<?php
require_once "../app/models/Service.php";

class ServiceController {

    private $model;

    public function __construct($conn) {
        $this->model = new Service($conn);
    }

    public function store() {

        $service = $_POST['service_type'];
        $name = $_POST['client_name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $total = $_POST['total'];

        $this->model->create($service, $name, $quantity, $price, $total);

        header("Location: ../public/index.php");
    }

    public function index() {
        return $this->model->getAll();
    }
}