require("./bootstrap");

import { createApp } from "vue";
import navcomponent from "./components/layouts/NavComponent.vue";
import footercomponent from "./components/layouts/FooterComponent.vue";
import bannercomponent from "./components/BannerComponent.vue";
import dataservices from "./components/DataservicesComponent.vue";
import dataservicestype from "./components/DataservicesTypeComponent.vue";
import aboutuscomponent from "./components/AboutUsComponent.vue";
import aboutusboxcomponent from "./components/AboutUsBoxComponent.vue";
import cooperationcomponent from "./components/CooperationComponent.vue";
import linkboxcomponent from "./components/LinkBoxComponent.vue";

createApp({
    components: {
        navcomponent,
        bannercomponent,
        footercomponent,
        dataservices,
        dataservicestype,
        aboutuscomponent,
        aboutusboxcomponent,
        cooperationcomponent,
        linkboxcomponent,
    },
}).mount("#app");


