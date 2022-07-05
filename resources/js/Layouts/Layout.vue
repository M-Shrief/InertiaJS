<template>

<header>
    <meta
      type="description"
      content="Information about my app"
      head-key="description"
    >
  <Navbar />
</header>
 <slot />
 
</template>

<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Navbar from '../Components/Navbar.vue';
  
</script>

<style lang="scss" scoped>
    
body {
  background-color: #e0f2e9 ;
}
</style>