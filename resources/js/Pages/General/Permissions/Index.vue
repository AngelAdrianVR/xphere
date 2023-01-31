<template>
  <AppLayout title="Permisos">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Permisos
      </h2>
    </template>

  <div class="flex justify-start ml-2">
      <Link :href="route('general.index')" class="flex items-center mt-2 text-slate-700">
        <i class="fas fa-long-arrow-alt-left text-lg hover:bg-gray-200 rounded-full w-7 h-7 pl-1"></i>
        <span class="ml-1 cursor-default">Atrás</span>
      </Link>
    </div>  

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
