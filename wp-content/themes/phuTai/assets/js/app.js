var hamburger = document.querySelector(".hamburger");
var menu9 = document.querySelector("#menu-menu-chinh");
var menu = document.querySelector(".menu-wrap");
if (hamburger) {
  document.addEventListener("click", (e) => {
    if (!menu9.contains(e.target) && e.target != hamburger) {
      menu.classList.remove("active");
      hamburger.classList.remove("active");
    }
  });
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    menu.classList.toggle("active");
  });
}

var menuMB = document.querySelectorAll(".menu-mb #menu-menu-chinh > li");

menuMB.forEach((item) => {
  document
    .querySelectorAll(".menu-mb #menu-menu-chinh > li .sub-menu")
    .forEach((e) => {
      e.classList.remove("active");
    });
  item.addEventListener("click", () => {
    var sub = item.querySelector(".sub-menu");
    sub.classList.toggle("active");
    console.log(sub);
  });
});

var swiper = new Swiper(".heading-slider", {
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
  loop: true,
});

var swiper = new Swiper(".news-swiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  slidesPerView: 3,
  spaceBetween: 24,
  breakpoints: {
    300: {
      slidesPerView: 1,
    },
    700: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});

const boxItem = document.querySelectorAll(".box-wrap li");
const box = document.querySelectorAll(".box");
let getSlide = boxItem.length - 1;
let slideCalc = 30 / getSlide + "%";

if (box) {
  box.forEach((e) => {
    e.addEventListener("click", () => {
      box.forEach((box) => {
        // box.style.width = slideCalc;
        box.classList.remove("active");
      });
      e.classList.add("active");
    });
  });
}

// function is70Percent(n) {
//   return n % 4 === 1 || n % 4 === 4;
// }

// const items = document.querySelectorAll(".stakes .stake");

// if (items) {
//   items.forEach((item, index) => {
//     item.classList.toggle("swap", is70Percent(index));
//   });
// }

// $(document).ready(function () {
//   $(function () {
//     $(".hq2 .e-title").on("click", function (e) {
//       e.preventDefault();
//       var $this = $(this);

//       if (!$this.hasClass("item-active")) {
//         $(".hq2 .e-desc").slideUp(400);
//         $(".hq2 .e-title").removeClass("item-active");
//       }

//       $this.toggleClass("item-active");
//       $this.next().slideToggle();
//     });
//     //END
//   });
// });
