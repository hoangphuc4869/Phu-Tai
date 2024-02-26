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
var swiper = new Swiper(".linhvuc-slider", {
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

var swiper = new Swiper(".cty-tv-slider", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  slidesPerView: 1,
  spaceBetween: 20,
});

const boxItem = document.querySelectorAll(".box-wrap li");
const box = document.querySelectorAll(".box");
let getSlide = boxItem.length - 1;
let slideCalc = 30 / getSlide + "%";

if (box && box.length > 0 && box[0]) {
  box[0].classList.add("active");
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

const mb = document.querySelectorAll(".box-mobile");
const mbTitle = document.querySelectorAll(".box-title-mobile");

if (mbTitle && mbTitle[0]) {
  mb[0].classList.add("active");
  mbTitle.forEach((item, index) => {
    item.addEventListener("click", () => {
      mb.forEach((e) => {
        e.classList.remove("active");
      });
      mb[index].classList.add("active");
    });
  });
}

var provincesName = document.querySelectorAll(".aMoDa-name");

if (provincesName) {
  provincesName.forEach((item) => {
    item.addEventListener("mouseover", () => {
      document.querySelector(`.${item.dataset.title}`).classList.add("active");
    });

    item.addEventListener("mouseout", () => {
      document
        .querySelector(`.${item.dataset.title}`)
        .classList.remove("active");
    });
  });
}

// const chart1 = document.querySelector(".chart1");
// const chartData = {
//   labels: ["Python", "Java", "JavaScript", "C#", "Others"],
//   data: [30, 17, 10, 7, 36],
// };

// new Chart(chart1, {
//   type: "doughnut",
//   data: {
//     labels: chartData.labels,
//     datasets: [
//       {
//         label: "Language Popularity",
//         data: chartData.data,
//       },
//     ],
//   },
//   options: {
//     borderWidth: 10,
//     borderRadius: 2,
//     hoverBorderWidth: 0,
//     plugins: {
//       legend: {
//         display: false,
//       },
//     },
//   },
// });

const chart1 = document.querySelector(".chart1");
const chart2 = document.querySelector(".chart2");
const chart3 = document.querySelector(".chart3");
const dataChart1 = {
  labels: [
    "Điện thoại và các loại linh kiện",
    "Hàng dệt, may",
    "Điện tử, máy tính và linh kiện",
    "Giày dép",
    "Máy móc, thiết bị, dụng cụ và phụ tùng khác",
    "Hàng hải sản",
    "Gỗ và sản phẩm gỗ",
    "Dầu thô",
  ],
  datasets: [
    {
      label: "Chiếm",
      data: [20, 15, 13, 12, 10, 8, 5, 30],
      backgroundColor: [
        "#67C587",
        "#E5F1E8",
        "#C9EAD4",
        "#A9DEBA",
        "#88D1A1",
        "#59AA76",
        "#003366",
        "#3E7553",
      ],
      hoverOffset: 4,
    },
  ],
};
const dataChart2 = {
  labels: [
    "Mỹ",
    "Trung Quốc",
    "Nhật Bản",
    "Hàn Quốc",
    "Anh",
    "Úc",
    "Canada",
    "Đức",
    "Pháp",
    "Hà Lan",
    "Đài Loan",
    "Án Độ",
    "Khác",
  ],
  datasets: [
    {
      label: "Chiếm",
      backgroundColor: [
        "#5E3FBE",
        "#F4F0FD",
        "#E5DAFB",
        "#CBB6F8",
        "#A88DEB",
        "#886BD8",
        "#472EA3",
        "#341F88",
        "#23146E",
        "#28169A",
        "#5E3FBE",
        "#E5DAFB",
      ],
      data: ["40", "15", "15", "13", "8", "3", "3", "3", "3", "2", "2", "8"],
      hoverOffset: 4,
      pointStyle: "circle",
    },
  ],
};
const dataChart3 = {
  labels: ["", "", "", "", "", "", "", "", ""],
  datasets: [
    {
      barThickness: 50,
      backgroundColor: [
        "#0263FF",
        "#FF7723",
        "#8E30FF",
        "#126492",
        "#B45B70",
        "#EB777C",
        "#87229D",
        "#713229",
        "#411265",
      ],
      data: ["4.7", "5.6", "6.2", "6.9", "7", "7.5", "8.1", "8.8", "9.5"],
    },
  ],
};

const configchart1 = {
  type: "doughnut",
  data: dataChart1,
  options: {
    plugins: {
      title: {
        display: true,
        text: "Giá trị xuất khẩu 1 số mặt hàng chủ lực",
        font: {
          size: 18,
          family: "Roboto",
          weight: "bold",
        },
        padding: {
          bottom: 50,
        },
      },
      tooltip: {
        callbacks: {
          label: function (context) {
            return context.dataset.label + ": " + context.formattedValue + "%";
          },
        },
      },
      legend: {
        display: false,
        labels: {
          usePointStyle: true,
        },
        align: "start",
        padding: 10,
      },
    },
  },
};
const configchart2 = {
  type: "doughnut",
  data: dataChart2,
  options: {
    plugins: {
      legend: {
        display: false,
      },
      title: {
        display: true,
        text: "Giá trị xuất khẩu 1 số mặt hàng chủ lực",
        font: {
          size: 18,
          family: "Roboto",
          weight: "bold",
        },
        padding: {
          bottom: 50,
        },
      },
      tooltip: {
        callbacks: {
          label: function (context) {
            return context.dataset.label + ": " + context.formattedValue + "%";
          },
        },
      },
    },
  },
};

const configchart3 = {
  type: "bar",
  data: dataChart3,
  options: {
    // responsive: true,
    // maintainAspectRatio: false,
    scales: {
      y: {
        display: true,
        min: 0,
        max: 12,
        ticks: {
          stepSize: 3,
        },
        title: {
          display: true,
          text: "Tỷ USD",
          font: {
            weight: "bold",
            size: 18,
          },
          color: "#000",
        },
      },
      // y: {
      //   display: true,
      //   title: {
      //     display: true,
      //     text: "Trục Y",
      //     color: "black",
      //   },
      // },
    },
    plugins: {
      datalabels: {
        anchor: "end",
        align: "end",
      },
      title: {
        display: true,
        text: "2012 - 2020F Kim Ngạch Xuất Khẩu Gỗ Và Sản Phẩm Gỗ Việt nam",
        font: {
          size: 18,
          family: "Roboto",
          weight: "bold",
        },
        padding: {
          bottom: 50,
        },
      },
      tooltip: {
        callbacks: {
          label: function (context) {
            return context.dataset.label + ": " + context.formattedValue + "%";
          },
        },
      },
      legend: {
        display: false,
        labels: {
          usePointStyle: true,
        },
        align: "start",
        padding: 10,
      },
    },
  },
};

if (chart1) {
  new Chart(chart1, configchart1);
  new Chart(chart2, configchart2);
  new Chart(chart3, configchart3);
}

const statCountry = [
  { circle: "#5E3FBE", desc: "Mỹ" },
  { circle: "#F4F0FD", desc: "Trung Quốc" },
  { circle: "#E5DAFB", desc: "Nhật Bản" },
  { circle: "#CBB6F8", desc: "Hàn Quốc" },
  { circle: "#A88DEB", desc: "Anh" },
  { circle: "#886BD8", desc: "Úc" },
  { circle: "#472EA3", desc: "Canada" },
  { circle: "#341F88", desc: "Đức" },
  { circle: "#23146E", desc: "Pháp" },
  { circle: "#28169A", desc: "Hà Lan" },
  { circle: "#5E3FBE", desc: "Đài Loan" },
  { circle: "#E5DAFB", desc: "Án Độ" },
  { circle: "#DBDBDB", desc: "Khác" },
];

const statProduct = [
  { circle: "#67C587", desc: "Điện thoại và các loại linh kiện" },
  { circle: "#E5F1E8", desc: "Hàng dệt, may" },
  { circle: "#C9EAD4", desc: "Điện tử, máy tính và linh kiện" },
  { circle: "#A9DEBA", desc: "Giày dép" },
  {
    circle: "#88D1A1",
    desc: "Máy móc, thiết bị, dụng cụ và phụ tùng khác",
  },
  { circle: "#59AA76", desc: "Hàng hải sản" },
  { circle: "#003366", desc: "Gỗ và sản phẩm gỗ" },
  { circle: "#3E7553", desc: "Dầu thô" },
  { circle: "#DBDBDB", desc: "Khác" },
];

const chart1Legend = document.querySelector(".legend1");
if (chart1Legend) {
  statProduct.forEach((stat) => {
    const html = /*html */ `
  <div class="col-6">
    <div class="legend-item d-flex align-items-center gap-3 ">
        <div class="circle" style="background-color: ${stat.circle} "></div>
        <div class="legend-desc">${stat.desc}</div>
    </div>
  </div>
  `;
    chart1Legend.innerHTML += html;
  });
}

const chart2Legend = document.querySelector(".legend2");
if (chart2Legend) {
  statCountry.forEach((stat) => {
    const html = /*html */ `
  <div class="col-4">
    <div class="legend-item d-flex align-items-center gap-3 ">
        <div class="circle" style="background-color: ${stat.circle} "></div>
        <div class="legend-desc">${stat.desc}</div>
    </div>
  </div>
  `;
    chart2Legend.innerHTML += html;
  });
}

// const observer = new IntersectionObserver((entries) => {
//   entries.forEach((entry) => {
//     if (entry.isIntersecting) {
//       configchart1.options.animation = true;
//     } else {
//       configchart1.options.animation = false;
//     }

//     // Cập nhật lại biểu đồ sau khi thay đổi tùy chọn
//     console.log(configchart1);
//     updateChart();
//   });
// });

// // Theo dõi phần tử biểu đồ
// observer.observe(document.querySelector(".chart1"));

// function updateChart() {
//   const chart = Chart.getChart("myChart");

//   if (chart) {
//     chart.update();
//   }
// }

// $(document).ready(function () {
//   $(".box-title-mobile").on("click", function (e) {
//     e.preventDefault();
//     var $this = $(this);
//     var $content = $this.next(".box-content-mobile");

//     if (!$this.hasClass("active")) {
//       $(".box-content-mobile").slideUp(400);
//       $(".box-title-mobile").removeClass("active");
//     }

//     $this.toggleClass("active");
//     $content.slideToggle();
//   });
// });

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
