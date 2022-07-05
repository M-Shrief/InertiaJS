<script setup>

const props = defineProps({
    navItem: Object,
});
</script>
<template>
    <li>
        <Link :href="route('dashboard')" class="nav-item" :class="{'bold' : active}">{{navItem.text}}</Link>
    </li>
</template>

<style lang="scss" scoped>

</style>
