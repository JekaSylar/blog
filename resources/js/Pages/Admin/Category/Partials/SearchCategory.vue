<script setup>
import {useForm, router} from "@inertiajs/vue3";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import  {XMarkIcon}  from '@heroicons/vue/24/outline';


const params = route().params.search;

const form = useForm({
    search: params ? params : null
});

const handelSearch = () => {
   form.get(route('categories.index'));
}

const  handelResetSearch = () => {
    router.get(route('categories.index'));
}
</script>

<template>
<div class="mt-12 flex justify-center  items-center gap-4 md:mt-0 md:justify-end ">
    <div class="relative">
        <TextInput class="h-10 w-64" v-model="form.search"  />
        <XMarkIcon
            v-if="params"
            @click="handelResetSearch"
            class="cursor-pointer h-8 w-8 text-red-500 font-bold absolute right-0 top-1"   />
    </div>
    <PrimaryButton type="button" @click="handelSearch">Пошук</PrimaryButton>
</div>
</template>

<style scoped>

</style>
