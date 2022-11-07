// modal 1

const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');

open.addEventListener('click', () => {
    modal_container.classList.add('show');  
});

close.addEventListener('click', () => {
    modal_container.classList.remove('show');
});

// modal 2

const open2 = document.getElementById('open2');
const modal_container2 = document.getElementById('modal_container2');
const close2 = document.getElementById('close2');

open2.addEventListener('click', () => {
    modal_container2.classList.add('show2');  
});

close2.addEventListener('click', () => {
    modal_container2.classList.remove('show2');
});