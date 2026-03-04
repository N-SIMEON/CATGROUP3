<?php

//NAYITURIKI SIMEON reg 2530692 role:role2
require_once "../config/db.php";
require_once "../app/controllers/ServiceController.php";

$controller = new ServiceController($conn);
$records = $controller->index();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Musanze Digital Service Desk</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">
    <h2>All Service Records</h2>

    <a href="../app/create.php">
        <button>Create New Request</button>
    </a>

    <hr>

    <table>
        <tr>
            <th>ID</th>
            <th>Service</th>
            <th>Client</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Date</th>
        </tr>

        <?php while($row = $records->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['service_type']; ?></td>
            <td><?= $row['client_name']; ?></td>
            <td><?= $row['quantity']; ?></td>
            <td><?= $row['price']; ?></td>
            <td><?= $row['total']; ?></td>
            <td><?= $row['created_at']; ?></td>
        </tr>
        <?php endwhile; ?>

    </table>

</div>

</body>
</html>