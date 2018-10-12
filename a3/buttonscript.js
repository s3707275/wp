function increment(){

    var qtyField = document.getElementById("qty").value;
    var price = document.getElementById("price").innerHTML;
    var numberTotal = parseFloat(price);

    qtyField++;
    document.getElementById("qty").value = qtyField;

    var newPrice = qtyField*numberTotal;
    newPrice = newPrice.toFixed(2);
    var text = newPrice.toString();
    document.getElementById("total").innerHTML = text;
}

function decrement(){

    var qtyField = document.getElementById("qty").value;
    var total = document.getElementById("price").innerHTML;
    var numberTotal = parseFloat(total);

    if(qtyField == 1) {
        return false;
    }

    qtyField--;
    document.getElementById("qty").value = qtyField;

    var newPrice = qtyField*numberTotal;
    newPrice = newPrice.toFixed(2);
    var text = newPrice.toString();
    document.getElementById("total").innerHTML = text;
}

function cardCheck() {

    var card = document.getElementById("card").value;
    var visa = document.getElementById("visa");

    if(card.charAt(0) == 4 && card.length > 12 && card.length < 17 ) {

        visa.style.visibility = "visible";
    }

    else {
            visa.style.visibility = "hidden";
    }
}
