let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick =()=>{
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
    searchForm.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick =()=>{
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick =()=>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
}
window.onscroll=()=>{
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".product-slider", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    autoplay:{
        delay:7500,
        disableOnInteraction:false,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });



