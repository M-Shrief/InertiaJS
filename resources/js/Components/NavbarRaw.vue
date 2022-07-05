<script setup>
  import NavbarItem from './NavbarItem.vue';
  const props = defineProps({
    navList: Array,
  });
</script>

<template>
  <ul>
    <NavbarItem v-for="navItem in navList" :navItem="navItem" :key="navItem" />
  </ul>
</template>

<style scoped>
 
</style>
