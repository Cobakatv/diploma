// let carts = document.querySelectorAll('.btn');

// for (i = 0; i < carts.length; i++) {
//     carts[i].addEventListener('click', () => {
//         cartNumbers();
//     })
// }

// function onLoadCartNumbers() {
//     let productNumbers = localStorage.getItem('cartNumbers');
//     if (productNumbers) {
//         document.querySelector('.header-shop span').textContent = productNumbers;
//     }
// }



// function cartNumbers() {
//     let productNumbers = localStorage.getItem('cartNumbers');

//     productNumbers = parseInt(productNumbers);

//     if (productNumbers) {
//         localStorage.setItem('cartNumbers', productNumbers + 1 );
//         document.querySelector('.header-shop span').textContent = productNumbers + 1;
//     } else {
//         localStorage.setItem('cartNumbers', 1 );
//         document.querySelector('.header-shop span').textContent = 1;
//     }
// }

// onLoadCartNumbers();


window.addEventListener('click', function(event) {


    const basketCount = event.target.closest('.basket-count');
    const counter = basketCount.querySelector('[data-counter]');

    if (event.target.dataset.action === 'plus') {
        console.log('plus');
        counter.value = ++counter.value;
    }



    if (event.target.dataset.action === 'minus') {
        console.log('minus');
        if (parseInt(counter.value) > 1) {
                    counter.value = --counter.value;
                }
    }
})


