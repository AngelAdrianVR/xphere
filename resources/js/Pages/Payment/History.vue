<template>
  <AppLayout title="Historial de pagos">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">PAGOS</h2>
    </template>

    <div class="my-4 border-b border-gray-300">
      <Tabs :tabs="tabs" />
    </div>

    <div>
      <PaymentTable :payments="payments" />
    </div>
  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import PaymentTable from "@/Components/PaymentTable.vue";
import Tabs from "@/Components/Tabs.vue";

export default {
  data() {
    return {
      tabs: [
        {
          label: "Pendientes",
          url: "payments.index",
        },
        {
          label: "Historial",
          url: "payments.history",
        },
      ],
    };
  },

  components: {
    AppLayout,
    Link,
    PrimaryButton,
    SecondaryButton,
    PaymentTable,
    Tabs,
  },

  props: {
    payments: Object,
  },

  methods: {},
};
</script>
