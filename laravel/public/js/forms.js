/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/forms.js ***!
  \*******************************/
var modalWindows = document.querySelector(".modal-windows");
var getInTouchBtn = document.querySelectorAll(".get-in-touche");
var feedback = document.querySelector(".feedback");
var close = document.querySelectorAll(".close-window");
var orderBtn = document.querySelectorAll(".order-photo");
var order = document.querySelector(".order");

function openWindow(btn, formName) {
  btn.forEach(function (button) {
    button.addEventListener('click', function (e) {
      e.preventDefault();
      modalWindows.classList.add('active');
      formName.classList.add('active');
      disableScroll();
    });
  });
}

function closeWindow(formName) {
  close.forEach(function (button) {
    button.addEventListener('click', function (e) {
      e.preventDefault();
      modalWindows.classList.remove('active');
      formName.classList.remove('active');
      enableScroll();
    });
  });
  document.addEventListener('click', function (e) {
    if (e.target === modalWindows) {
      modalWindows.classList.remove('active');
      formName.classList.remove('active');
      enableScroll();
    }
  });
}

function disableScroll() {
  document.body.style.overflow = "hidden";
}

function enableScroll() {
  document.body.style.overflow = "initial";
}

openWindow(getInTouchBtn, feedback);
closeWindow(feedback);
openWindow(orderBtn, order);
closeWindow(order);
/******/ })()
;