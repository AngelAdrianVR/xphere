<template>
  <AppLayout title="Reservación de Areas">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Reservación de Áreas
      </h2>
    </template>

    <div class="py-5">
      <div class="max-w-7xl mx-auto lg:px-8">
        <div class="lg:grid grid-cols-3 gap-4">


          <div
    class="
      rounded-lg
      cursor-pointer
      border-2 border-gray-200
      hover:border-cyan-600
      px-2
      py-2
      mb-3
      transition
      ease-in-out
      bg-white
    "
    v-for="facility in facilities.data" :key="facility.id"
  >
  <div class="flex justify-center items-center my-2 uppercase font-bold">
          <i class="fa-solid fa-house text-lg mr-2 text-gray-800"></i>
          <div class="flex justify-center">
            <span>{{facility.name }}</span>
            <span>{{facility_id }}</span>
          </div>
        </div>
        <div class="bg-gray-200 border-2 shadow-md rounded-md px-2 py-1 h-48 mb-3">
          <main>
            <div>
            </div>
          </main>
        </div>
          <footer class="flex flex-col items-center">
              <h1 class="font-bold text-lg text-gray-700">Ubicación: {{ facility.location }}</h1>
              <p class="text-sm text-gray-700 text-center">Descripción: {{ facility.description }}</p>
              <h1 class="font-bold text-lg text-green-700">Costo: ${{ facility.cost }}</h1>
              <h1 class="font-bold text-lg text-gray-700">Horas Disponibles reservación: {{ facility.hours_available }}</h1>
            <div class="flex space-x-3 text-gray-600 mt-2">
              
              <form @submit.prevent="store">
		<div class="relative z-0 mb-6 w-full group">
			<input v-model="form.reservation_name" type="text" name="floating_reservation_name" autocomplete="off" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=" " required />
			<label for="floating_reservation_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-cyan-600 peer-focus:dark:text-cyan-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre de quien reserva</label>
      <InputError :message="$page.props?.errors.reservation_name" />
		</div>
		<div class="relative z-0 mb-6 w-full group">
			<input v-model="form.reservation_date" type="date" name="floating_reservation_date" autocomplete="off" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=" " required />
			<label for="floating_reservation_date" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-cyan-600 peer-focus:dark:text-cyan-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Fecha de reservación</label>
      <InputError :message="$page.props?.errors.reservation_date" />
		</div>
		<div class="relative z-0 mb-6 w-full group">
			<input v-model="form.event_start" type="text" name="floating_event_start" autocomplete="off" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=" " />
			<label for="floating_event_start" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-cyan-600 peer-focus:dark:text-cyan-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hora</label>
      <InputError :message="$page.props?.errors.event_start" />
    </div>		
		<div class="relative z-0 mb-6 w-full group">
			<input v-model="form.notes" type="text" name="floating_notes" autocomplete="off" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=" " />
			<label for="floating_notes" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-cyan-600 peer-focus:dark:text-cyan-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Notas o comentarios</label>
      <InputError :message="$page.props?.errors.notes" />
    </div>		
    <div class="flex justify-center lg:justify-end mb-2">
		  <PrimaryButton :disabled="form.processing">Programar</PrimaryButton>
    </div>
	</form>

            </div>
          </footer>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import InputError from "@/Components/InputError.vue";
export default {
  data() {
    const form = useForm({
        reservation_name: "",
        reservation_date: null,
        event_start: "",
        notes: "",
        facility_id: null,
      })
    return {form};
  },

  components: {
    AppLayout,
    Link,
    PrimaryButton,
    SecondaryButton,
    InputError,
  },

  props: {
    facilities: Object,
  },

   methods: {
     store() {
      this.form.post(this.route('reservation-facilities.store'));
    },
  },
};
</script>