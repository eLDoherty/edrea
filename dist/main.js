/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./public/js/main.js":
/*!***************************!*\
  !*** ./public/js/main.js ***!
  \***************************/
/***/ (function() {

jQuery(document).ready(function ($) {
  $('#edrea-ajax-wrapper').imagesLoaded(function () {
    $('#edrea-ajax-wrapper').masonry({
      itemSelector: '.edrea-card',
      transitionDuration: '1.5s',
      columnWidth: '.edrea-grid-sizer'
    });
  });

  // Ajax Load More
  var ajax_url = $('#button-load-more').val();
  var total_posts = 1;
  $('#button-load-more').on('click', function (e) {
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
        if (res.length > 0) {
          var $content = $(res);
          $('#edrea-ajax-wrapper').imagesLoaded().done(function () {
            $('#edrea-ajax-wrapper').append($content).masonry('appended', $content);
          });
          $('#button-load-more').text('Load more');
        } else {
          $('#button-load-more').text($('#button-text').val());
        }
      }
    });
  });

  // Mobile menu button handler
  $('.edrea-mobile-button').on('click', function () {
    $('.edrea-mobile-navigation').css({
      left: '40px',
      opacity: '1'
    });
  });
  $('.close-mobile-menu').on('click', function () {
    $('.edrea-mobile-navigation').css({
      left: '100%',
      opacity: '0'
    });
  });
  $('.menu-item-depth-0.menu-item-has-children').on('click', function (e) {
    $(this).children('.menu-depth-1').slideToggle();
    $(this).toggleClass('menu-active');
  });

  // Handle comment form when empty
  $('#commentform').on('submit', function (e) {
    if ($('#comment').val().length < 1) {
      e.preventDefault();
      alert('Please fill the comment field');
      return false;
    }
    return true;
  });
});

/***/ }),

/***/ "./public/scss/main.scss":
/*!*******************************!*\
  !*** ./public/scss/main.scss ***!
  \*******************************/
/***/ (function() {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nHookWebpackError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: unmatched \"}\".\n    ╷\n118 │ }\r\n    │ ^\n    ╵\n  public/scss/components/_header.scss 118:1  @import\n  public/scss/main.scss 24:9                 root stylesheet\n    at tryRunOrWebpackError (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/HookWebpackError.js:88:9)\n    at __webpack_require_module__ (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:5058:12)\n    at __webpack_require__ (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:5015:18)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:5086:20\n    at symbolIterator (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3485:9)\n    at done (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3527:9)\n    at Hook.eval [as callAsync] (eval at create (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Hook.CALL_ASYNC_DELEGATE [as _callAsync] (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/tapable/lib/Hook.js:18:14)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:4993:43\n    at symbolIterator (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3482:9)\n    at timesSync (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3463:5)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:4958:16\n    at symbolIterator (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3485:9)\n    at timesSync (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3463:5)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:4926:15\n    at symbolIterator (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3485:9)\n    at done (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3527:9)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:4873:8\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:3352:32\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/HookWebpackError.js:68:3\n    at Hook.eval [as callAsync] (eval at create (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Cache.store (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Cache.js:107:20)\n    at ItemCacheFacade.store (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/CacheFacade.js:137:15)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:3352:11\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Cache.js:93:5\n    at Hook.eval [as callAsync] (eval at create (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at Cache.get (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Cache.js:75:18)\n    at ItemCacheFacade.get (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/CacheFacade.js:111:15)\n    at Compilation._codeGenerationModule (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:3322:9)\n    at codeGen (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:4861:11)\n    at symbolIterator (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3482:9)\n    at timesSync (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3463:5)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:4891:14\n    at processQueue (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/util/processAsyncTree.js:55:4)\n    at process.processTicksAndRejections (node:internal/process/task_queues:77:11)\n-- inner error --\nError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: unmatched \"}\".\n    ╷\n118 │ }\r\n    │ ^\n    ╵\n  public/scss/components/_header.scss 118:1  @import\n  public/scss/main.scss 24:9                 root stylesheet\n    at Object.<anonymous> (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/public/scss/main.scss:1:7)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/javascript/JavascriptModulesPlugin.js:441:11\n    at Hook.eval [as call] (eval at create (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/tapable/lib/HookCodeFactory.js:19:10), <anonymous>:7:1)\n    at Hook.CALL_DELEGATE [as _call] (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/tapable/lib/Hook.js:14:14)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:5060:39\n    at tryRunOrWebpackError (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/HookWebpackError.js:83:7)\n    at __webpack_require_module__ (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:5058:12)\n    at __webpack_require__ (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:5015:18)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:5086:20\n    at symbolIterator (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3485:9)\n    at done (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3527:9)\n    at Hook.eval [as callAsync] (eval at create (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Hook.CALL_ASYNC_DELEGATE [as _callAsync] (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/tapable/lib/Hook.js:18:14)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:4993:43\n    at symbolIterator (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3482:9)\n    at timesSync (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3463:5)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:4958:16\n    at symbolIterator (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3485:9)\n    at timesSync (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3463:5)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:4926:15\n    at symbolIterator (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3485:9)\n    at done (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3527:9)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:4873:8\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:3352:32\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/HookWebpackError.js:68:3\n    at Hook.eval [as callAsync] (eval at create (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Cache.store (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Cache.js:107:20)\n    at ItemCacheFacade.store (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/CacheFacade.js:137:15)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:3352:11\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Cache.js:93:5\n    at Hook.eval [as callAsync] (eval at create (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at Cache.get (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Cache.js:75:18)\n    at ItemCacheFacade.get (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/CacheFacade.js:111:15)\n    at Compilation._codeGenerationModule (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:3322:9)\n    at codeGen (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:4861:11)\n    at symbolIterator (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3482:9)\n    at timesSync (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/neo-async/async.js:3463:5)\n    at /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/Compilation.js:4891:14\n    at processQueue (/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/webpack/lib/util/processAsyncTree.js:55:4)\n    at process.processTicksAndRejections (node:internal/process/task_queues:77:11)\n\nGenerated code for /home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!/home/leon/wordpress/excercise/edrea/wp-content/themes/edrea/public/scss/main.scss\n1 | throw new Error(\"Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\\nSassError: unmatched \\\"}\\\".\\n    ╷\\n118 │ }\\r\\n    │ ^\\n    ╵\\n  public/scss/components/_header.scss 118:1  @import\\n  public/scss/main.scss 24:9                 root stylesheet\");");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./public/js/main.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./public/scss/main.scss"]();
/******/ 	
/******/ })()
;
//# sourceMappingURL=main.js.map