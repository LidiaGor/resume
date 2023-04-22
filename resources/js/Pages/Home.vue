<template>
    <AppLayout>
        <div class="bg-purple-200 h-screen py-10">
            <div class="w-2/3 h-5/6 m-auto shadow-lg bg-white px-10 py-5">
            <p class="text-7xl text-center font-bold py-10">Обо мне</p>
            <div class="columns-2">
                <div>
                    <div class="table mx-auto">
                        <div class="table-row">
                            <div class="table-cell text-left font-bold">ФИО</div>
                            <div class="table-cell text-left px-10">Горючкин Иван Анатольевич</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-left font-bold">Дата рождения</div>
                            <div class="table-cell text-left px-10">12.03.1985</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-left font-bold">Адрес</div>
                            <div class="table-cell text-left px-10">РФ, УР, г. Ижевск</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-left font-bold">e-mail</div>
                            <div class="table-cell text-left px-10">tweky@mail.ru</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-left font-bold">Тел.</div>
                            <div class="table-cell text-left px-10">8-111-111-11-11</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="table mx-auto my-10">
                        <div class="table-row">
                            <div class="table-cell text-left font-bold">Дополнительная <br>информация</div>
                            <div class="table-cell text-left px-10">Легко обучаем.<br>
                                Способности к самообучению.<br>
                                Исполнительность, ответственность при исполнении поручений.<br>
                                Коммуникабельность, вежливость, тактичность.<br></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'

const
    props = defineProps({})
</script>
