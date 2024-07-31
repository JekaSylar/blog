<script setup>
import {ref} from 'vue';
import {Link} from "@inertiajs/vue3";

const openMenu = ref(false);

console.log(route().current(), '--', openMenu.value)
</script>

<template>
    <div class="flex h-16 shrink-0 items-center justify-center font-bold text-white text-center">
        Адмінка
    </div>
    <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
            <li>
                <ul role="list" class="-mx-2 space-y-1">
                    <li>
                        <Link :href="route('home')" class="block rounded-md  py-2 pl-10 pr-2 text-sm font-semibold leading-6 text-white">Головна</Link>
                    </li>
                    <li>
                        <!-- Current: "bg-gray-50", Default: "hover:bg-gray-50" -->
                        <Link :href="route('dashboard')" class="block rounded-md bg-gray-50 py-2 pl-10 pr-2 text-sm font-semibold leading-6 text-black">Адмінка</Link>
                    </li>
                    <li>
                        <div>
                            <button
                                @click.prevent="openMenu = !openMenu"
                                type="button" class="flex w-full items-center gap-x-3 rounded-md p-2 text-left text-sm font-semibold leading-6 text-white hover:bg-gray-50 hover:text-black" aria-controls="sub-menu-1" aria-expanded="false">
                                <!-- Expanded: "rotate-90 text-gray-500", Collapsed: "text-gray-400" -->
                                <svg class="h-5 w-5 shrink-0 text-gray-400" :class="{'rotate-90': openMenu}" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                                Блог
                            </button>
                            <!-- Expandable link section, show/hide based on state. -->
                            <ul class="mt-1 px-2" id="sub-menu-1" v-if="openMenu">
                                <li>
                                    <a href="#" class="block rounded-md py-2 pl-9 pr-2 text-sm leading-6 text-gray-700 hover:bg-gray-50">Записи</a>
                                </li>
                                <li>
                                    <Link :href="route('categories.index')"
                                          :class="[
                                              route().current('categories.index')  ?
                                              'bg-gray-50  text-black' :
                                              'text-white hover:bg-gray-50 hover:text-black',
                                              'block rounded-md my-2 py-2 pr-2 leading-6 text-sm pl-10 font-bold'
                                              ]"
                                    >

                                        Категорії
                                    </Link>
                                </li>
                                <li>
                                    <a href="#" class="block rounded-md py-2 pl-9 pr-2 text-sm leading-6 text-gray-700 hover:bg-gray-50">Customer Success</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </li>

        </ul>
    </nav>
</template>

<style scoped>

</style>
