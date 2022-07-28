$(document).ready(function () {
  $(".owl-carousel").owlCarousel();
});

$(".owl-carousel").owlCarousel({
  loop: true,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 1,
    },
    1200: {
      items: 2,
    },
  },
});
$(window).scroll(function (event) {
  if ($(this).scrollTop() >= $(".menu-slide").offset().top - 1) {
    $(".menu").addClass("fixed-top");
  } else {
    $(".menu").removeClass("fixed-top");
  }
});
const btnTEls = document.querySelectorAll(".top .option-combo");
const imgTEl = document.querySelector(".imgPath");
for (const btnTEl of btnTEls) {
  btnTEl.onclick = function () {
    const dataValue = this.getAttribute("data");
    const imgPath = `public/images/${dataValue}.jpg`;
    imgTEl.src = imgPath;
  };
}
const btnBEls = document.querySelectorAll(".bottom .option-combo");
const imgBEl = document.querySelector(".imgPath-1");
for (const btnBEl of btnBEls) {
  btnBEl.onclick = function () {
    const dataValue = this.getAttribute("data");
    const imgPath = `public/images/${dataValue}.jpg`;
    imgBEl.src = imgPath;
  };
}

const playVideoEls = document.querySelectorAll(".box-video");
const modalVideoEl = document.querySelector(".modal-video");
const btnClose = document.querySelector(".close-icon");
const btnVideo = document.querySelector(".play-video");
for (const playVideoEl of playVideoEls) {
  playVideoEl.onclick = function () {
    const dataValue = this.getAttribute("data");
    const videoPath = `public/video/${dataValue}.mp4`;
    btnVideo.src = videoPath;
    btnVideo.setAttribute("autoplay", "");
    modalVideoEl.classList.add("open");
  };
  btnClose.onclick = function () {
    modalVideoEl.classList.remove("open");
    btnVideo.src = stop;
  };
}
