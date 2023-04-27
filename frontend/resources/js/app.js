require("./bootstrap");

import { createApp } from "vue";
import navcomponent from "./components/layouts/NavComponent.vue";
import footercomponent from "./components/layouts/FooterComponent.vue";
import bannercomponent from "./components/BannerComponent.vue";

createApp({
    components: {
        navcomponent,
        bannercomponent,
        footercomponent,
    },
}).mount("#app");


