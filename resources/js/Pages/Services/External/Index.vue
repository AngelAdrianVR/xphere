<template>
  <AppLayout title="Servicios Externos">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">SERVICIOS</h2>
    </template>

    <div class="my-4 border-b border-gray-300">
      <Tabs :tabs="tabs" />
    </div>

    <div class="py-5">
      <div class="max-w-7xl mx-auto lg:px-8">
        <div class="lg:grid grid-cols-3 gap-4">
          <ExternalServiceCard v-for="external_service in external_services" :key="external_service.id" :external_service="external_service"/>
        </div>
      </div>
    </div>

  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import ExternalServiceCard from "@/Components/Cards/ExternalServiceCard.vue";
import Tabs from "@/Components/Tabs.vue";

export default {
  data() {
    return {
      tabs: [
        {
          label: "Internos",
          url: "internal-services.index",
        },
        {
          label: "Externos",
          url: "external-services.index",
        },
      ],
    };
  },

  components: {
    AppLayout,
    Link,
    PrimaryButton,
    SecondaryButton,
    Tabs,
    ExternalServiceCard,
  },

  props: {
    external_services: Object,
  },

  methods: {},
};
</script>
