<template>
<section class="relative">

<div class="w-full px-4">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded 
  bg-sky-900 text-white">
    <div class="rounded-t mb-0 px-4 py-3 border-0 ">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
          <h3 class="font-semibold text-lg text-white">Bitácora de Visitas</h3>
        </div>
      </div>
    </div>
    <div class="block w-full overflow-x-auto ">
      <table class="items-center w-full bg-transparent border-collapse">
        <thead>
          <tr>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Nombre</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Tipo</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Notas</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Marca/modelo Vehiculo</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Placas</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Status</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Fecha </th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Hr llegada </th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700"></th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="guest in guests.data" :key="guest.id">
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
              <span class="ml-3 font-bold text-white text-lg"> {{ guest.name }} </span></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ guest.guest_type.name }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ guest.notes }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ guest.brand_car }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ guest.plate_car }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-circle mr-2" :class="guest.status['color']"></i>{{ guest.status['text'] }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div>
                <span>{{guest.created_at}}</span>
              </div>
            </td>
            <td class="border-t-0  align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div class="flex items-center justify-center">
                <span class="">{{ guest.arrived_time }}</span>
              </div>
            </td>
            <td class="flex border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
              <Link v-if="guest.status['text'] == 'Pendiente'" :href="route('guest.edit', guest)" class="text-blueGray-500 block py-1 px-3 space-x-3">
                <i title="Editar" class="fa-solid fa-pencil hover:text-cyan-600"></i>
              </Link>
              <button v-if="guest.status['text'] == 'Pendiente'" @click="delete_confirm = true; item_to_delete = guest;"  class="text-blueGray-500 block py-1 px-3 space-x-3">
                <i title="Borrar" class="fa fa-trash hover:text-red-600"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>

    <ConfirmationModal :show="delete_confirm" @close="delete_confirm = false">
    <template #title>
      <div>¿Deseas continuar?</div>
    </template>
    <template #content>
      <div>
        Estás a punto de eliminar el registro de visita. Una vez realizado ya no se podrá
        recuperar.
      </div>
    </template>
    <template #footer>
      <div class="flex justify-end">
        <button @click="this.delete()" class="px-2 py-1 font-semibold border rounded border-red-500 text-red-500 hover:bg-red-500 hover:text-white transition duration-200 mr-2">Eliminar</button>
        <button class="px-2 py-1 font-semibold border rounded border-gray-500 text-gray-500 hover:bg-gray-100 transition duration-200" @click="delete_confirm = false">
          Cancelar
        </button>
      </div>
    </template>
  </ConfirmationModal>
</template>

<script>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import ConfirmationModal from "@/Components/ConfirmationModal.vue";

export default {
  data(){
    return{
      delete_confirm: false,
      item_to_delete: {},
    }
  },
  components: {
    Link,
    ConfirmationModal,
  },
  props:{
    guests: Object,
  },
  methods:{
    delete() {
      this.$inertia.delete(
        this.route("guest.destroy", this.item_to_delete)
      );
      this.delete_confirm = false;
    },
  },
}
</script>