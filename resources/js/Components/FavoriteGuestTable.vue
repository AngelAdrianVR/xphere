<template>
    <div>
        <!-- component -->

<section class="relative">

<div class="w-full px-4">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded 
  bg-sky-900 text-white">
    <div class="rounded-t mb-0 px-4 py-3 border-0 ">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
          <h3 class="font-semibold text-lg text-white">Visitas Frecuentes</h3>
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
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Marca/modelo Vehículo</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Placas</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700"></th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="favorite_guest in favorite_guests.data" :key="favorite_guest.id">
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
              <span class="ml-3 font-bold text-white text-lg"> {{ favorite_guest.name }} </span></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ favorite_guest.guest_type.name }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ favorite_guest.notes }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ favorite_guest.brand_car }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ favorite_guest.plate_car }}</td>
            <td class=" border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
              <div class="flex items-center">
                <Link :href="route('guest.create')" class="text-blueGray-500 block py-1 px-3">
                    <PrimaryButton class="">Programar</PrimaryButton></Link>
                    <i title="Editar" class="fa-solid fa-pencil text-blue-400 mr-3 hover:text-blue-300"></i><i title="Eliminar" class="fa fa-trash text-red-400 hover:text-red-300"></i>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
    <!-- <footer class="relative pt-8 pb-6 mt-8">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
          <div class="w-full md:w-6/12 px-4 mx-auto text-center">
            creado por xphere.com
          </div>
        </div>
      </div>
    </footer> -->
</section>
    </div>
</template>

<script>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";

export default {
  data(){
    return{

    }
  },
  components:{
    Link,
    PrimaryButton,
  },
  props:{
    favorite_guests: Object,
  },
  methods:{
    
  },
}
</script>