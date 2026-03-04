
//Dushimimana Salme 2528419 role :5
function calculateTotal() {
    let quantity = document.getElementById("quantity").value;
    let price = document.getElementById("price").value;

    if(quantity && price){
        document.getElementById("total").value = quantity * price;
    }
}