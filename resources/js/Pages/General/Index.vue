<template>
  <AppLayout title="Internos y Generales">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">GENERALES</h2>
    </template>

    <div class="py-5">
      <div class="max-w-7xl mx-auto lg:px-8">
        <div class="lg:grid grid-cols-3 gap-10">
          <Link :href="route('general.documents')">
            <div
              class="flex flex-col text-center text-gray-500 hover:text-cyan-600 mt-10 rounded-lg border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out"
            >
              <i class="fa-solid fa-folder text-5xl"></i>
              <p class="my-2">Documentos Generales</p>
            </div>
          </Link>

          <Link :href="route('general.guard-house-chat')">
            <div
              class="flex flex-col text-center mt-10 text-gray-500 hover:text-cyan-600 rounded-lg border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out"
            >
              <i class="fa-solid fa-comments text-5xl"></i>
              <p class="my-2">Chat con Caseta</p>
            </div>
          </Link>

          <Link :href="route('general.report-incident')">
            <div
              class="flex flex-col text-center mt-10 text-gray-500 hover:text-cyan-600 rounded-lg border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out"
            >
              <i class="fa-solid fa-circle-exclamation text-5xl"></i>
              <p class="my-2">Reportar Incidente</p>
            </div>
          </Link>

          <Link :href="route('general.surveys')">
            <div
              class="flex flex-col text-center mt-10 text-gray-500 hover:text-cyan-600 rounded-lg border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out"
            >
              <i class="fa-solid fa-clipboard-question text-5xl"></i>
              <p class="my-2">Encuentas</p>
            </div>
          </Link>

          <Link :href="route('general.permissions')">
            <div
              class="flex flex-col text-center mt-10 text-gray-500 hover:text-cyan-600 rounded-lg border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out"
            >
              <i class="fa-solid fa-check-to-slot text-5xl"></i>
              <p class="my-2">Permisos</p>
            </div>
          </Link>

          <Link :href="route('general.suggestions')">
            <div
              class="flex flex-col text-center mt-10 text-gray-500 hover:text-cyan-600 rounded-lg border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out"
            >
              <i class="fa-solid fa-circle-info text-5xl"></i>
              <p class="my-2">Quejas y Sugerencias</p>
            </div>
          </Link>
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
