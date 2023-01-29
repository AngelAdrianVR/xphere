<template>
  <AppLayout title="Servicios Internos">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">SERVICIOS</h2>
    </template>

    <div class="my-4 border-b border-gray-300">
      <Tabs :tabs="tabs" />
    </div>

  <div class="py-5">
      <div class="max-w-7xl mx-auto lg:px-8">
        <div class="lg:grid grid-cols-3 gap-4">
          <InternalServiceCard v-for="internal_service in internal_services" :key="internal_service.id" :internal_service="internal_service"/>
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
import InternalServiceCard from "@/Components/Cards/InternalServiceCard.vue";
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
    InternalServiceCard,
  },

  props: {
    internal_services: Object,
  },

  methods: {},
};
</script>
