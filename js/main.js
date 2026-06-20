'use strict';

import PhotoSwipeLightbox from 'https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.4.4/photoswipe-lightbox.esm.min.js';

document.addEventListener('DOMContentLoaded', () => {

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
  gsap.registerPlugin(ScrollToPlugin);

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
  gsap.from(".card__inner-box", {
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

  // ヒーローセクション
  gsap.from(".hero__content > *", {
    y: 30,
    opacity: 0,
    duration: 1.0,
    stagger: 0.3,
    ease: "power2.out",
    delay: 0.2
  });

  // サービスセクション
  gsap.from(".services__item", {
    scrollTrigger: {
      trigger: ".services__list",
      start: "top 80%",
    },
    y: 30,
    opacity: 0,
    duration: 0.8,
    stagger: 0.4,
    ease: "power2.out"
  });

  // Tech Stack
  gsap.from(".tech-list__item", {
    scrollTrigger: {
      trigger: ".tech-list",
      start: "top 80%",
    },
    y: 30,
    opacity: 0,
    duration: 0.8,
    stagger: 0.4,
    ease: "power2.out"
  });

  // Overview
  gsap.from(".project-summary__item", {
    scrollTrigger: {
      trigger: ".project-summary__list",
      start: "top 80%",
    },
    y: 30,
    opacity: 0,
    duration: 0.8,
    stagger: 0.3,
    ease: "power2.out"
  });

  //Features
  document.querySelectorAll(".project-media-text").forEach((card) => {
    gsap.from(card, {
      scrollTrigger: {
        trigger: card,
        start: "top 80%",
        toggleActions: "play none none none"
      },
      y: 40,
      opacity: 0,
      duration: 0.8,
      ease: "power2.out"
    });
  });


  // スクロールトップボタン
  const topBtn = document.querySelector(".js-scroll-top");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 500) {
      topBtn.classList.add("is-show");
    } else {
      topBtn.classList.remove("is-show");
    }
  });

  topBtn.addEventListener("click", (e) => {
    e.preventDefault();
    gsap.to(window, { duration: 1, scrollTo: 0, ease: "power2.inOut" });
  });

  // PhotoSwipe
  document.querySelectorAll('.js-lightbox').forEach(link => {
    const img = link.querySelector('img');
    
    // 画像が既に読み込まれていたらサイズを設定、まだならロードを待つ
    if (img.complete) {
      setDimensions(link, img);
    } else {
      img.onload = () => setDimensions(link, img);
    }
  });

  function setDimensions(link, img) {
    // 画像の本来のサイズ（naturalWidth/Height）を取得してdata属性にセット
    link.setAttribute('data-pswp-width', img.naturalWidth);
    link.setAttribute('data-pswp-height', img.naturalHeight);
  }

  const lightbox = new PhotoSwipeLightbox({
    gallery: 'body',
    children: 'a.js-lightbox',
    pswpModule: () => import('https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.4.4/photoswipe.esm.min.js')
  });
  lightbox.init();

});