<template>
    <Popover class="relative bg-white">
        <div class="pointer-events-none absolute inset-0 z-30 shadow" aria-hidden="true" />
        <div class="relative z-20">
            <div
                class="mx-0 flex max-w-full items-center justify-between py-5 px-6 sm:py-4 md:justify-start md:space-x-10 lg:px-8">
                <div>
                    <a href="#" class="flex">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto sm:h-16"
                            src="https://via.placeholder.com/150x150" alt="" />
                    </a>
                </div>
                <div class="-my-2 -mr-2 md:hidden">
                    <PopoverButton
                        class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Open menu</span>
                        <Bars3Icon class="h-6 w-6" aria-hidden="true" />
                    </PopoverButton>
                </div>
                <div class="hidden md:flex md:flex-1 md:items-center md:justify-end">
                    <PopoverGroup as="nav" class="flex space-x-10">
                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</a>
                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Associate link</a>
                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">About Us</a>
                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Contact</a>
                    </PopoverGroup>
                </div>
            </div>
        </div>

        <transition enter-active-class="duration-200 ease-out" enter-from-class="opacity-0 scale-95"
            enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
            leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
            <PopoverPanel focus class="absolute inset-x-0 top-0 z-30 origin-top-right transform p-2 transition md:hidden">
                <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                    <div class="px-5 pt-5 pb-6 sm:pb-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                    alt="Your Company" />
                            </div>
                            <div class="-mr-2">
                                <PopoverButton
                                    class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close menu</span>
                                    <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                                </PopoverButton>
                            </div>
                        </div>
                        <div class="mt-6 sm:mt-8">
                            <nav>
                                <div class="grid gap-7 sm:grid-cols-2 sm:gap-y-8 sm:gap-x-4">
                                    <a v-for="item in solutions" :key="item.name" :href="item.href"
                                        class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                                        <div
                                            class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                            <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">{{ item.name }}</div>
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
                            <a href="#"
                                class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Pricing</a>
                            <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Docs</a>
                            <a href="#"
                                class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Company</a>
                            <a href="#"
                                class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Resources</a>
                            <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Blog</a>
                            <a href="#" class="rounded-md text-base font-medium text-gray-900 hover:text-gray-700">Contact
                                Sales</a>
                        </div>
                        <div class="mt-6">
                            <a href="#"
                                class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign
                                up</a>
                            <p class="mt-6 text-center text-base font-medium text-gray-500">
                                Existing customer?
                                {{ ' ' }}
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
    name: 'navcomponent',
}
</script>
<script setup>
import { Popover, PopoverButton, PopoverGroup, PopoverPanel } from '@headlessui/vue'
import {
    Bars3Icon,
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
} from '@heroicons/vue/24/outline'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'

const solutions = [
    {
        name: 'Analytics',
        description: 'Get a better understanding of where your traffic is coming from.',
        href: '#',
        icon: ChartBarIcon,
    },
    {
        name: 'Engagement',
        description: 'Speak directly to your customers in a more meaningful way.',
        href: '#',
        icon: CursorArrowRaysIcon,
    },
    { name: 'Security', description: "Your customers' data will be safe and secure.", href: '#', icon: ShieldCheckIcon },
    {
        name: 'Integrations',
        description: "Connect with third-party tools that you're already using.",
        href: '#',
        icon: Squares2X2Icon,
    },
]
const callsToAction = [
    { name: 'Watch Demo', href: '#', icon: PlayIcon },
    { name: 'View All Products', href: '#', icon: CheckCircleIcon },
    { name: 'Contact Sales', href: '#', icon: PhoneIcon },
]
const company = [
    { name: 'About', href: '#', icon: InformationCircleIcon },
    { name: 'Customers', href: '#', icon: BuildingOfficeIcon },
    { name: 'Press', href: '#', icon: NewspaperIcon },
    { name: 'Careers', href: '#', icon: BriefcaseIcon },
    { name: 'Privacy', href: '#', icon: ShieldCheckIcon },
]
const resources = [
    { name: 'Community', href: '#', icon: UserGroupIcon },
    { name: 'Partners', href: '#', icon: GlobeAltIcon },
    { name: 'Guides', href: '#', icon: BookmarkSquareIcon },
    { name: 'Webinars', href: '#', icon: ComputerDesktopIcon },
]
const blogPosts = [
    {
        id: 1,
        name: 'Boost your conversion rate',
        href: '#',
        preview: 'Eget ullamcorper ac ut vulputate fames nec mattis pellentesque elementum. Viverra tempor id mus.',
        imageUrl:
            'https://images.unsplash.com/photo-1558478551-1a378f63328e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2849&q=80',
    },
    {
        id: 2,
        name: 'How to use search engine optimization to drive traffic to your site',
        href: '#',
        preview: 'Eget ullamcorper ac ut vulputate fames nec mattis pellentesque elementum. Viverra tempor id mus.',
        imageUrl:
            'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2300&q=80',
    },
]
</script>