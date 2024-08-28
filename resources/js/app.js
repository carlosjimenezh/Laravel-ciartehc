// import "./bootstrap";
// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

// init Swiper:
const swiper = new Swiper(".swiper", {
    // configure Swiper to use modules
    loop: true,
    modules: [Navigation, Pagination, Autoplay],
    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    autoplay: {
        delay: 5000,
    },
});

document.querySelector("#btn-menu")?.addEventListener("click", () => {
    document.querySelector("#collapsing-menu").classList.toggle("hidden");
});

document
    .querySelector("#close-collapsing-menu")
    ?.addEventListener("click", () => {
        document.querySelector("#collapsing-menu").classList.toggle("hidden");
    });

document
    .querySelector("#lineas-investigacion")
    ?.addEventListener("click", () => {
        document
            .querySelector("#menu-lineas-investigacion")
            .classList.toggle("hidden");
    });

window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        document.querySelector("#header")?.classList.add("scrolled");
    } else {
        document.querySelector("#header")?.classList.remove("scrolled");
    }
});
