<template>
    <AppLayout title="Pagos">
         <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
                Pagos
            </h2>
        </template>

    <div>
        <PaymentTable :payments="payments" />
    </div>
        
        
    </AppLayout>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import PaymentTable from '@/Components/PaymentTable.vue';
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
        PaymentTable,
    },

    props:{
        payments: Object,
    },

    methods:{

    },
}
</script>