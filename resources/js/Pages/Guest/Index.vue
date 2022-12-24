<template>
    <AppLayout title="Visitas">
         <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
                Visitas
            </h2>
        </template>
        
        <div class="flex justify-end">
            <Link :href="route('guest.create')">
                <SecondaryButton class="mr-7 mt-4">Programar Visita</SecondaryButton>
            </Link>
        </div>


            <GuestsTable />
    </AppLayout>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import GuestsTable from '@/Components/GuestsTable.vue';
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
        GuestsTable,
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