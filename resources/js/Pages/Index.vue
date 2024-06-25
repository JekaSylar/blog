<script setup>
import {Link} from "@inertiajs/vue3";

//console.log(route().current());
</script>

<template>
    <div class="bg-green-500">


<h1>Index</h1>
    <hr>
    <Link :href="route('index')">Home</Link>
    <Link :href="route('test')">Test</Link>
    </div>
</template>

<style scoped>

</style>
