"use strict";

var navSlide = function navSlide() {
  var burger = document.querySelector('.burger');
  var nav = document.querySelector('.nav_bar');
  var navLinks = document.querySelectorAll('.nav_bar li');
  burger.addEventListener('click', function () {
    nav.classList.toggle('nav-active');
    navLinks.forEach(function (link, index) {
      if (link.style.animation) {
        link.style.animation = '';
      } else {
        link.style.animation = "navLinkFade 0.5s ease forwards ".concat(index / 7 + 0.3, "s");
      }
    });
    burger.classList.toggle('toggle');
  });
};

navSlide();
var myNav = document.querySelector('.nav');

window.onscroll = function () {
  "use strict";

  if (document.body.scrollTop >= 50) {
    myNav.classList.add("nav_iitt");
    myNav.classList.remove("nav");
  } else {
    myNav.classList.add("nav");
    myNav.classList.remove("nav_iitt");
  }
};

var gallery = document.querySelector('#gallery');

var getVal = function getVal(elem, style) {
  return parseInt(window.getComputedStyle(elem).getPropertyValue(style));
};

var getHeight = function getHeight(item) {
  return item.querySelector('.content').getBoundingClientRect().height;
};

var resizeAll = function resizeAll() {
  var altura = getVal(gallery, 'grid-auto-rows');
  var gap = getVal(gallery, 'grid-row-gap');
  gallery.querySelectorAll('.gallery-item').forEach(function (item) {
    var el = item;
    el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
  });
};

gallery.querySelectorAll('img').forEach(function (item) {
  item.classList.add('byebye');

  if (item.complete) {
    console.log(item.src);
  } else {
    item.addEventListener('load', function () {
      var altura = getVal(gallery, 'grid-auto-rows');
      var gap = getVal(gallery, 'grid-row-gap');
      var gitem = item.parentElement.parentElement;
      gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
      item.classList.remove('byebye');
    });
  }
});
window.addEventListener('resize', resizeAll);
gallery.querySelectorAll('.gallery-item').forEach(function (item) {
  item.addEventListener('click', function () {
    item.classList.toggle('full');
  });
});