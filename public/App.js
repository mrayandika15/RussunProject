const Dropdown = document.querySelector('.navbar-toggler');
let open = false;
Dropdown.addEventListener('click', function () {
    if (!open) {
        Dropdown.classList.add('open');
        open = true;
    } else {
        Dropdown.classList.remove('open');
        open = false;
    }
});

const min = document.querySelectorAll('.min');
const desc = document.querySelectorAll('.desc-column');

let non = document.querySelectorAll('.non-active')

const desc1 = document.querySelectorAll('.desc-russun')

let data = true;

const dec1 = document.querySelector('.dec1')
const dec2 = document.querySelector('.dec2')
const dec3 = document.querySelector('.dec3')

desc[0].addEventListener('click', function () {

    
        non[0].classList.toggle('click');
        desc1[0].classList.toggle('afterclick');
        non[1].classList.remove('click');
    desc1[1].classList.remove('afterclick');
    non[2].classList.remove('click');
    desc1[2].classList.remove('afterclick');


   

        // non[0].classList.remove('click');
        // desc1[0].classList.remove('afterclick');
        // data = false;
    


});

desc[1].addEventListener('click', function () {

    non[1].classList.toggle('click');
    desc1[1].classList.toggle('afterclick');
    non[0].classList.remove('click');
    desc1[0].classList.remove('afterclick');
    non[2].classList.remove('click');
    desc1[2].classList.remove('afterclick');

    // if (!data) {
    //     non[1].classList.add('click');
    //     desc1[1].classList.add('afterclick');
    //     non[0].classList.remove('click');
    //     desc1[0].classList.remove('afterclick');
    //     data = true;
    // } else {

    //     non[1].classList.remove('click');
    //     desc1[1].classList.remove('afterclick');
    //     data = false;
    // }


});


desc[2].addEventListener('click', function () {

    non[2].classList.toggle('click');
    desc1[2].classList.toggle('afterclick');
    non[0].classList.remove('click');
    desc1[0].classList.remove('afterclick');
    non[1].classList.remove('click');
    desc1[1].classList.remove('afterclick');

    
});

const carousel = document.querySelector('.carousel-control-prev');

carousel.addEventListener('click' , function(){
 let inside = document.querySelector('.carousel-bg1');
 inside.classList.add('carousel-click');
});