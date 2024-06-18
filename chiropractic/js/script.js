/*===========================================
script.js
========================================== */

/* ----------------------------------------
ハンバーガーメニュー
---------------------------------------- */

// DOMが完全に読み込まれた後に実行
document.addEventListener('DOMContentLoaded', () => {
 // ハンバーガーメニューの要素を取得
 const hamburger = document.querySelector('.hamburger');
 // ナビゲーションリンクの要素を取得
 const navLinks = document.querySelector('.nav-links');

 // ハンバーガーメニューがクリックされた時のイベントリスナーを追加
 hamburger.addEventListener('click', () => {
     // ナビゲーションリンクの表示・非表示を切り替え
     navLinks.classList.toggle('active');
     // ハンバーガーアイコンの変化を切り替え
     hamburger.classList.toggle('active');
 });
});

/* ----------------------------------------
slick carousel
---------------------------------------- */
$('.carousel').slick({
    autoplay: true,
    dots: false,
    infinite: true,
    autoplaySpeed: 3000,
    arrows: false,
});
