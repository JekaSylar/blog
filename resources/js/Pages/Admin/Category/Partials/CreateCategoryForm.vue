<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import TextTextarea from "@/Components/TextTextarea.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import useToast from '@/composables/toast';
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    title: null,
    slug: null,
    description: null,
    keywords: null
});

const toast = useToast();

const submit = () => {

    form.post(route('categories.store'), {
        onSuccess: () => {
            form.reset();
            toast('Категорію створено');
        },
    });

}
</script>

<template>
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
            <div class="flex justify-items-end">
                <PrimaryButton :disabled="form.processing">
                    Додати нову категорію
                </PrimaryButton>
            </div>
        </form>
    </div>
</template>

<style scoped>

</style>
