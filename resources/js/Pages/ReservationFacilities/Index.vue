<template>
  <AppLayout title="Reservación de Areas">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Reservación de Áreas
      </h2>
    </template>

    <div class="py-5">
      <div class="max-w-7xl mx-auto lg:px-8">
        <div class="lg:grid grid-cols-3 gap-4">
         <FacilityCard2 v-for="facility in facilities.data" :key="facility.id" :facility="facility" />
        </div>
      </div>
    </div>
  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import FacilityCard from "@/Components/Cards/FacilityCard.vue";
import FacilityCard2 from "@/Components/Cards/FacilityCard2.vue";

export default {
  data() {
    
    return {  };
  },

  components: {
    AppLayout,
    Link,
    FacilityCard,
    FacilityCard2,
  },

  props: {
    facilities: Object,
  },

  methods: {
    
  },
};
</script>
