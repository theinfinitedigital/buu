<template>
  <Popover class="relative bg-white">
    <div class="pointer-events-none absolute inset-0 z-30 shadow" aria-hidden="true" />
    <div class="relative z-20">
      <div
        class="mx-0 flex max-w-full items-center justify-between py-5 px-6 sm:py-4 md:justify-start md:space-x-10 lg:px-8"
      >
        <div>
          <a href="#" class="flex">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto sm:h-16" src="images/Logo/logo03.png" alt="" />
          </a>
        </div>
        <div class="-my-2 -mr-2 md:hidden">
          <PopoverButton
            class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
          >
            <span class="sr-only">Open menu</span>
            <Bars3Icon class="h-6 w-6" aria-hidden="true" />
          </PopoverButton>
        </div>
        <div class="hidden md:flex md:flex-1 md:items-center md:justify-end">
          <PopoverGroup as="nav" class="flex space-x-10">
            <a href="/" class="text-base font-medium text-gray-500 hover:text-gray-900"
              >Home</a
            >
            <a
              href="/data-services"
              class="text-base font-medium text-gray-500 hover:text-gray-900"
              >Data Services</a
            >
            <a
              href="/aboutus"
              class="text-base font-medium text-gray-500 hover:text-gray-900"
              >About Us</a
            >
            <a
              href="/contectus"
              class="text-base font-medium text-gray-500 hover:text-gray-900"
              >Contact Us</a
            >
          </PopoverGroup>
          <!-- <input id="search-btn" type="checkbox" />
          <label for="search-btn">Show search bar</label> -->
          <!-- <input id="search-bar" type="text" placeholder="Search..." /> -->
          <div class="search-box px-5">
            <button class="btn-search">
              <i><MagnifyingGlassIcon class="h-[30px] w-[30px]" /></i>
            </button>
            <input type="text" class="input-search" placeholder="Type to Search..." />
          </div>
          <Menu as="div" class="relative inline-block text-left">
            <div>
              <MenuButton
                class="inline-flex w-full justify-center rounded-md bg-black bg-opacity-20 px-4 py-2 text-sm font-medium text-white hover:bg-opacity-30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75"
              >
                Options
                <ChevronDownIcon
                  class="ml-2 -mr-1 h-5 w-5 text-violet-200 hover:text-violet-100"
                  aria-hidden="true"
                />
              </MenuButton>
            </div>

            <transition
              enter-active-class="transition duration-100 ease-out"
              enter-from-class="transform scale-95 opacity-0"
              enter-to-class="transform scale-100 opacity-100"
              leave-active-class="transition duration-75 ease-in"
              leave-from-class="transform scale-100 opacity-100"
              leave-to-class="transform scale-95 opacity-0"
            >
              <MenuItems
                class="absolute right-0 mt-2 w-56 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
              >
                <div class="px-1 py-1">
                  <MenuItem v-slot="{ active }">
                    <button
                      :class="[
                        active ? 'bg-violet-500 text-white' : 'text-gray-900',
                        'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                      ]"
                    >
                      <EditIcon
                        :active="active"
                        class="mr-2 h-5 w-5 text-violet-400"
                        aria-hidden="true"
                      />
                      Edit
                    </button>
                  </MenuItem>
                  <MenuItem v-slot="{ active }">
                    <button
                      :class="[
                        active ? 'bg-violet-500 text-white' : 'text-gray-900',
                        'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                      ]"
                    >
                      <DuplicateIcon
                        :active="active"
                        class="mr-2 h-5 w-5 text-violet-400"
                        aria-hidden="true"
                      />
                      Duplicate
                    </button>
                  </MenuItem>
                </div>
                <div class="px-1 py-1">
                  <MenuItem v-slot="{ active }">
                    <button
                      :class="[
                        active ? 'bg-violet-500 text-white' : 'text-gray-900',
                        'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                      ]"
                    >
                      <ArchiveIcon
                        :active="active"
                        class="mr-2 h-5 w-5 text-violet-400"
                        aria-hidden="true"
                      />
                      Archive
                    </button>
                  </MenuItem>
                  <MenuItem v-slot="{ active }">
                    <button
                      :class="[
                        active ? 'bg-violet-500 text-white' : 'text-gray-900',
                        'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                      ]"
                    >
                      <MoveIcon
                        :active="active"
                        class="mr-2 h-5 w-5 text-violet-400"
                        aria-hidden="true"
                      />
                      Move
                    </button>
                  </MenuItem>
                </div>

                <div class="px-1 py-1">
                  <MenuItem v-slot="{ active }">
                    <button
                      :class="[
                        active ? 'bg-violet-500 text-white' : 'text-gray-900',
                        'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                      ]"
                    >
                      <DeleteIcon
                        :active="active"
                        class="mr-2 h-5 w-5 text-violet-400"
                        aria-hidden="true"
                      />
                      Delete
                    </button>
                  </MenuItem>
                </div>
              </MenuItems>
            </transition>
          </Menu>
        </div>
      </div>
    </div>

    <transition
      enter-active-class="duration-200 ease-out"
      enter-from-class="opacity-0 scale-95"
      enter-to-class="opacity-100 scale-100"
      leave-active-class="duration-100 ease-in"
      leave-from-class="opacity-100 scale-100"
      leave-to-class="opacity-0 scale-95"
    >
      <PopoverPanel
        focus
        class="absolute inset-x-0 top-0 z-30 origin-top-right transform p-2 transition md:hidden"
      >
        <div
          class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5"
        >
          <div class="px-5 pt-5 pb-6 sm:pb-8">
            <div class="flex items-center justify-between">
              <div>
                <img
                  class="h-8 w-auto"
                  src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                  alt="Your Company"
                />
              </div>
              <div class="-mr-2">
                <PopoverButton
                  class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                >
                  <span class="sr-only">Close menu</span>
                  <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                </PopoverButton>
              </div>
            </div>
            <div class="mt-6 sm:mt-8">
              <nav>
                <div class="grid gap-7 sm:grid-cols-2 sm:gap-y-8 sm:gap-x-4">
                  <a
                    v-for="item in solutions"
                    :key="item.name"
                    :href="item.href"
                    class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50"
                  >
                    <div
                      class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12"
                    >
                      <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                    </div>
                    <div class="ml-4 text-base font-medium text-gray-900">
                      {{ item.name }}
                    </div>
                  </a>
                </div>
                <div class="mt-8 text-base">
                  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                    View all products
                    <span aria-hidden="true"> &rarr;</span>
                  </a>
                </div>
              </nav>
            </div>
          </div>
          <div class="py-6 px-5">
            <div class="grid grid-cols-2 gap-4">
              <a
                href="#"
                class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700"
                >Pricing</a
              >
              <a
                href="#"
                class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700"
                >Docs</a
              >
              <a
                href="#"
                class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700"
                >Company</a
              >
              <a
                href="#"
                class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700"
                >Resources</a
              >
              <a
                href="#"
                class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700"
                >Blog</a
              >
              <a
                href="#"
                class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700"
                >Contact Sales</a
              >
            </div>
            <div class="mt-6">
              <a
                href="#"
                class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700"
                >Sign up</a
              >
              <p class="mt-6 text-center text-base font-medium text-gray-500">
                Existing customer?
                {{ " " }}
                <a href="#" class="text-indigo-600 hover:text-indigo-500">Sign in</a>
              </p>
            </div>
          </div>
        </div>
      </PopoverPanel>
    </transition>
  </Popover>
</template>
<script>
export default {
  name: "navcomponent",
};
</script>
<script setup>
import {
  Menu,
  MenuButton,
  MenuItems,
  MenuItem,
  Popover,
  PopoverButton,
  PopoverGroup,
  PopoverPanel,
  Disclosure,
  DisclosureButton,
  DisclosurePanel,
} from "@headlessui/vue";
import {
  Bars3Icon,
  ArchiveIcon,
  DuplicateIcon,
  MoveIcon,
  EditIcon,
  DeleteIcon,
  BookmarkSquareIcon,
  BriefcaseIcon,
  BuildingOfficeIcon,
  ChartBarIcon,
  CheckCircleIcon,
  ComputerDesktopIcon,
  CursorArrowRaysIcon,
  GlobeAltIcon,
  InformationCircleIcon,
  NewspaperIcon,
  PhoneIcon,
  PlayIcon,
  ShieldCheckIcon,
  Squares2X2Icon,
  UserGroupIcon,
  XMarkIcon,
  MagnifyingGlassIcon,
} from "@heroicons/vue/24/outline";
import { ChevronDownIcon } from "@heroicons/vue/20/solid";

const solutions = [
  {
    name: "Analytics",
    description: "Get a better understanding of where your traffic is coming from.",
    href: "#",
    icon: ChartBarIcon,
  },
  {
    name: "Engagement",
    description: "Speak directly to your customers in a more meaningful way.",
    href: "#",
    icon: CursorArrowRaysIcon,
  },
  {
    name: "Security",
    description: "Your customers' data will be safe and secure.",
    href: "#",
    icon: ShieldCheckIcon,
  },
  {
    name: "Integrations",
    description: "Connect with third-party tools that you're already using.",
    href: "#",
    icon: Squares2X2Icon,
  },
];
const callsToAction = [
  { name: "Watch Demo", href: "#", icon: PlayIcon },
  { name: "View All Products", href: "#", icon: CheckCircleIcon },
  { name: "Contact Sales", href: "#", icon: PhoneIcon },
];
const company = [
  { name: "About", href: "#", icon: InformationCircleIcon },
  { name: "Customers", href: "#", icon: BuildingOfficeIcon },
  { name: "Press", href: "#", icon: NewspaperIcon },
  { name: "Careers", href: "#", icon: BriefcaseIcon },
  { name: "Privacy", href: "#", icon: ShieldCheckIcon },
];
const resources = [
  { name: "Community", href: "#", icon: UserGroupIcon },
  { name: "Partners", href: "#", icon: GlobeAltIcon },
  { name: "Guides", href: "#", icon: BookmarkSquareIcon },
  { name: "Webinars", href: "#", icon: ComputerDesktopIcon },
];
const blogPosts = [
  {
    id: 1,
    name: "Boost your conversion rate",
    href: "#",
    preview:
      "Eget ullamcorper ac ut vulputate fames nec mattis pellentesque elementum. Viverra tempor id mus.",
    imageUrl:
      "https://images.unsplash.com/photo-1558478551-1a378f63328e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2849&q=80",
  },
  {
    id: 2,
    name: "How to use search engine optimization to drive traffic to your site",
    href: "#",
    preview:
      "Eget ullamcorper ac ut vulputate fames nec mattis pellentesque elementum. Viverra tempor id mus.",
    imageUrl:
      "https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2300&q=80",
  },
];
</script>
<style scoped>
.search-box {
  width: fit-content;
  height: fit-content;
  position: relative;
}
.input-search {
  height: 50px;
  width: 50px;
  border-style: none;
  padding: 10px;
  font-size: 18px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 25px;
  transition: all 0.5s ease-in-out;
  background-color: #22a6b3;
  padding-right: 40px;
  color: #fff;
}
.input-search::placeholder {
  color: rgba(255, 255, 255, 0.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 100;
}
.btn-search {
  width: 50px;
  height: 50px;
  border-style: none;
  font-size: 20px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 10px;
  color: #ffffff;
  background-color: transparent;
  pointer-events: painted;
}
.btn-search:focus ~ .input-search {
  width: 300px;
  border-radius: 20px;
  color: #22a6b3;
  background-color: #22a6b3;
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  transition: all 500ms cubic-bezier(0, 0.11, 0.35, 2);
}
.input-search:focus {
  width: 300px;
  border-radius: 20px;
  color: #22a6b3;
  background-color: transparent;
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  transition: all 500ms cubic-bezier(0, 0.11, 0.35, 2);
}

#btn--yp {
  box-sizing: content-box;
  position: fixed;
  z-index: 9;
  bottom: 1em;
  right: 1em;
  border: solid 1em transparent;
  width: 4.625em;
  height: 3.25em;
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/2017/icon-yp.svg) 50% /
    cover content-box;
  font: 16px/1.25 trebuchet ms, sans-serif;
  text-indent: 200vw;
  text-shadow: none;
  filter: grayscale(1) drop-shadow(0 0 1px #e8e0e0);
  transition: 0.5s;
  white-space: nowrap;
}
#btn--yp:before {
  box-sizing: inherit;
  position: absolute;
  left: 0;
  bottom: 100%;
  margin: 1em -0.5em;
  padding: 0.5em;
  width: 100%;
  border-radius: 5px;
  background: #e8e0e0;
  color: #000;
  text-align: center;
  text-decoration: none;
  text-indent: 0vw;
  white-space: normal;
  animation: float 1s ease-in-out infinite alternate;
  content: attr(data-txt);
}
#btn--yp:hover,
#btn--yp:focus {
  outline: none;
  filter: grayscale(0) drop-shadow(0 0 1px crimson);
}

@keyframes float {
  to {
    transform: translateY(0.75em);
  }
}

[id="search-btn"] {
  position: absolute;
  left: -100vw;
}
[id="search-btn"] ~ * {
  --i: var(--pos, 1);
  --j: calc(1 - var(--i));
}
[id="search-btn"]:checked ~ * {
  --pos: 0;
}

[for="search-btn"] {
  order: 1;
  overflow: hidden;
  position: relative;
  z-index: 2;
  margin-left: -1.25em;
  width: 5em;
  height: 5em;
  border-radius: 50%;
  transform: translate(var(--pos, -10em)) rotate(45deg);
  background: hsl(
    calc(336 - var(--i) * 269),
    calc(77% + var(--i) * 2%),
    calc(49% + var(--i) * 13%)
  );
  text-indent: -100vw;
  transition: 0.65s ease-out;
  cursor: pointer;
}
[for="search-btn"]:before,
[for="search-btn"]:after {
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -0.8125em;
  width: 1.625em;
  height: 1.625em;
  transition: inherit;
  content: "";
}
[for="search-btn"]:before {
  margin-top: -0.08125em;
  height: 0.203125em;
  transform-origin: 100% 0;
  transform: translate(var(--pos, 0.40625em)) scalex(calc(1 - var(--i) * 0.5));
  background: currentcolor;
}
[for="search-btn"]:after {
  border: solid 0.203125em currentcolor;
  border-radius: calc(var(--i) * 50%);
  transform: translate(var(--pos, -0.40625em)) scalex(calc(var(--j) * 0.125 + var(--i)));
  box-shadow: inset 0 0 0 calc(var(--j) * 0.8125em) currentcolor;
  transition-property: border-radius, transform, box-shadow;
  transition-timing-function: cubic-bezier(
      calc(var(--j) * 0.42),
      0,
      calc(1 - var(--i) * 0.42),
      1
    ),
    cubic-bezier(calc(var(--i) * 0.42), 0, calc(1 - var(--j) * 0.42), 1);
}

[id="search-bar"] {
  margin-right: -1.25em;
  border: none;
  padding: 0 1em;
  width: 20em;
  height: 3.25em;
  border-radius: 3.25em;
  transform: translate(var(--pos, 10em));
  background: #3f324d;
  --cp: inset(-2em var(--pos, 100%) -2em -2em);
  -webkit-clip-path: var(--cp);
  clip-path: var(--cp);
  color: #fff;
  font: 1em century gothic, verdana, arial, sans-serif;
  transition: 0.65s;
}
[id="search-bar"]::placeholder {
  opacity: 0.5;
  color: inherit;
  font-size: 0.875em;
  letter-spacing: 1px;
  text-shadow: 0 0 1px, 0 0 2px;
}
[id="search-bar"]:focus {
  outline: none;
  box-shadow: 0 0 1.5em #ffeacc, 0 1.25em 1.5em rgba(0, 0, 0, 0.2);
  background: #ffeacc;
  color: #000;
}
</style>
