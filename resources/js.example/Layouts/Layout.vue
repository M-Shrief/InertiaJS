<template>

<header>
  <Navbar />
</header>
 <div>

 </div>
 <slot />
  <p>Welcome, {{$page.props.auth.username}}</p>
 
</template>

<script >
import { Head } from '@inertiajs/inertia-vue3';
import Navbar from '../Components/Navbar.vue';
  export default {
    computed: {
      username() {
        return this.$page.props.auth.user.user
      }
    },
    components: {
      Head,
      Navbar
  }
}
</script>