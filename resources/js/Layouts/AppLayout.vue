<template>

    <header class="py-3 px-5 bg-blue-100">
        <div class=" sm:flex max-w-screen-2xl mx-auto">
            <div class="mr-auto my-auto"><strong class="font-bold text-2xl">Иван Горючкин</strong> / Системный администратор</div>
            <Link class="mx-2 my-auto"
                :href="route('home.index')"
            >
                Главная
            </Link>
            <Link class="mx-2 my-auto"
                :href="route('home.index')"
            >
                Обо мне
            </Link>
            <Link class="mx-2 my-auto"
                :href="route('home.index')"
            >
                Навыки и умения
            </Link>
            <Link class="mx-2 my-auto"
                :href="route('home.index')"
            >
                Образование
            </Link>
            <Link class="mx-2 my-auto"
                :href="route('home.index')"
            >
                Опыт работы
            </Link>
            <Link class="mx-2 my-auto"
                :href="route('home.index')"
            >
                Контакты
            </Link>
        </div>
    </header>

    <main>
        <div class="max-w-screen-2xl mx-auto">
            <slot />
        </div>
    </main>
    <footer class="mt-auto py-3 px-5 bg-gray-300 border-t border-gray-800">
        <div class=" sm:flex max-w-screen-2xl mx-auto">
        <span class="mr-auto">&#169 2022 Иван Горючкин</span>
     <Link class="mx-2"
                :href="route('home.index')"
    >
    Позвонить
    </Link>
    <Link class="mx-2"
        :href="route('home.index')"
    >
    Написать
    </Link>
        <Link class="mx-2"
            :href="route('home.index')"
        >
            Скачать резюме
        </Link>
        </div>
    </footer>

</template>

<script setup>
import NavLink from '@/Components/NavLink.vue';
import {Link} from "@inertiajs/inertia-vue3";

</script>
