 

<?php


require_once "../config/db.php";
require_once "controllers/ServiceController.php";

$controller = new ServiceController($conn);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->store();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Service Request</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">
    <h2>Create New Service</h2>
   
    <form method="POST" oninput="calculateTotal()">

        <label>Service Type</label>
        <select name="service_type" required>
            <option value="">Select Service</option>
            <option>Potato Order</option>
            <option>Event Ticket</option>
            <option>Home-stay Booking</option>
        </select>

        <label>Client Name</label>
        <input type="text" name="client_name" required>

        <label>Quantity</label>
        <input type="number" name="quantity" id="quantity" required>

        <label>Price</label>
        <input type="number" name="price" id="price" step="0.01" required>

        <label>Total</label>
        <input type="number" name="total" id="total" readonly>

        <button type="submit">Save Record</button>
    </form>

    <br>
    <a href="../public/index.php">
        <button type="button">Back to Records</button>
    </a>

</div>

<script src="../assets/js/app.js"></script>
</body>
</html>