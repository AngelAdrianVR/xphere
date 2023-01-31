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
      <SecondaryButton class="mr-7 my-1">Solicitar Permiso</SecondaryButton>
      </Link>
    </div>

    <div class="py-8">
      <div class="max-w-7xl mx-auto lg:px-8">
        <div class="lg:grid grid-cols-3 gap-4">
          <PermissionCard v-for="resident_permission in resident_permissions.data" :key="resident_permission.id" :resident_permission="resident_permission" />
        </div>
      </div>
    </div>

  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import AlertInfo from '@/Components/AlertInfo.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'
import PermissionCard from '@/Components/Cards/PermissionCard.vue'

export default {
  data() {
    
    return {  };
  },

  components: {
    AppLayout,
    Link,
    AlertInfo,
    SecondaryButton,
    PermissionCard,
  },

  props: {
    resident_permissions: Object,
  },

  methods: {
    
  },
};
</script>
