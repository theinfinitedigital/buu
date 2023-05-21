<template>
  <div class="grid grid-cols-1 px-4 md:px-[500px]">
    <div class="text-center mb-10">
      <h1 class="text-[40px] text-primarybuu font-medium uppercase pb-2">
        งานวิจัยพร้อมใช้
      </h1>
    </div>
    <div class="grid grid-cols-2 gap-x-12 gap-y-10 justify-items-center mb-10">
      <a v-for="item in dataLinkBox" :key="item.id" :href="item.href" class="pb-2">
        <div class="text-start text-neutralbuu px-12">
          <h2 class="text-xl font-bold capitalize pb-2">{{ item.name }}</h2>
          <p class="text-lg text-start line-clamp-2">{{ item.description }}</p>
        </div>
      </a>
    </div>
  </div>
</template>

<script setup>
const dataLinkBox = [
  {
    id: 1,
    name: "ข้อมูลการเกษตร ของหน่อยงาน XXX",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat temporibus autsimilique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quiset quameveniet ducimus dolorum maiores porro.Lorem ipsum dolor, sit amet consectetur adipisicingelit.Iusto, at laboriosam corrupti ab dignissimos perferendis neque.Quia cupiditate nobisrepudiandaehic unde iste.Rerum dolore inventore beatae earum, eveniet doloremque.",
    href: "#",
  },
  {
    id: 2,
    name: "ข้อมูลการเกษตร ของหน่อยงาน XXX",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat temporibus autsimilique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quiset quameveniet ducimus dolorum maiores porro.Lorem ipsum dolor, sit amet consectetur adipisicingelit.Iusto, at laboriosam corrupti ab dignissimos perferendis neque.Quia cupiditate nobisrepudiandaehic unde iste.Rerum dolore inventore beatae earum, eveniet doloremque.",
    href: "#",
  },
  {
    id: 3,
    name: "ข้อมูลการเกษตร ของหน่อยงาน XXX",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat temporibus autsimilique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quiset quameveniet ducimus dolorum maiores porro.Lorem ipsum dolor, sit amet consectetur adipisicingelit.Iusto, at laboriosam corrupti ab dignissimos perferendis neque.Quia cupiditate nobisrepudiandaehic unde iste.Rerum dolore inventore beatae earum, eveniet doloremque.",
    href: "#",
  },
  {
    id: 4,
    name: "ข้อมูลการเกษตร ของหน่อยงาน XXX",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat temporibus autsimilique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quiset quameveniet ducimus dolorum maiores porro.Lorem ipsum dolor, sit amet consectetur adipisicingelit.Iusto, at laboriosam corrupti ab dignissimos perferendis neque.Quia cupiditate nobisrepudiandaehic unde iste.Rerum dolore inventore beatae earum, eveniet doloremque.",
    href: "#",
  },
  {
    id: 5,
    name: "ข้อมูลการเกษตร ของหน่อยงาน XXX",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat temporibus autsimilique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quiset quameveniet ducimus dolorum maiores porro.Lorem ipsum dolor, sit amet consectetur adipisicingelit.Iusto, at laboriosam corrupti ab dignissimos perferendis neque.Quia cupiditate nobisrepudiandaehic unde iste.Rerum dolore inventore beatae earum, eveniet doloremque.",
    href: "#",
  },
  {
    id: 6,
    name: "ข้อมูลการเกษตร ของหน่อยงาน XXX",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat temporibus autsimilique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quiset quameveniet ducimus dolorum maiores porro.Lorem ipsum dolor, sit amet consectetur adipisicingelit.Iusto, at laboriosam corrupti ab dignissimos perferendis neque.Quia cupiditate nobisrepudiandaehic unde iste.Rerum dolore inventore beatae earum, eveniet doloremque.",
    href: "#",
  },
  {
    id: 7,
    name: "ข้อมูลการเกษตร ของหน่อยงาน XXX",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat temporibus autsimilique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quiset quameveniet ducimus dolorum maiores porro.Lorem ipsum dolor, sit amet consectetur adipisicingelit.Iusto, at laboriosam corrupti ab dignissimos perferendis neque.Quia cupiditate nobisrepudiandaehic unde iste.Rerum dolore inventore beatae earum, eveniet doloremque.",
    href: "#",
  },
  {
    id: 8,
    name: "ข้อมูลการเกษตร ของหน่อยงาน XXX",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat temporibus autsimilique ducimus fugit tempora id consequuntur aliquid? Doloremque cum tenetur culpa quiset quameveniet ducimus dolorum maiores porro.Lorem ipsum dolor, sit amet consectetur adipisicingelit.Iusto, at laboriosam corrupti ab dignissimos perferendis neque.Quia cupiditate nobisrepudiandaehic unde iste.Rerum dolore inventore beatae earum, eveniet doloremque.",
    href: "#",
  },
];
</script>
