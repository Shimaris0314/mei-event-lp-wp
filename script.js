// ハンバーガーメニューの開閉
document.querySelector(".hamburger").addEventListener("click", function () {
  this.classList.toggle("active");
  document.querySelector(".nav-list").classList.toggle("active");
});

// スクロールでヘッダーの背景色を変更
window.addEventListener("scroll", function () {
  const header = document.querySelector(".header");
  header.style.background = window.scrollY > 50 ? "#fff" : "#f8f8f8";
});
