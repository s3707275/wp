//const minus = document.getElementById('minus');
//const plus = document.getElementById('plus');
//const quantity = document.getElementById('qty');
//
//minus.addEventListener('click', event => {
//    event.preventDefault();
//    const currentValue = Number(quantity.value) || 0;
//    if (currentValue >= 1) {
//        quantity.value = currentValue - 1;
//    } else {
//        quantity = quantity;
//    }
//});
//
//plus.addEventListener('click', event => {
//    event.preventDefault();
//    const currentValue = Number(quantity.value) || 0;
//    quantity.value = currentValue + 1;
//});

//const price = document.getElementById();
//
//
function increment(){

    var qtyField = document.getElementById("qty").value;
//    var price = document.getElementById("price").innerHTML;
//    var numberTotal = parseFloat(price);

    qtyField++;
    document.getElementById("qty").value = qtyField;
//    console.log('qty:'+qtyField);
//    document.getElementById("qty").className = document.getElementById("qty").className.replace("error", "");
//
//    var newPrice = qtyField*numberTotal;
//    newPrice = newPrice.toFixed(2);
//    var text = newPrice.toString();
//    document.getElementById("total").innerHTML = text;
//}
//
function decrement(){

    var qtyField = document.getElementById("qty").value;
//    var total = document.getElementById("price").innerHTML;
//    var numberTotal = parseFloat(total);
//
//    if(qtyField == 1) {
//        return false;
//    }
//
//    qtyField--;
//    document.getElementById("qty").value = qtyField;
//    console.log('qty:'+qtyField);
//    document.getElementById("qty").className = document.getElementById("qty").className.replace("error", "");
//
//    var newPrice = qtyField*numberTotal;
//    newPrice = newPrice.toFixed(2);
//    var text = newPrice.toString();
//    document.getElementById("total").innerHTML = text;
}
//
//function cardCheck() {
//
//    var card = document.getElementById("creditCard").value;
//    var visa = document.getElementById("visa");
//
//    if(card.charAt(0) == 4 && card.length > 12 && card.length < 17 ) {
//
//        visa.style.visibility = "visible";
//    }
//
//    else {
//            visa.style.visibility = "hidden";
//    }
//}
