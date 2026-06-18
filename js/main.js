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

//GSAPアニメーション

gsap.registerPlugin(ScrollTrigger);

// タイトル下の線
document.querySelectorAll(".js-scroll-line").forEach((line) => {
  gsap.to(line, {
    scrollTrigger: {
      trigger: line,
      start: "top 80%",
      onEnter: () => {
        line.classList.add("is-active");
      },
      onLeaveBack: () => {
        line.classList.remove("is-active");
      }
    }
  });
});

// 制作物カード
gsap.from(".card", {
  scrollTrigger: {
    trigger: ".created__list",
    start: "top 70%"
  },
  y: 50,
  opacity: 0,
  duration: 1.2,
  stagger: 0.3,
  ease: "power2.out"
});