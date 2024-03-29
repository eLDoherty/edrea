/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./public/js/vanila.js ***!
  \*****************************/
document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    spaceBetween: 150,
    autoplay: {
      delay: 3000
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    pagination: {
      el: '.swiper-pagination'
    }
  });
});
/******/ })()
;
//# sourceMappingURL=vanila.js.map