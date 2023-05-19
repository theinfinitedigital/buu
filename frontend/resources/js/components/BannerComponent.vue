<template>
  <swiper :navigation="true" :modules="modules" class="mySwiper" v-if="status == 1">
    <swiper-slide
      :slidesPerView="1"
      :spaceBetween="30"
      :loop="true"
      :pagination="{
        clickable: true,
      }"
      :navigation="true"
      :modules="modules"
    >
      <div class="relative">
        <img
          class="h-auto md:h-screen w-full object-cover object-center"
          :src="src"
          alt="People working on laptops"
        />
      </div>
      <div class="absolute top-1/4 left-[45%]">
        <p class="text-5xl text-center text-white">{{ text }}</p>
      </div>
    </swiper-slide>
  </swiper>
  <iframe
    v-else
    class="w-full aspect-video"
    width="1920"
    height="auto"
    src="https://www.youtube.com/embed/EzYxfpaO0og"
    title="YouTube video player"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    allowfullscreen
  ></iframe>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/navigation";

// import required modules
import { Navigation } from "swiper";

export default {
  props: ["status", "data", "src", "text"],
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {
      modules: [Navigation],
    };
  },
};
</script>
