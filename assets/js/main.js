const navSlide = () => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav_bar');
  const navLinks = document.querySelectorAll('.nav_bar li');

  burger.addEventListener('click', () => {
    nav.classList.toggle('nav-active');
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = '';
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 7 + 0.3
        }s`;
      }
    });

    burger.classList.toggle('toggle');
  });
};

navSlide();

var myNav = document.querySelector('.nav');
window.onscroll = function () {
  'use strict';
  if (document.body.scrollTop >= 50) {
    myNav.classList.add('nav_iitt');
    myNav.classList.remove('nav');
  } else {
    myNav.classList.add('nav');
    myNav.classList.remove('nav_iitt');
  }
};

const galleryBtn = document.querySelector('.gallery_btn');
galleryBtn.addEventListener('click', () => {
  window.location.replace('gallery');
});

const socialBtn = document.querySelector('.social_1');
socialBtn.addEventListener('click', () => {
  window.location.replace('https://www.facebook.com/rajesh.manandhar.566');
});

const socialBtn1 = document.querySelector('.social_2');
socialBtn1.addEventListener('click', () => {
  window.location.replace('https://www.instagram.com/rajesh_manandhar77/');
});

const socialBtn2 = document.querySelector('.social_3');
socialBtn2.addEventListener('click', () => {
  window.location.replace('#');
});

// Typing Animation
var typed = new Typed('.typed', {
  strings: ['PhotoGrapher', 'VideoGrapher'],
  typeSpeed: 100,
  loop: true,
  backDelay: 900,
  backSpeed: 60,
});
