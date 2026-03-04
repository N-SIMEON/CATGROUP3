<form action="index.php?action=store" method="POST" oninput="calculateTotal()">
//Iyabose Ishimwe Nicole reg:2530365//
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