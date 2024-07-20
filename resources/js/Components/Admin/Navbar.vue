<script setup>
import {Bars3Icon} from "@heroicons/vue/24/outline/index.js";
import {ChevronDownIcon} from "@heroicons/vue/20/solid/index.js";
import {Menu, MenuButton, MenuItem, MenuItems} from "@headlessui/vue";
import {computed, ref} from 'vue'
import {usePage, Link, router} from '@inertiajs/vue3'

const emit = defineEmits(["openSidebar"]);

const page = usePage()

const user = computed(() => page.props.auth.user)

const openMenu = ref(false);

const logout = () => {
    router.post(route('logout'));
}

</script>

<template>
    <div
        class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
        <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" @click="$emit('openSidebar')">
            <span class="sr-only">Open sidebar</span>
            <Bars3Icon class="h-6 w-6" aria-hidden="true"/>
        </button>

        <div class="h-6 w-px bg-gray-900/10 lg:hidden" aria-hidden="true"/>

        <div class="w-full flex justify-end flex-1 gap-x-4 self-stretch  lg:gap-x-6">

            <div class="flex items-center  gap-x-4 lg:gap-x-6">


                <!-- Profile dropdown -->
                <Menu as="div" class="relative">
                    <MenuButton class="-m-1.5 flex items-center justify-end p-1.5" @click="openMenu = !openMenu">
                        <span class="sr-only">Open user menu</span>
                        <span class="hidden lg:flex lg:items-center">
                  <span class="ml-4 text-sm font-semibold leading-6 text-gray-900" aria-hidden="true">{{
                          user.name
                      }}</span>
                  <ChevronDownIcon class="ml-2 h-5 w-5 text-gray-400" aria-hidden="true"/>
                </span>
                    </MenuButton>
                    <transition enter-active-class="transition ease-out duration-100"
                                enter-from-class="transform opacity-0 scale-95"
                                enter-to-class="transform opacity-100 scale-100"
                                leave-active-class="transition ease-in duration-75"
                                leave-from-class="transform opacity-100 scale-100"
                                leave-to-class="transform opacity-0 scale-95">
                        <ul v-if="openMenu"
                            class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none">
                            <li>
                                <Link :href="route('profile.show')"
                                      :class="[route().current('profile') ? 'bg-gray-50' : '', 'block px-3 py-1 text-sm leading-6 text-gray-900']">
                                    Профиль
                                </Link>
                                <a @click.prevent="logout" class="cursor-pointer"
                                   :class="[route().current('logout') ? 'bg-gray-50' : '', 'block px-3 py-1 text-sm leading-6 text-gray-900']">Вихід</a>
                            </li>
                        </ul>
                    </transition>
                </Menu>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
