<?php
// NAME NAYITURIKI SIMEON | REG NO 2530692 
// create.php — MVC entry router

require_once __DIR__ . '/../app/controllers/RecordController.php';

$action = $_GET['action'] ?? $_POST['action'] ?? '';

$controller = new RecordController();

switch ($action) {
    case 'save':
        $controller->save();
        break;
    case 'fetch':
        $controller->fetch();
        break;
    default:
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => 'Unknown action']);
        break;
}
?>
