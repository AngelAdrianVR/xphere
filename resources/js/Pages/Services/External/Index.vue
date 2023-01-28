<template>
  <AppLayout title="Servicios Externos">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">SERVICIOS</h2>
    </template>

    <div class="my-4 border-b border-gray-300">
      <Tabs :tabs="tabs" />
    </div>

  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
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
  },

  props: {
  },

  methods: {},
};
</script>
