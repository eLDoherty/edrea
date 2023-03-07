/******/ (function() { // webpackBootstrap
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
!function() {
/*!***************************!*\
  !*** ./public/js/main.js ***!
  \***************************/
jQuery(document).ready(function ($) {
  // Masonry layout
  $('.edrea-masonry').masonry({
    itemSelector: '.edrea-card',
    gutter: 0,
    stagger: 30,
    percentPosition: true,
    columnWidth: '.edrea-grid-sizer'
  });

  // Ajax Load More
  var ajax_url = $('#button-load-more').val();
  var total_posts = 1;
  $('#button-load-more').click(function (e) {
    e.preventDefault();
    total_posts += 1;
    $(this).text('Loading...');
    $.ajax({
      type: "POST",
      url: ajax_url,
      dataType: 'html',
      data: {
        action: 'edrea_load_more',
        count: total_posts
      },
      success: function (res) {
        if (res) {
          var $content = $(res);
          $('#button-load-more').text('Load more');
          $('.edrea-masonry').append($content).masonry('appended', $content);
          $('.edrea-masonry').masonry('reloadItems');
          $('html, body').animate({
            scrollTop: $("#button-load-more").offset().top
          }, 200);
        } else {
          $('#button-load-more').text($('#button-text').val());
        }
      }
    });
  });

  // Mobile menu button handler
  $('.edrea-mobile-button').click(function () {
    $('.edrea-mobile-navigation').css({
      left: '40px',
      opacity: '1'
    });
  });
  $('.close-mobile-menu').click(function () {
    $('.edrea-mobile-navigation').css({
      left: '100%',
      opacity: '0'
    });
  });
  $('.menu-item-depth-0.menu-item-has-children').click(function (e) {
    $(this).children('.menu-depth-1').slideToggle();
    $(this).toggleClass('menu-active');
  });
});
}();
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
!function() {
"use strict";
/*!*******************************!*\
  !*** ./public/scss/main.scss ***!
  \*******************************/
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin

}();
/******/ })()
;
//# sourceMappingURL=main.js.map