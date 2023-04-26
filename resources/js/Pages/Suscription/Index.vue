<template>
  <AppLayout title="Suscripciones">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Suscripciones
      </h2>
    </template>

    <SuscriptionCard />

  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import SuscriptionCard from "@/Components/Cards/SuscriptionCard.vue";

export default {
  data() {
    
    return {  };
  },

  components: {
    AppLayout,
    Link,
    SuscriptionCard,

  },

  props: {

  },

  methods: {
    
  },
};
</script>
