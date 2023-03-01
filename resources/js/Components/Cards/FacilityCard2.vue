<template>
     <!-- component -->
    <div class="flex items-center justify-center bg-transparent">
      <div
        class="flex flex-col shadow-lg shadow-gray-400/100 bg-white rounded-lg"
        style="width: 370px; height: 550px rounded: 10px"
      >
        <div class="flex flex-col">
          <img
            src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80"
            alt=""
          />
          <div class="p-5 -mt-8 rounded-2xl bg-white">
            <div class="flex flex-row items-center space-x-1">
              <p class="font-bold text-xl">{{ facility.name }}</p>
            </div>
            <div class="flex flex-row space-x-1 text-blue-600 my-2">
              <p class="font-semibold text-xs">{{ facility.hours_available }} Horas disponibles por reservación</p>
            </div>
            <div class="flex flex-row space-x-1">
              <div class="bg-gray-100 px-3 py-1 rounded-lg flex items-center space-x-2 flex-row">
                <i class="fa-solid fa-users"></i>
                <p class="text-xxsm">Capacidad: {{facility.capacity}}</p>
              </div>
              <div v-if="facility.is_active" class="bg-green-100 px-3 py-1 rounded-lg flex space-x-2 flex-row">
                <p class="text-xxsm text-green-600">Activo</p>
              </div>
              <div v-else class="bg-red-100 px-3 py-1 rounded-lg flex space-x-2 flex-row">
                <p  class="text-xxsm text-red-600">Inactivo</p>
            </div>
          </div>
            <div
              class="text-grey-500 flex flex-row space-x-1 py-4 border-t border-b border-gray-200 my-4"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
              <p class="text-xs">{{ facility.location }}</p>
            </div>
            <p class="mt-4">{{ facility.description }}</p>
            <div class="bg-gray-100 p-4 mt-2">
              <div class="flex flex-row justify-end">
                <div class="text-right">
                  <p class="text-2xl font-bold">${{ facility.cost }}</p>
                  <p class="text-sm text-green-500">Aportación por reservación.</p>
                  <p class="text-sm text-gray-500">La cancelación debe de hacerse minimo 3 días antes de la fecha reservada</p>
                </div>
              </div>
              <div class="flex justify-center mt-2">
              <Link :href="route('reservation-facilities.show', facility.id)">
                <PrimaryButton :disabled="!facility.is_active" class="w-full flex justify-center"> Reservar </PrimaryButton>
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";

export default {

  props: {
    facility: Object,
  },
  components: {
    Link,
    PrimaryButton,
  },
  methods:{

  }
};
</script>