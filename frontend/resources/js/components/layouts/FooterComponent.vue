<template>
  <footer class="bg-[url('/images/Footer/bg-footer-01.png')] bg-cover bg-no-repeat">
    <!-- <img class="w-full h-auto object-cover" src="images/Footer/footer-02.jpg" /> -->

    <div class="mx-auto overflow-hidden py-10 px-6 sm:py-24 lg:px-8">
      <div
        class="grid grid-cols-4 gap-0 divide-x-2 place-items-stretch divide-primarybuu"
      >
        <div class="place-self-center py-5 pl-20 pr-3">
          <img class="w-5/6 h-auto object-cover" src="/images/Logo/logo03.png" />
        </div>
        <div class="col-span-2 py-5 pl-20 pr-3">
          <div class="flex flex-row gap-2 justify-center">
            <div class="flex-auto w-1/2">
              <div class="pr-10">
                <h2 class="text-2xl text-primarybuu font-bold capitalize pb-2">
                  ที่อยู่
                </h2>
                <p
                  class="text-xl text-primarybuu indent-0 whitespace-normal leading-loose tracking-wide text-justify"
                >
                  มหาวิทยาลัยบูรพา วิทยาเขตจันทบุรี <br />57 หมู่ 1 ถนนชลประทาน
                  ตำบลโขมง<br />
                  อำเภอท่าใหม่ จังหวัดจันทบุรี 22170
                </p>
              </div>
            </div>
            <div class="flex-auto w-1/2">
              <div class="pb-3">
                <h2 class="text-2xl text-primarybuu font-bold capitalize pb-2">
                  โทรศัพท์
                </h2>
                <p class="text-xl text-primarybuu indent-0">039-310000</p>
              </div>
              <div>
                <h2 class="text-2xl text-primarybuu font-bold capitalize pb-2">อีเมล์</h2>
                <p class="text-xl text-primarybuu indent-0">arees@go.buu.ac.th</p>
              </div>
            </div>
          </div>
        </div>
        <div class="text-start py-5 pl-20 pr-3">
          <div class="pb-3">
            <h2 class="text-2xl text-primarybuu font-bold capitalize pb-2">
              ช่องทางการติดต่อ
            </h2>
          </div>
          <div class="flex justify-start space-x-5">
            <a
              v-for="item in social"
              :key="item.id"
              :href="item.href"
              class="text-gray-400 hover:text-gray-500"
            >
              <span class="sr-only">{{ item.name }}</span>
              <img class="h-16 w-16 object-cover" :src="item.imgUrl" :alt="item.alt" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
const social = [
  {
    id: 1,
    name: "Facebook",
    href: "#",
    imgUrl: "/images/icon/facebook-icon.png",
    alt: "Facebook-Icon",
  },
  {
    id: 2,
    name: "Instagram",
    href: "#",
    imgUrl: "/images/icon/Line-icon.png",
    alt: "Instagram-Icon",
  },
  {
    id: 3,
    name: "YouTube",
    href: "#",
    imgUrl: "/images/icon/youtube-icon.png",
    alt: "YouTube-Icon",
  },
];
</script>
