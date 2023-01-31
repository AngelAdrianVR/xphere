<template>
  <AppLayout title="Permisos">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Solicitar Permisos
      </h2>
    </template>

    <AlertInfo>
      <template #title>
        ATENCIÓN
      </template>
      <template #info>
        Los Permisos serán respondidos en un plazo de 3 días hábiles. En caso de no ser respondido,
        pasar a administración a dar seguimiento. Gracias!
      </template>
    </AlertInfo>
  

<div class="flex justify-end">
      <Link :href="route('resident-permissions.create')">
      <SecondaryButton class="mr-7 my-5">Solicitar Permiso</SecondaryButton>
      </Link>
    </div>

  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import AlertInfo from '@/Components/AlertInfo.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'

export default {
  data() {
    
    return {  };
  },

  components: {
    AppLayout,
    Link,
    AlertInfo,
    SecondaryButton,
  },

  props: {
  },

  methods: {
    
  },
};
</script>
