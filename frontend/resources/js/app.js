require("./bootstrap");

import { createApp } from "vue";
import navcomponent from "./components/layouts/NavComponent.vue";
import slidescomponent from "./components/SlidesComponent.vue";

createApp({
    components: {
        navcomponent,
        slidescomponent,
    },
}).mount("#app");


