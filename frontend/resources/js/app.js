require("./bootstrap");

import { createApp } from "vue";
import navcomponent from "./components/NavComponent.vue";
import homecomponent from "./components/HomeComponent.vue";

createApp({
    components: {
        navcomponent,
        homecomponent,
    },
}).mount("#app");

const slidesContainer = document.querySelector(".slides-container");
const slideWidth = slidesContainer.querySelector(".slide").clientWidth;
const prevButton = document.querySelector(".prev");
const nextButton = document.querySelector(".next");

nextButton.addEventListener("click", () => {
    slidesContainer.scrollLeft += slideWidth;
});

prevButton.addEventListener("click", () => {
    slidesContainer.scrollLeft -= slideWidth;
});


