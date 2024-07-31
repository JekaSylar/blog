<script setup>
import Pagination from "@/Components/Pagination.vue";
import  {TrashIcon, PencilSquareIcon}  from '@heroicons/vue/24/outline';
import {router, Link} from "@inertiajs/vue3";
import useToast from '@/composables/toast';

const props = defineProps({
    categories: {
        required: true,
        type: Object,
    }
});

const toast = useToast();

const removeCategory  = (category) => {
    router.delete(route('categories.destroy', category), {
        onSuccess: () => {
            toast('Категорію видаленно');
        },
    });
}

console.log(props.categories)
</script>

<template>

        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">

                <table class="min-w-full divide-y divide-gray-300 mt-6" v-if="categories.data.length > 0">
                    <thead>
                    <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Назва</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Частина посилання</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Дії</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Кількість</th>


                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr v-for="category in categories.data" :key="category.id">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ category.title }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ category.slug }}</td>
                        <td class="whitespace-nowrap py-4  text-left text-sm font-medium ">
                            <span class="flex">
                                <Link :href="route('categories.edit', category)" class="text-indigo-600 hover:text-indigo-900 mr-4">
                                <PencilSquareIcon class="w-6 h-6 text-gray-800 font-bold" />
                            </Link>
                            <span class="cursor-pointer" @click="removeCategory(category)">
                                <TrashIcon class="w-6 h-6 text-red-600 font-bold" />
                            </span>
                            </span>

                        </td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">0</td>
                    </tr>

                    </tbody>
                </table>

            </div>
            <div class="mt-8">
                <Pagination v-if="categories.data.length > 0" :links="categories.meta.links" />
            </div>
        </div>

</template>

<style scoped>

</style>
