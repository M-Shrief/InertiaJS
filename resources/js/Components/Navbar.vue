<!-- status: 
logic: basically Finished
styles: Not-Finished
data: Not-decided yet -->

<script setup>
import { ref } from "vue";
import NavbarRaw from "./NavbarRaw.vue";
const navList1 = ref([
    { id: 0, text: "شعر" },
    { id: 1, text: "نثر" },
    { id: 2, text: "كلمات" },
]);
const navList2 = ref([
    { id: 0, text: "item" },
    { id: 1, text: "item" },
    { id: 2, text: "item" },
    { id: 3, text: "item" },
    { id: 4, text: "item" },
]);
</script>
<template>
    <header dir="rtl">
        <nav>
            <Link :href="route('dashboard')" id="logo">المتنبي</NavLink>
            <NavbarRaw :navList="navList1" />
            <NavbarRaw :navList="navList2" />
        </nav>
    </header>
</template>
