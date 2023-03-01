<template>
  <AppLayout title="Reservación de Areas">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Reservación de Áreas
      </h2>
    </template>

    <div class="py-5">
      <div class="max-w-7xl mx-auto lg:px-8">
        <div class="lg:grid grid-cols-3 gap-4 mb-6">
          <h1 class="col-span-full text-cyan-700 font-bold text-2xl mb-2 ml-4">Mis reservaciones</h1>
          <div v-for="(reservation) in my_next_reservations" :key="reservation.id" class="bg-gray-50 border hover:border-cyan-600 border-transparent rounded-md shadow-md cursor-pointer px-2 py-1 mb-4 lg:mb-0">
            {{ reservation }}
          </div>
        </div>
        <div class="lg:grid grid-cols-3 gap-4">
          <h1 class="col-span-full text-cyan-700 font-bold text-2xl mb-2 ml-4">Areas para reservar</h1>
         <FacilityCard2 v-for="facility in facilities.data" :key="facility.id" :facility="facility" class="mb-6" />
        </div>
      </div>
    </div>
  </AppLayout>
</template>
<script>

import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import FacilityCard2 from "@/Components/Cards/FacilityCard2.vue";

export default {
  data() {
    
    return {  };
  },

  components: {
    AppLayout,
    Link,
    FacilityCard2,
  },

  props: {
    facilities: Object,
    my_next_reservations: Array,
  },

  methods: {
    
  },
};
</script>
