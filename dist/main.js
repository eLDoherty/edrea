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
    itemSelector: '.edrea-card'
  });

  // Ajax Load More
  var ajax_url = $('#button-load-more').val();
  var total_posts = parseInt($('#current_total_post').val());
  $('#button-load-more').click(function (e) {
    e.preventDefault();
    total_posts += 3;
    var wrapper = $('#edrea-ajax-wrapper');
    $.ajax({
      type: "POST",
      url: ajax_url,
      dataType: 'html',
      data: {
        action: 'edrea_load_more',
        count: total_posts
      },
      success: function (res) {
        wrapper.html(res);
        $('.edrea-masonry').masonry('reloadItems');
      },
      error: function (error) {
        console.log(error);
      }
    });
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