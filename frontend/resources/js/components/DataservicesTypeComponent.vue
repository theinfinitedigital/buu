<template>
  <div class="grid grid-cols-3 gap-24 justify-items-center mb-10">
    <a v-for="item in datacentertype" :key="item.id" :href="item.href">
      <div
        class="flex flex-col p-5 mb-10 w-[472px] h-[508px] rounded-xl bg-white shadow-[1px_1px_10px_0_rgba(0,0,0,0.3)]"
      >
        <div>
          <img
            class="w-full h-auto object-cover rounded-xl"
            :src="item.imgUrl"
            :alt="item.alt"
          />
        </div>
        <div class="text-start pt-5">
          <h2 class="text-2xl text-secondarybuu capitalize pb-2">{{ item.name }}</h2>
          <time class="text-md text-neutralbuu">{{ item.date }}</time>
          <p class="text-lg text-neutralbuu indent-6 line-clamp-2">
            {{ item.description }}
          </p>
        </div>
      </div>
    </a>
  </div>
  <div class="flex items-center justify-between px-4 py-3 sm:px-6">
    <div class="flex flex-1 justify-between sm:hidden">
      <a
        href="#"
        class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50"
        >Previous</a
      >
      <a
        href="#"
        class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50"
        >Next</a
      >
    </div>
    <div
      class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between md:justify-center"
    >
      <div class="rounded-md bg-white">
        <nav
          class="isolate inline-flex -space-x-px rounded-md shadow-sm"
          aria-label="Pagination"
        >
          <a
            href="#"
            class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
          >
            <span class="sr-only">Previous</span>
            <svg
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
              aria-hidden="true"
            >
              <path
                fill-rule="evenodd"
                d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
          <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
          <a
            href="#"
            aria-current="page"
            class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-gray-900 focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >1</a
          >
          <a
            href="#"
            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
            >2</a
          >
          <a
            href="#"
            class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex"
            >3</a
          >
          <span
            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0"
            >...</span
          >
          <a
            href="#"
            class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex"
            >8</a
          >
          <a
            href="#"
            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
            >9</a
          >
          <a
            href="#"
            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
            >10</a
          >
          <a
            href="#"
            class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
          >
            <span class="sr-only">Next</span>
            <svg
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
              aria-hidden="true"
            >
              <path
                fill-rule="evenodd"
                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
        </nav>
      </div>
    </div>
  </div>
</template>

<script setup>
const datacentertype = [
  {
    id: 1,
    name: "Agriculture - เรื่องที่ 1",
    date: "05-01-2566",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et ",
    href: "#",
    imgUrl: "/images/Home/Agriculture.jpg",
    alt: "Agriculture - เรื่องที่ 1",
  },
  {
    id: 2,
    name: "Agriculture - เรื่องที่ 2",
    date: "05-01-2566",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et ",
    href: "#",
    imgUrl: "/images/Home/Agriculture.jpg",
    alt: "Agriculture - เรื่องที่ 2",
  },
  {
    id: 3,
    name: "Agriculture - เรื่องที่ 3",
    date: "05-01-2566",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et ",
    href: "#",
    imgUrl: "/images/Home/Agriculture.jpg",
    alt: "Agriculture - เรื่องที่ 3",
  },
  {
    id: 4,
    name: "Agriculture - เรื่องที่ 4",
    date: "05-01-2566",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et ",
    href: "#",
    imgUrl: "/images/Home/Agriculture.jpg",
    alt: "Agriculture - เรื่องที่ 4",
  },
  {
    id: 5,
    name: "Agriculture - เรื่องที่ 5",
    date: "05-01-2566",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et ",
    href: "#",
    imgUrl: "/images/Home/Agriculture.jpg",
    alt: "Agriculture - เรื่องที่ 5",
  },
  {
    id: 6,
    name: "Agriculture - เรื่องที่ 6",
    date: "05-01-2566",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et ",
    href: "#",
    imgUrl: "/images/Home/Agriculture.jpg",
    alt: "Agriculture - เรื่องที่ 6",
  },
  {
    id: 7,
    name: "Agriculture - เรื่องที่ 7",
    date: "05-01-2566",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et ",
    href: "#",
    imgUrl: "/images/Home/Agriculture.jpg",
    alt: "Agriculture - เรื่องที่ 7",
  },
  {
    id: 8,
    name: "Agriculture - เรื่องที่ 8",
    date: "05-01-2566",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et ",
    href: "#",
    imgUrl: "/images/Home/Agriculture.jpg",
    alt: "Agriculture - เรื่องที่ 8",
  },
  {
    id: 9,
    name: "Agriculture - เรื่องที่ 9",
    date: "05-01-2566",
    description:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et ",
    href: "#",
    imgUrl: "/images/Home/Agriculture.jpg",
    alt: "Agriculture - เรื่องที่ 9",
  },
];
</script>
