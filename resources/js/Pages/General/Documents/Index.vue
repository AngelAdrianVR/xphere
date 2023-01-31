<template>
  <AppLayout title="Documentos Generales">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Documentos del Fraccionamiento
      </h2>
    </template>

  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

export default {
  data() {
    
    return {  };
  },

  components: {
    AppLayout,
    Link,
  },

  props: {
  },

  methods: {
    
  },
};
</script>
