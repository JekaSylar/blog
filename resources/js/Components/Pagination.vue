<script setup>
import  {Link} from "@inertiajs/vue3";

const props = defineProps({
    links: {
        type: Array,
        required: true,
    },
})

const pagination = props.links.filter(link => link.url);



</script>

<template>

    <div class="flex items-center  bg-white px-4 py-3 sm:px-6" v-if="links.length > 0">

        <div class="flex sm:flex-1 sm:items-center justify-center">
            <div>
                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">


                        <Link
                            v-for="link in pagination" :key="link.url"
                            :href="link.url"
                            v-html="link.label"
                            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
                            :class="{ 'z-10 bg-gray-800 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:text-gray-900' : link.active}"
                        >
                        </Link>

                </nav>
            </div>
        </div>
    </div>

</template>

<style scoped>

</style>
