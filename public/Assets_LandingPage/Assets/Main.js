// Navbar
// Burger menus
document.addEventListener("DOMContentLoaded", function () {
  // open
  const burger = document.querySelectorAll(".navbar-burger");
  const menu = document.querySelectorAll(".navbar-menu");

  if (burger.length && menu.length) {
    for (var i = 0; i < burger.length; i++) {
      burger[i].addEventListener("click", function () {
        for (var j = 0; j < menu.length; j++) {
          menu[j].classList.toggle("hidden");
        }
      });
    }
  }

  // close
  const close = document.querySelectorAll(".navbar-close");
  const backdrop = document.querySelectorAll(".navbar-backdrop");

  if (close.length) {
    for (var i = 0; i < close.length; i++) {
      close[i].addEventListener("click", function () {
        for (var j = 0; j < menu.length; j++) {
          menu[j].classList.toggle("hidden");
        }
      });
    }
  }

  if (backdrop.length) {
    for (var i = 0; i < backdrop.length; i++) {
      backdrop[i].addEventListener("click", function () {
        for (var j = 0; j < menu.length; j++) {
          menu[j].classList.toggle("hidden");
        }
      });
    }
  }
});

// showcase
let sliderContainer = document.getElementById("sliderContainer");
let slider = document.getElementById("slider");
let cards = slider.getElementsByTagName("li");

let elementsToShow = 3;
if (document.body.clientWidth < 1000) {
  elementsToShow = 1;
} else if (document.body.clientWidth < 1500) {
  elementsToShow = 3;
}

let sliderContainerWidth = sliderContainer.clientWidth;

let cardWidth = sliderContainerWidth / elementsToShow;

slider.style.width = cards.length * cardWidth + "px";
slider.style.transition = "margin";
slider.style.transitionDuration = "1s";

for (let index = 0; index < cards.length; index++) {
  const element = cards[index];
  element.style.width = cardWidth + "px";
}

function prev() {
  if (
    +slider.style.marginLeft.slice(0, -2) !=
    -cardWidth * (cards.length - elementsToShow)
  )
    slider.style.marginLeft =
      +slider.style.marginLeft.slice(0, -2) - cardWidth + "px";
}

function next() {
  if (+slider.style.marginLeft.slice(0, -2) != 0)
    slider.style.marginLeft =
      +slider.style.marginLeft.slice(0, -2) + cardWidth + "px";
}

function autoPlay() {
  prev();

  if (
    +slider.style.marginLeft.slice(0, -2) ===
    -cardWidth * (cards.length - elementsToShow)
  ) {
    slider.style.marginLeft = "0px";
  }

  setTimeout(() => {
    autoPlay();
  }, 3000);
}

setTimeout(() => {
  autoPlay();
}, 3000);

// Kelas Kafekoding
document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".swiper-container", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 8,
    autoplay: {
      delay: 8000,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 1.5,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });
});

// artikel

let sliderArtikel = document.getElementById("sliderArtikel");
let sliderss = document.getElementById("sliderss");
let cardss = slider.getElementsByTagName("li");

let elementsToShows = 3;
if (document.body.clientWidth < 1000) {
  elementsToShow = 1;
} else if (document.body.clientWidth < 1500) {
  elementsToShow = 4;
}

let sliderArtikelWidths = sliderArtikel.clientWidth;

let cardWidths = sliderArtikelWidths / elementsToShow;

sliderss.style.width = cards.length * cardWidth + "px";
sliderss.style.transition = "margin";
sliderss.style.transitionDuration = "1s";

for (let index = 0; index < cardss.length; index++) {
  const element = cardss[index];
  element.style.width = cardWidth + "px";
}

function prev_artikel() {
  if (
    +sliderss.style.marginLeft.slice(0, -2) !=
    -cardWidth * (cards.length - elementsToShow)
  )
    sliderss.style.marginLeft =
      +sliderss.style.marginLeft.slice(0, -2) - cardWidth + "px";
}

function next_artikel() {
  if (+sliderss.style.marginLeft.slice(0, -2) != 0)
    sliderss.style.marginLeft =
      +sliderss.style.marginLeft.slice(0, -2) + cardWidth + "px";
}

function autoPlayss() {
  prev_artikel();

  if (
    +sliderss.style.marginLeft.slice(0, -2) ===
    -cardWidth * (cardss.length - elementsToShow)
  ) {
    sliderss.style.marginLeft = "0px";
  }

  setTimeout(() => {
    autoPlayss();
  }, 3000);
}

setTimeout(() => {
  autoPlayss();
}, 3000);
