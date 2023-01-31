<template>
  <div
    class="rounded-lg cursor-pointer border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out bg-white"
  >
      <div class="flex items-center my-2">
        <i class="fa-solid fa-house text-lg mr-2 text-gray-800"></i>
        <div class="flex flex-col">
          <span>{{ $page.props.user.name }}</span>
          <small class="text-gray-500 -mt-1">{{ resident_permission.created_at }}</small>
        </div>
      </div>
          <p class="text-gray-700 -mt-1"> <strong> Tipo de permiso: </strong>{{ resident_permission.permission_type.name }}</p>
    <div class="bg-gray-200 border-2 shadow-md rounded-md px-2 py-1">
        <main>
          <div>
            <h1 class="font-bold text-lg text-gray-700">{{ resident_permission.subject }}</h1>
            <p class="text-sm text-gray-700 max-h-20 overflow-hidden">
              {{ resident_permission.description }}
            </p>
          </div>
        </main>
    </div>
    <footer class="flex justify-between items-center">
      <div class="flex flex-col space-x-3 text-gray-600 mt-2">
            <p class="text-sm text-gray-700 max-h-20 overflow-hidden mt-2">
              <strong>Fecha solicitada: </strong> {{ resident_permission.date }}
            </p>
            <p :class="resident_permission.status['color']">{{ resident_permission.status['text'] }}</p>
            <small v-if="resident_permission.replied_at" class="text-gray-400 mt-1">Respondido el {{ resident_permission.replied_at }}</small>
      </div>
    </footer>
  </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
  props: {
    resident_permission: Object,
  },
  components: {
    Link,
  },
};
</script>
