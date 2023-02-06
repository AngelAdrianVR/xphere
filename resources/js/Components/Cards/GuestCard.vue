<template>
  <div
    class="rounded-lg cursor-pointer border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out bg-white"
  >
      <div class="flex items-center my-2">
        <i class="fa-solid fa-user text-lg mr-2 text-gray-800"></i>
        <div class="flex flex-col">
          <span>{{ guest.name }}</span>
          <small class="text-gray-500 -mt-1">{{ guest.created_at }}</small>
        </div>
      </div>
    <div class="bg-gray-200 border-2 shadow-md rounded-md px-2 py-1">
        <main>
          <div>
            <h1 class="font-bold text-lg text-gray-700">{{ 'Detalles' }}</h1>
            <p class="text-sm text-gray-700 max-h-20 overflow-hidden">
              <strong> notas: </strong> {{ guest.notes }}
            </p>
            <p v-if="guest.brand_car" class="text-sm text-gray-700 max-h-20 overflow-hidden">
             <strong> Coche: </strong> {{ guest.brand_car }}
            </p>
            <p v-if="guest.plate_car" class="text-sm text-gray-700 max-h-20 overflow-hidden">
             <strong> Placa: </strong> {{ guest.plate_car }}
            </p>
          </div>
        </main>
    </div>

  </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
  props: {
    guest: Object,
  },
  components: {
    Link,
  },
};
</script>
