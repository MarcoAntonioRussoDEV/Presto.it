// // Tooltip Form registrazione
// var tooltipTriggerList = [].slice.call(
//     document.querySelectorAll('[data-bs-toggle="tooltip"]')
// );

// var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
//     return new bootstrap.Tooltip(tooltipTriggerEl);
// });

const selectedPriceInput = document.querySelector('#selectedPriceInput');
const selectedPrice = document.querySelector('#selectedPrice');

if(selectedPrice){
    selectedPriceInput.addEventListener('input', function(){
        selectedPrice.textContent = selectedPriceInput.value + "€";
        console.log(selectedPrice);
    })
}