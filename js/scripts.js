/*!
* Start Bootstrap - Business Casual v7.0.9 (https://startbootstrap.com/theme/business-casual)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-business-casual/blob/master/LICENSE)
*/
// Highlights current date on contact page
window.addEventListener('DOMContentLoaded', event => {
    const listHoursArray = document.body.querySelectorAll('.list-hours li');
    listHoursArray[new Date().getDay()].classList.add(('today'));
})


// fade in
window.addEventListener('scroll', function () {
    const fade = document.querySelectorAll('.fade');

    for (let i = 0; i < fade.length; i++) {
        var targetTop = fade[i].offsetTop;

        if (window.scrollY + 300 > targetTop) {
            fade[i].classList.add('show');
        }
    }
})


// swipper
var swipper = new Swiper(".mySwiper", {
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    breakpoints: {
        650: {
            slidesPerView: 3,
            spaceBetween: 20,
        }
    },
})

const anc = document.querySelectorAll('a[href^="#"]');

const headerHeight = document.querySelector('header').offsetHeight;

const urlHash = location.href;

for (let i = 0; i < anc.length; i++) {
    anc[i].addEventListener('click', function (e) {
        e.preventDefault();
        const href = anc[i].getAttribute("href");

        // to get the data of the scroll
        const target = document.getElementById(href.replace('#', ''));

        // to got the location of the scroll
        const position = window.pageYOffset + target.getBoundingClientRect().top - headerHeight;

        window.scroll({
            top: position,
            behavior: 'smooth'
        })
    })
}

