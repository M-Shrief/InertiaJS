<script setup>
import NavLink from "./NavLink.vue";
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    navItem: Object,
});
</script>
<template>
    <li>
        <NavLink :href="route('dashboard')" class="nav-item">{{
            navItem.text
        }}</NavLink>
    </li>
</template>

<style lang="scss" scoped>
.nav-item {
    color: rgba($color: #000, $alpha: 0.7);
    padding-right: 0.4rem;
    margin: 0.6rem;
    border-bottom: 2px solid #42b983;
}
</style>
