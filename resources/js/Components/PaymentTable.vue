<template>
    <div>
        <!-- component -->
<section class="relative pt-5 bg-blueGray-50">
<div class="w-full px-4">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded 
  bg-sky-900 text-white">
    <div class="rounded-t mb-0 px-4 py-3 border-0 ">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
          <h3 class="font-semibold text-lg text-white">Historial de pagos</h3>
        </div>
      </div>
    </div>
    <div class="block w-full overflow-x-auto ">
      <table class="items-center w-full bg-transparent border-collapse">
        <thead>
          <tr>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Concepto</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Descripción</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Emisión</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Expiración</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Monto</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Status</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700">Fecha de pagado</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-sky-800 text-sky-300 border-sky-700"></th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="(payment) in payments.data" :key="payment.id">
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
              <span class="ml-3 font-bold text-white text-lg"> {{ payment.concept }} </span></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ payment.description }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ payment.created_at }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ payment.expired_date }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">${{ payment.amount }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-circle mr-2" :class="payment.status['color']"></i>{{ payment.status['text'] }}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div>
                <span>{{payment.payed_at}}</span>
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
              <a href="#" class="text-blueGray-500 block py-1 px-3 space-x-3">
                <i class="fa-solid fa-pencil text-blue-300"></i><i class="fa fa-trash text-red-300"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
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
    payments: Object,
  },
  methods:{
   
  },
}
</script>