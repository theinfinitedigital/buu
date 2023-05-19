<template>
  <div class="grid grid-cols-1 px-4 md:px-[286px]">
    <div class="text-center mb-10">
      <h1 class="text-[40px] text-primarybuu font-medium uppercase pb-2">
        การทำงานร่วมกัน
      </h1>
    </div>
    <div class="grid grid-cols-4 gap-0 justify-items-center mb-10">
      <div v-for="item in dataAboutUs" :key="item.id" class="pb-5">
        <div class="rounded-full text-center pb-5">
          <img
            class="w-48 h-48 object-cover rounded-full"
            :src="item.imgUrl"
            :alt="item.alt"
          />
        </div>
        <div class="text-center text-neutralbuu">
          <p class="text-lg">{{ item.name }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const dataAboutUs = [
  {
    id: 1,
    name: "สำนักงานเศรษฐกิจการเกษตรที่ 6",
    positions: "สำนักงานเศรษฐกิจการเกษตรที่ 6",
    href: "http://oaezone.oae.go.th/view/15/index/TH-TH",
    imgUrl: "/images/Contact Us/Cooperation/logo-1.png",
    alt: "สำนักงานเศรษฐกิจการเกษตรที่ 6",
  },
  {
    id: 2,
    name: "สถิติจังหวัดจันทบุรี",
    positions: "สถิติจังหวัดจันทบุรี",
    href: "http://chanthaburi.nso.go.th/",
    imgUrl: "/images/Contact Us/Cooperation/logo-2.jpg",
    alt: "สถิติจังหวัดจันทบุรี",
  },
  {
    id: 3,
    name: "สำนักงานพัฒนาวิทยาศาสตร์",
    positions: "และเทคโนโลยีแห่งชาติ (สวทช)",
    href: "#",
    imgUrl: "/images/Contact Us/Cooperation/logo-3.png",
    alt: "สำนักงานพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ (สวทช )",
  },
  {
    id: 4,
    name: "สำนักงานพัฒนาวิทยาศาสตร์",
    positions: "และเทคโนโลยีแห่งชาติ (สวทช)",
    href: "#",
    imgUrl: "/images/Contact Us/Cooperation/logo-3.png",
    alt: "สำนักงานพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ (สวทช )",
  },
];
</script>
