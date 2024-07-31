<script setup>
const model = defineModel()

defineProps({
    rows: {
        type: Number,
        default: 4
    }
});


</script>

<template>
    <textarea
        ref="input"
        :rows="rows"
        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
        v-model="model"
    ></textarea>

</template>

<style scoped>

</style>
