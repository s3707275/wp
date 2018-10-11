const minus = document.getElementById('minus');
const plus = document.getElementById('plus');
const quantity = document.getElementById('quantity');

minus.addEventListener('click', event => {
    event.preventDefault();
    const currentValue = Number(quantity.value) || 0;
    if (currentValue >= 1) {
        quantity.value = currentValue - 1;
    } else {
        quantity = quantity;
    }
});

plus.addEventListener('click', event => {
    event.preventDefault();
    const currentValue = Number(quantity.value) || 0;
    quantity.value = currentValue + 1;
});
