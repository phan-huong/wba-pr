/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/collapse.js":
/*!****************************!*\
  !*** ./src/js/collapse.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"collapse\": () => (/* binding */ collapse)\n/* harmony export */ });\nvar collapse = function collapse() {\n  var collapse_items = document.querySelectorAll(\".collapse__item\");\n  collapse_items.forEach(function (item) {\n    item.addEventListener(\"click\", function (event) {\n      var is_active = item.classList.contains(\"collapse_active\");\n\n      if (!is_active) {\n        var items_active = document.querySelectorAll(\".collapse__item.collapse_active\");\n        items_active.forEach(function (item2) {\n          item2.classList.remove(\"collapse_active\");\n        });\n        item.classList.add(\"collapse_active\");\n      } else {}\n    });\n  });\n};\n\n//# sourceURL=webpack://wba-pr/./src/js/collapse.js?");

/***/ }),

/***/ "./src/js/contact_form.js":
/*!********************************!*\
  !*** ./src/js/contact_form.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"contact_form\": () => (/* binding */ contact_form)\n/* harmony export */ });\nvar contact_form = function contact_form() {\n  var textareas = document.querySelectorAll('.contact_form__message');\n  textareas.forEach(function (area) {\n    area.setAttribute(\"rows\", \"6\");\n  });\n};\n\n//# sourceURL=webpack://wba-pr/./src/js/contact_form.js?");

/***/ }),

/***/ "./src/js/footer.js":
/*!**************************!*\
  !*** ./src/js/footer.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"footer\": () => (/* binding */ footer)\n/* harmony export */ });\nvar footer = function footer() {\n  var window_w = window.innerWidth;\n  var footer_inner = document.querySelector(\"#footer_inner\");\n  var footer_outer = document.querySelector(\"#footer_outer\");\n  var inner_width = footer_inner.offsetWidth;\n  var inner_height = footer_inner.offsetHeight;\n\n  if (window_w > 768) {\n    var f_width = inner_width - 64;\n    var f_height = inner_height + 64;\n  } else {\n    var f_width = inner_width - 32;\n    var f_height = inner_height + 32;\n  }\n\n  footer_outer.style.height = f_height + \"px\";\n  footer_outer.style.width = f_width + \"px\";\n};\n\n//# sourceURL=webpack://wba-pr/./src/js/footer.js?");

/***/ }),

/***/ "./src/js/loadmore.js":
/*!****************************!*\
  !*** ./src/js/loadmore.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"loadmore\": () => (/* binding */ loadmore)\n/* harmony export */ });\nvar loadmore = function loadmore() {\n  jQuery(document).ready(function ($) {\n    // $(\".kunden__item\").slice(0, 4).show();\n    $(\"#loadmore\").on(\"click\", function (e) {\n      e.preventDefault();\n      $(\".kunden__item:hidden\").slice(0, 4).slideDown({\n        start: function start() {\n          $(this).css({\n            display: \"flex\"\n          });\n        }\n      });\n\n      if ($(\".kunden__item:hidden\").length == 0) {\n        $(\"#loadmore\").hide(300);\n      }\n    });\n    $(\"#loadmoreNews\").on(\"click\", function (e) {\n      e.preventDefault();\n      $(\".news__item:hidden\").slice(0, 3).slideDown({\n        start: function start() {\n          $(this).css({\n            display: \"flex\"\n          });\n        }\n      });\n\n      if ($(\".news__item:hidden\").length == 0) {\n        $(\"#loadmoreNews\").hide(300);\n      }\n    });\n  });\n};\n\n//# sourceURL=webpack://wba-pr/./src/js/loadmore.js?");

/***/ }),

/***/ "./src/js/nav.js":
/*!***********************!*\
  !*** ./src/js/nav.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"nav_mobile\": () => (/* binding */ nav_mobile)\n/* harmony export */ });\nvar nav_mobile = function nav_mobile() {\n  (function (cb) {\n    // browser event has already occurred.\n    if (document.readyState === \"complete\") {\n      document.getElementById('background').style.display = \"none\";\n      return setTimeout(cb);\n    } // Mozilla, Opera and webkit style\n\n\n    if (window.addEventListener) {\n      document.getElementById('background').style.display = \"none\";\n      return window.addEventListener(\"load\", cb, false);\n    } // If IE event model is used\n\n\n    if (window.attachEvent) {\n      document.getElementById('background').style.display = \"none\";\n      return window.attachEvent(\"onload\", cb);\n    }\n  })(function () {\n    document.querySelectorAll('.nav_mobile__btn').forEach(function (el) {\n      el.addEventListener('click', function () {\n        var nav = this.parentElement,\n            _class = 'open';\n\n        if (nav.classList.contains(_class)) {\n          document.getElementById('nav_mobile_menu').style.display = \"none\";\n          nav.classList.remove(_class);\n          setTimeout(function () {\n            document.getElementById('background').style.display = \"none\";\n          }, 1000);\n        } else {\n          document.getElementById('background').style.display = \"flex\";\n          setTimeout(function () {\n            nav.classList.add(_class);\n            setTimeout(function () {\n              document.getElementById('nav_mobile_menu').style.display = \"block\";\n            }, 1000);\n          }, 200);\n        }\n      });\n    });\n  });\n};\n\n//# sourceURL=webpack://wba-pr/./src/js/nav.js?");

/***/ }),

/***/ "./src/js/paragraph.js":
/*!*****************************!*\
  !*** ./src/js/paragraph.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"paragraph\": () => (/* binding */ paragraph)\n/* harmony export */ });\nvar paragraph = function paragraph() {\n  var window_w = window.innerWidth;\n  var para_section = document.querySelectorAll('.paragraph');\n  para_section.forEach(function (para) {\n    var left = para.querySelector('#left');\n    var left_h = left.offsetHeight;\n    var right_h = left_h - 64;\n    var right = para.querySelector('#right');\n\n    if (window_w > 1024) {\n      right.style.height = right_h + \"px\";\n    } else right.style.height = \"auto\";\n  });\n};\n\n//# sourceURL=webpack://wba-pr/./src/js/paragraph.js?");

/***/ }),

/***/ "./src/main.js":
/*!*********************!*\
  !*** ./src/main.js ***!
  \*********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./main.scss */ \"./src/main.scss\");\n/* harmony import */ var _js_nav_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/nav.js */ \"./src/js/nav.js\");\n/* harmony import */ var _js_collapse_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/collapse.js */ \"./src/js/collapse.js\");\n/* harmony import */ var _js_paragraph_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/paragraph.js */ \"./src/js/paragraph.js\");\n/* harmony import */ var _js_footer__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./js/footer */ \"./src/js/footer.js\");\n/* harmony import */ var _js_loadmore__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./js/loadmore */ \"./src/js/loadmore.js\");\n/* harmony import */ var _js_contact_form__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./js/contact_form */ \"./src/js/contact_form.js\");\n\n\n\n\n\n\n\n(0,_js_nav_js__WEBPACK_IMPORTED_MODULE_1__.nav_mobile)();\n(0,_js_collapse_js__WEBPACK_IMPORTED_MODULE_2__.collapse)();\n(0,_js_loadmore__WEBPACK_IMPORTED_MODULE_5__.loadmore)();\n(0,_js_contact_form__WEBPACK_IMPORTED_MODULE_6__.contact_form)();\n\nvar loadAndResize = function loadAndResize() {\n  (0,_js_paragraph_js__WEBPACK_IMPORTED_MODULE_3__.paragraph)();\n  (0,_js_footer__WEBPACK_IMPORTED_MODULE_4__.footer)();\n};\n\nwindow.onload = loadAndResize;\nwindow.onresize = loadAndResize;\n\n//# sourceURL=webpack://wba-pr/./src/main.js?");

/***/ }),

/***/ "./src/main.scss":
/*!***********************!*\
  !*** ./src/main.scss ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://wba-pr/./src/main.scss?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/main.js");
/******/ 	
/******/ })()
;