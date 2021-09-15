/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/forms.js ***!
  \*******************************/
var modalWindows = document.querySelector(".modal-windows");
var feedback = document.querySelector(".feedback");
var openPopupButtons = document.querySelectorAll(".get-in-touche");
var close = document.querySelector(".close-window");
openPopupButtons.forEach(function (button) {
  button.addEventListener('click', function (e) {
    e.preventDefault();
    modalWindows.classList.add('active');
  });
});
close.addEventListener('click', function () {
  modalWindows.classList.remove('active');
});
document.addEventListener('click', function (e) {
  if (e.target === modalWindows) {
    modalWindows.classList.remove('active');
  }
});
/******/ })()
;