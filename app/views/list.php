<h3>All Records</h3>
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
        //UMURERWA ALLIANCE REG: 2530681 ROLE:4
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