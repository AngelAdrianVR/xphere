<template>
    <div>
        <!-- component -->

<section class="relative bg-blueGray-50">
<div class="w-full px-4">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded 
  bg-cyan-900 text-white">
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
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700">Nombre</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700">Tipo</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700">Notas</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700">Placas</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700">Status</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700">Fecha </th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700">Hr llegada </th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-cyan-800 text-cyan-300 border-cyan-700"></th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="(guest, index) in guests.data" :key="guest.id">
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
              <span class="ml-3 font-bold text-white text-lg"> {{ guest.name }} </span></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ guest.guest_type.name }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ guest.notes }}</td>
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
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
              <a href="#" class="text-blueGray-500 block py-1 px-3" @click="openDropdown('menu-'+index)">
                <i class="fas fa-ellipsis-v"></i></a>
              <div class=" hidden bg-gay-300 text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" :id="'menu-'+index">
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700 hover:bg-cyan-600">Editar</a>
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700 hover:bg-cyan-600">Borrar</a>
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
export default {
  data(){
    return{

    }
  },
  props:{
    guests: Object,
  },
  methods:{
    openDropdown(element_id) {
      document.getElementById(element_id).classList.remove('hidden');
    }
  },
}
</script>