<template>
  <div class="grid grid-cols-1 px-4 md:px-20">
    <div
      class="flex justify-center mb-10 bg-secondarybuu rounded-xl"
      v-for="item in boxAboutUs"
      :key="item.id"
    >
      <div class="rounded-l-xl text-center w-1/2">
        <img
          class="w-auto h-[543px] object-cover rounded-l-xl"
          :src="item.imgUrl"
          :alt="item.alt"
        />
      </div>
      <div class="rounded-r-xl text-center w-1/2">
        <div>
          <div class="my-16 mx-10 text-center text-white">
            <h2 class="text-3xl font-bold capitalize pb-20">{{ item.name }}</h2>
            <p class="text-lg text-start indent-10">{{ item.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const boxAboutUs = [
  {
    id: 1,
    name: "เกี่ยวกับเรา",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat temporibus autsimilique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quiset quameveniet ducimus dolorum maiores porro.Lorem ipsum dolor, sit amet consectetur adipisicingelit.Iusto, at laboriosam corrupti ab dignissimos perferendis neque.Quia cupiditate nobisrepudiandaehic unde iste.Rerum dolore inventore beatae earum, eveniet doloremque.",
    href: "#",
    imgUrl: "/images/Contact Us/IMG_3847.jpg",
    alt: "a.aun ผู้รับผิดชอบโครงการ",
  },
];
</script>
