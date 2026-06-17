'use strict';

//ハンバーガーメニュー
const hamburger = document.querySelector('.js-hamburger');
const header = document.querySelector('.header');
const navLinks = document.querySelectorAll('.js-nav-link');

// 1. 三本線ボタンをクリックしたらメニューを開閉
hamburger.addEventListener('click', () => {
  header.classList.toggle('is-open');
});

// 2. メニューの中のリンクをクリックしたらメニューを閉じる
navLinks.forEach((link) => {
  link.addEventListener('click', () => {
    header.classList.remove('is-open');
  });
});