<template>
    <AppLayout title="Reservación de Areas">
         <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
                Reservación de Áreas
            </h2>
        </template>
        
        
    </AppLayout>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
export default {
    data(){
        return{

        }
    },

    components:{
        AppLayout,
        Link,
        PrimaryButton,
        SecondaryButton,
    },

    props:{

    },

    methods:{

    },
}
</script>