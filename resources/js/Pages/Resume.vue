<template>
    <AppLayout>
        <div>
            <div class="font-bold mx-3 my-5">Дата начала работы- Дата окончания работы</div>
            <div class="italic my-5 mx-3">city</div>
            <div class="font-bold my-5 mx-3">job_title</div>
            <div class="ml-80 mr-60 content-center mx-3 my-5">job_description</div>
        </div>
        <div
            v-for="item in props.resume"
        >
            <div class="font-bold mx-3 my-5">{{ moment( item.date_start , "YYYY-MM-DD HH:mm:ss").format('MMMM.YYYY') }}-{{ moment( item.date_end , "YYYY-MM-DD HH:mm:ss").format('MM.YYYY') }}</div>
            <div class="italic my-5 mx-3">{{ item.city }}</div>
            <div class="font-bold my-5 mx-3">{{ item.job_title }}</div>
            <div class="ml-80 mr-60 content-center mx-3 my-5" v-html="item.job_description"></div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import moment from 'moment';


moment.locale('ru');
const
    props = defineProps({
        resume: Object
    })
</script>

