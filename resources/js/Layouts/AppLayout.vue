<template>

    <header class="py-3 bg-blue-100">
        <div class=" sm:flex max-w-screen-xl mx-auto">
            <NavLink
                :href="route('home.index')"
                :active="route().current('dashboard')"
            >
                Dashboard
            </NavLink>
            <Link
                :href="route('home.index')"
            >
                Dashboard
            </Link>
        </div>
    </header>

    <main class="">
        <div class="max-w-screen-xl mx-auto">
            <slot/>
        </div>
    </main>

    <footer class="mt-auto py-3 bg-gray-300 border-t border-gray-800">
        footer
    </footer>

</template>

<script setup>
import NavLink from '@/Components/NavLink.vue';
import {Link} from "@inertiajs/inertia-vue3";

</script>
