require("./bootstrap");

import { createApp } from "vue";
import navcomponent from "./components/layouts/NavComponent.vue";
import bannercomponent from "./components/BannerComponent.vue";

createApp({
    components: {
        navcomponent,
        bannercomponent,
    },
}).mount("#app");


