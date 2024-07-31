<script setup>
import {Head} from "@inertiajs/vue3";
import CreateCategoryForm from "@/Pages/Admin/Category/Partials/CreateCategoryForm.vue";
import ListCategories from "@/Pages/Admin/Category/Partials/ListCategories.vue";
import SearchCategory from "@/Pages/Admin/Category/Partials/SearchCategory.vue";

const props = defineProps({
    'categories': {
        required: true,
        type: Object
    }
});


</script>

<template>
    <Head title="Категорії"/>

    <div class="px-4 sm:px-6 lg:px-8">
        <div class="">
            <div class="sm:flex-auto">
                <h1 class="text-2xl font-bold leading-6 text-gray-900">Категорії</h1>
            </div>
            <div class="flex flex-col mt-8 md:flex-row">

                <div class="w-full md:mr-16 md:w-2/5">
                    <CreateCategoryForm/>
                </div>
                <div class="w-full  md:ml-16 md:w-3/5 ">
                    <SearchCategory />
                    <ListCategories :categories="categories"/>
                </div>
            </div>
        </div>
    </div>


</template>

<style scoped>

</style>
