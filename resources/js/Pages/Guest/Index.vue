<template>
    <AppLayout title="Visitas">
         <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
                Visitas
            </h2>
        </template>
        
        <div class="flex lg:justify-end xs:justify-center">
            <Link :href="route('guest.create')">
                <SecondaryButton class="mr-7 mt-2">Programar Visita</SecondaryButton>
            </Link>

        </div>
            <SearchInput 
            :filters="filters"
            filterURL="/guest" />
            <GuestsTable :guests="guests"/>
        <div class="flex justify-end">
            <Pagination :pagination="guests"/>
        </div>
    </AppLayout>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import GuestsTable from '@/Components/GuestsTable.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import Pagination from '@/Components/Pagination.vue';
import SearchInput from '@/Components/SearchInput.vue';
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
        Pagination,
        SearchInput,
    },

    props:{
        guests: Object,
        filters: Object,
        filterURL: String,
    },

    methods:{

    },
}
</script>