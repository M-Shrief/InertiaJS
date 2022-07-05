<!-- status: 
logic: basically Finished
styles: Not-Finished
data: Not-decided yet -->

<script setup>
import NavLink from './NavLink.vue';
// import { ref } from "vue";
// import NavbarRaw from "./NavbarRaw.vue";
// import NavLink from "./NavLink.vue";
// const navList1 = ref([
//     { id: 0, text: "شعر" },
//     { id: 1, text: "نثر" },
//     { id: 2, text: "كلمات" },
// ]);
// const navList2 = ref([
//     { id: 0, text: "item" },
//     { id: 1, text: "item" },
//     { id: 2, text: "item" },
//     { id: 3, text: "item" },
//     { id: 4, text: "item" },
// ]);
</script>
<template>
    <!-- <header dir="rtl">
        <nav>
            <NavLink :href="route('dashboard')" id="logo">المتنبي</NavLink>
            <NavbarRaw :navList="navList1" />
            <NavbarRaw :navList="navList2" />
        </nav>
    </header> -->
    <nav>
        <ul>
            <li>
                <NavLink href="/" :active=" $page.component == 'Home' ">Home</NavLink>
            </li>
            <li>
                <NavLink href="/users" :active=" $page.component == 'Users' ">Users</NavLink>
            </li>
            <li>
                <NavLink href="/settings" :active=" $page.component == 'Settings' ">Settings</NavLink>
            </li>
            <li>
                <NavLink href="/logout" method="post">Logout</NavLink>
            </li>
        </ul>
    </nav>
</template>
