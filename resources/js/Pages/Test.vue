<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
<h1>Test</h1>
    <hr>
    <Link :href="route('index')">Home</Link>
    <Link :href="route('test')">Test</Link>
</template>

<style scoped>

</style>
