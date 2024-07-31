<script setup>
import useToast from '@/composables/toast';
import {useForm, router, Head} from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import TextTextarea from "@/Components/TextTextarea.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";

const props = defineProps({
   category: {
       type: Object,
       required: true
   }
});

const toast = useToast();

const form = useForm({
    title: props.category.data.title,
    slug: props.category.data.slug,
    description: props.category.data.description,
    keywords: props.category.data.keywords
});

const handlerBack = () => {
    router.get(route('categories.index'));
}
const  submit = () => {
    form.put(route('categories.update', props.category.data.id), {
        onSuccess: () => {
            form.reset();
            toast('Категорію змінено');
        },
    })
}
</script>

<template>
    <Head title="Змінити категорію" />
    <div>
        <h2 class="font-medium mb-3">Додати нову категорію</h2>
        <form class="flex flex-col gap-4" @submit.prevent="submit">
            <div>
                <InputLabel value="Назва" />
                <div class="mt-2">
                    <TextInput class="w-full"  v-model="form.title" :class="{ 'border-red-600': form.errors.title }" />
                </div>
                <InputError v-if="form.errors.title" :message="form.errors.title" />
            </div>
            <div>
                <InputLabel value="Частина посилання" />
                <div class="mt-2">
                    <TextInput class="w-full" v-model="form.slug" :class="{ 'border-red-600': form.errors.slug }" />
                </div>
                <InputError v-if="form.errors.slug" :message="form.errors.slug" />
            </div>
            <div>
                <InputLabel value="Опис" />
                <div class="mt-2">
                    <TextTextarea class="w-full" v-model="form.description" :class="{ 'border-red-600': form.errors.description }" />
                </div>
                <InputError v-if="form.errors.description" :message="form.errors.description" />
            </div>
            <div>
                <InputLabel value="Ключові слова" />
                <div class="mt-2">
                    <TextInput class="w-full" v-model="form.keywords" :class="{ 'border-red-600': form.errors.keywords }" />
                </div>
                <InputError v-if="form.errors.keywords" :message="form.errors.keywords" />
            </div>
            <div class="flex justify-between">
                <SecondaryButton type="button" @click="handlerBack" >Назад </SecondaryButton>
                <PrimaryButton :disabled="form.processing">
                    Змінити категорію
                </PrimaryButton>
            </div>
        </form>
    </div>
</template>

<style scoped>

</style>
