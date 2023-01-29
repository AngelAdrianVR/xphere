<template>
  <AppLayout title="Internos y Generales">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">GENERALES</h2>
    </template>

   

    <div class="py-5">
      <div class="max-w-7xl mx-auto lg:px-8">
        <div class="lg:grid grid-cols-3 gap-10">

            <div class="flex flex-col text-center mt-10 rounded-lg border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out">
                <i class="fa-solid fa-folder text-5xl text-gray-400"></i>
                <p class="text-gray-700">Documentos Generales</p>
            </div>
            <div class="flex flex-col text-center mt-10 rounded-lg border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out">
                <i class="fa-solid fa-headset text-5xl text-gray-400"></i>
                <p class="text-gray-700">Chat con Caseta</p>
            </div>
            <div class="flex flex-col text-center mt-10 rounded-lg border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out">
                <i class="fa-solid fa-circle-exclamation text-5xl text-gray-400"></i>
                <p class="text-gray-700">Reportar Incidente</p>
            </div>
            <div class="flex flex-col text-center mt-10 rounded-lg border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out">
                <i class="fa-solid fa-clipboard-question text-5xl text-gray-400"></i>
                <p class="text-gray-700">Encuentas</p>
            </div>
            <div class="flex flex-col text-center mt-10 rounded-lg border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out">
                <i class="fa-solid fa-check-to-slot text-5xl text-gray-400"></i>
                <p class="text-gray-700">Permisos</p>
            </div>
            <div class="flex flex-col text-center mt-10 rounded-lg border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out">
                <i class="fa-solid fa-circle-info text-5xl text-gray-400"></i>
                <p class="text-gray-700">Quejas y Sugerencias</p>
            </div>

        </div>
      </div>
    </div>
  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

export default {
  data() {
    return {};
  },

  components: {
    AppLayout,
    Link,
  },

  props: {},

  methods: {},
};
</script>
