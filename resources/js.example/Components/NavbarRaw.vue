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
  ul {
    margin: 1.2rem 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-decoration: none;
    list-style: none;
    overflow: visible;
  }
</style>
