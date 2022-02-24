/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./js/scripts.js":
/*!***********************!*\
  !*** ./js/scripts.js ***!
  \***********************/
/***/ (() => {

eval("$(document).ready(function () {\n  // status variable\n  var formOpen = \"open\";\n  var formClose = \"close\";\n  var faqsStatus = formOpen;\n  var test = $(\".show-detail\");\n  var i; // run array circle for all button has className is show-detail\n\n  for (i = 0; i < test.length; i++) {\n    // get exactly button is clicked\n    test[i].addEventListener(\"click\", function () {\n      // onBtnShowDetail(this);\n      var test2 = this.nextElementSibling; // var test2 = this.next();\n      // var test3 = this.parent(\".box-show\");\n      // var test4 = this.children();\n\n      var test4 = this.children[0];\n\n      if (faqsStatus === formOpen) {\n        // $(\".drop-box\").css({\"height\": \"189px\"});\n        test2.style.display = \"block\"; // test3.style.height = \"189px\";\n        // test2.css({\"display\":\"block\"});\n        // test3.css({\"height\":\"189px\"});\n        // $(\".fas\").removeClass(\"fa-plus\");\n        // $(\".fas\").addClass(\"fa-minus\");\n\n        test4.classList.remove(\"fa-plus\");\n        test4.classList.add(\"fa-minus\");\n        faqsStatus = formClose;\n      } else if (faqsStatus === formClose) {\n        // $(\".drop-box\").css({\"height\": \"40px\"});\n        test2.style.display = \"none\"; // test3.style.height = \"40px\";\n        // test2.css({\"display\":\"none\"});\n        // test3.css({\"height\":\"40px\"});\n        // $(\".fas\").addClass(\"fa-plus\");\n        // $(\".fas\").removeClass(\"fa-minus\");\n\n        test4.classList.add(\"fa-plus\");\n        test4.classList.remove(\"fa-minus\");\n        faqsStatus = formOpen;\n      }\n    });\n  } // filter type of construction\n\n\n  $(\".filter-btn\").on(\"click\", function () {\n    var $type = $(this).attr(\"data-construction\");\n\n    if ($type == \"industrial\") {\n      $(\".js-filterable\").addClass(\"is-hidden\");\n      $(\".js-filterable[data-construction=\" + $type + \"]\").removeClass(\"is-hidden\");\n      $(\".filter-btn\").removeClass(\"on-choose\");\n      $(\".filter-btn[data-construction=\" + $type + \"]\").addClass(\"on-choose\");\n    } else {\n      $(\".js-filterable\").addClass(\"is-hidden\");\n      $(\".js-filterable[data-construction=\" + $type + \"]\").removeClass(\"is-hidden\");\n      $(\".filter-btn\").removeClass(\"on-choose\");\n      $(\".filter-btn[data-construction=\" + $type + \"]\").addClass(\"on-choose\");\n    }\n  }); //open and close moblie nav box\n\n  $(\".nav-mobile\").on(\"click\", function () {\n    $(\".header-menu-mobile\").css(\"transform\", \"translateX(0)\");\n    $(\".header-menu-mobile\").css(\"opacity\", \"1\");\n    $(\".nav-overlay\").css(\"display\", \"block\");\n  });\n  $(\".close-mobile-nav\").on(\"click\", function () {\n    $(\".header-menu-mobile\").css(\"transform\", \"translateX(100%)\");\n    $(\".header-menu-mobile\").css(\"opacity\", \"0\");\n    $(\".nav-overlay\").css(\"display\", \"none\");\n  }); //first banner slider\n\n  $(\".header-carousel\").slick({\n    dots: true,\n    infinite: true,\n    autoplay: true,\n    autoplaySpeed: 5000,\n    pauseOnFocus: false,\n    pauseOnHover: false,\n    fade: true,\n    appendDots: $(\".dot-location\"),\n    arrows: false\n  }); // second banner slider\n\n  $(\".second-carousel\").slick({\n    infinite: true,\n    arrows: true,\n    autoplay: true,\n    pauseOnFocus: false,\n    pauseOnHover: false,\n    autoplaySpeed: 5000 // prevArrow: '<button type=\"button\" class=\"slick-prev\"><i class=\"fas fa-angle-left clr-gry slick-previous\"></i></button>',\n    // nextArrow: '<button type=\"button\" class=\"slick-next\"><i class=\"fas fa-angle-right clr-gry slick-next\"></i></button>'\n    // prevArrow:'<i class=\" fas fa-angle-right clr-gry slick-prev\" style=\"color:blue;\"></i>',\n    // nextArrow:'<i class=\"fas fa-angle-left clr-gry slick-next\"></i>'\n\n  });\n});\n\n//# sourceURL=webpack://frontend-boilerplate/./js/scripts.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./js/scripts.js"]();
/******/ 	
/******/ })()
;