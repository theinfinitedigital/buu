<template>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-24 justify-items-center">
    <a v-for="item in datacenter" :key="item.id" :href="item.href">
      <div
        class="flex flex-col p-5 md:w-[472px] md:h-[452px] rounded-xl bg-white shadow-[1px_1px_10px_0_rgba(0,0,0,0.3)]"
      >
        <div>
          <img
            class="w-full h-auto object-cover rounded-xl"
            :src="item.imgUrl"
            :alt="item.src"
          />
        </div>
        <div class="text-center pt-9">
          <h2 class="text-2xl text-secondarybuu font-medium capitalize">
            {{ item.name }}
          </h2>
          <p class="text-base text-neutralbuu">{{ item.description }}</p>
        </div>
      </div>
    </a>
  </div>
</template>

<script setup>
const datacenter = [
  {
    id: 1,
    name: "Agriculture",
    description: "กการเกษตร",
    href: "/dataservices-detail",
    imgUrl: "/images/Home/Agriculture.jpg",
    alt: "Agriculture",
  },
  {
    id: 2,
    name: "Aquaculture-and-Fishery",
    description: "การเพาะเลี้ยงสัตว์น้ำ",
    href: "#",
    imgUrl: "/images/Home/02-Aquaculture-and-Fishery.jpg",
    alt: "Agriculture",
  },
  {
    id: 3,
    name: "Forestry",
    description: "ป่าไม้",
    href: "#",
    imgUrl: "/images/Home/03-Forestry.jpg",
    alt: "Forestry",
  },
  {
    id: 4,
    name: "Natyral Resources",
    description: "แหล่งทรัพยากรธรรมชาติ",
    href: "#",
    imgUrl: "/images/Home/04-Natyral-Resources.jpg",
    alt: "Natyral Resources",
  },
  {
    id: 5,
    name: "Population",
    description: "ประชากร",
    href: "#",
    imgUrl: "/images/Home/05-Population.jpg",
    alt: "Population",
  },
  {
    id: 6,
    name: "Climate Change",
    description: "ภูมิอากาศ",
    href: "#",
    imgUrl: "/images/Home/06 Climate-Change.jpg",
    alt: "Climate Change",
  },
  {
    id: 7,
    name: "Marine Coastal Resources",
    description: "แหล่งทรัพยากรชายฝั่งทะเล",
    href: "#",
    imgUrl: "/images/Home/07-Marine-Coastal-Resources.jpg",
    alt: "Marine Coastal Resources",
  },
  {
    id: 8,
    name: "Economics",
    description: "เศรษฐศาสตร์",
    href: "#",
    imgUrl: "/images/Home/08-Economics.jpg",
    alt: "Economics",
  },
  {
    id: 9,
    name: "Gastronomy",
    description: "อาหาร",
    href: "#",
    imgUrl: "/images/Home/09-Food.jpg",
    alt: "Gastronomy",
  },
  {
    id: 10,
    name: "Logistics",
    description: "การขนส่ง",
    href: "#",
    imgUrl: "/images/Home/10-Logistics.jpg",
    alt: "Logistics",
  },
  {
    id: 11,
    name: "Sustainable Development Goals",
    description: "ข้อมูลเกี่ยวกับ SDGs",
    href: "#",
    imgUrl: "/images/Home/11-Sustainable-Development-Goals.jpg",
    alt: "Sustainable Development Goals",
  },
  {
    id: 12,
    name: "Others",
    description: "อื่นๆ",
    href: "#",
    imgUrl: "/images/Home/12-Others.jpg",
    alt: "Others",
  },
];
</script>
