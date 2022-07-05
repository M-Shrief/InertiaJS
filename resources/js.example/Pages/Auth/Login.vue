<template>
  <main>
    <section >
      <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">

    <div class="mb-6">
      <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email"> Email </label>

      <input
        v-model="form.email"
        class="border border-gray-400 p-2 w-full"
        type="email"
        name="email"
        id="email"
        required

      />
      <div v-if="form.errors.email" v-text="form.errors.email" class="red"></div>

    </div>

    <div class="mb-6">
      <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password"> Password </label>

      <input
        v-model="form.password"
        class="border border-gray-400 p-2 w-full"
        type="password"
        name="password"
        id="password"
      />
      <div v-if="form.errors.password" v-text="form.errors.password" class="red"></div>
    </div>

    <div class="mb-6">
      <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" :disabled="form.processing">Login</button>
    </div>
  </form>

    </section>
  </main>
</template>

<script>
export default {
  layout: null
}
</script>
<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
let form = useForm({
  email:'',
  password: ''
})

let submit = () => {
  form.post('/login');
}

</script>