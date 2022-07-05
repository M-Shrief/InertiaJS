<script setup>
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['href', 'active']);


</script>

<template>
    <Link :href="href" :class="{'bold' : active}">

<slot />
    </Link>
</template>

<style scoped lang="scss">
.bold {
    font-weight: bold;
}
</style>