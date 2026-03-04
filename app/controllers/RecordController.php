<?php
// NAME | REG NO | ROLE
// Controller — processes requests and returns JSON responses

require_once __DIR__ . '/../models/RecordModel.php';

class RecordController {

    private $model;

    public function __construct() {
        $this->model = new RecordModel();
    }

    // Handle save action
    public function save() {
        header('Content-Type: application/json');

        $client     = $_POST['client']     ?? '';
        $service    = $_POST['service']    ?? '';
        $quantity   = $_POST['quantity']   ?? 0;
        $unit_price = $_POST['unit_price'] ?? 0;

        if (!$client || !$service || $quantity <= 0 || $unit_price <= 0) {
            echo json_encode(['success' => false, 'error' => 'All fields are required.']);
            return;
        }

        $result = $this->model->save($client, $service, $quantity, $unit_price);

        if ($result['success']) {
            echo json_encode([
                'success' => true,
                'message' => 'Record saved successfully!',
                'total'   => number_format($result['total'], 0)
            ]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Save failed: ' . $result['error']]);
        }
    }

    // Handle fetch action
    public function fetch() {
        header('Content-Type: application/json');
        $records = $this->model->getAll();
        echo json_encode(['success' => true, 'records' => $records]);
    }
}
?>
