<template>
  <AppLayout title="Crear Favorito">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Favorito</h2>
    </template>

    <div
      class="bg-sky-100 border-t-4 border-sky-500 rounded-b text-sky-900 px-4 py-3 shadow-md"
      role="alert"
    >
      <div class="flex">
        <div class="py-1">
          <svg
            class="fill-current h-6 w-6 text-sky-500 mr-4"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"
            />
          </svg>
        </div>
        <div>
          <p class="font-bold">ATENCIÓN</p>
          <p class="text-sm">
            Escribir la marca, modelo y placas del vehículo en que va a llegar tu visita.
            Omitir los campos en caso de que tu visita llegue a pie.
          </p>
        </div>
      </div>
    </div>

    <div class="flex justify-start ml-2">
      <Link :href="route('guest.favorite')" class="flex items-center mt-2 text-slate-700">
        <i
          class="fas fa-long-arrow-alt-left text-lg hover:bg-gray-200 rounded-full w-7 h-7 pl-1"
        ></i>
        <span class="ml-1 cursor-default">Atrás</span>
      </Link>
    </div>

    <!-- component -->
    <!-- This is an example component -->
    <div
      class="max-w-2xl md:mx-auto mt-5 shadow-md shadow-gray-500/70 rounded-lg px-5 py-8 bg-gray-200 mx-4"
    >
      <form @submit.prevent="store">
        <select
          class="bg-gray-200 mb-7 mr-2 rounded-lg border border-gray-300 text-gray-500 focus:border-cyan-500 focus:text-cyan-500"
          required
          v-model="form.guest_type_id"
        >
          <option disabled selected class="text-gray-500" value="">
            -- Tipo de Visita --
          </option>
          <option
            class="text-gray-500"
            v-for="guest_type in guest_types"
            :key="guest_type.id"
            :value="guest_type.id"
          >
            {{ guest_type.name }}
          </option>
        </select>
        <!-- <InputError :message="$page.props?.errors.quantity" /> -->
        <div class="relative z-0 mb-6 w-full group">
          <input
            v-model="form.name"
            type="text"
            name="floating_name"
            autocomplete="off"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer"
            placeholder=" "
            required
          />
          <label
            for="floating_name"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-cyan-600 peer-focus:dark:text-cyan-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Nombre *</label
          >
          <InputError :message="$page.props?.errors.name" />
        </div>
        <div class="relative z-0 mb-6 w-full group">
          <input
            v-model="form.brand_car"
            type="text"
            name="floating_brand_car"
            autocomplete="off"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer"
            placeholder=" "
          />
          <label
            for="floating_brand_car"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-cyan-600 peer-focus:dark:text-cyan-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Marca/modelo del Vehiculo</label
          >
          <InputError :message="$page.props?.errors.brand_car" />
        </div>
        <div class="relative z-0 mb-6 w-full group">
          <input
            v-model="form.plate_car"
            type="text"
            name="floating_plate_car"
            autocomplete="off"
            class="uppercase block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer"
            placeholder=" "
          />
          <label
            for="floating_plate_car"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-cyan-600 peer-focus:dark:text-cyan-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Placas</label
          >
        </div>
        <div class="relative z-0 mb-6 w-full group">
          <textarea
            v-model="form.notes"
            rows="4"
            type="text"
            name="floating_notes"
            autocomplete="off"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer"
            placeholder=" "
          />
          <label
            for="floating_notes"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-cyan-600 peer-focus:dark:text-cyan-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Notas</label
          >
          <InputError :message="$page.props?.errors.notes" />
        </div>

        <div class="flex justify-center lg:justify-end">
          <PrimaryButton :disabled="form.processing">Programar</PrimaryButton>
        </div>
      </form>
    </div>
  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
export default {
  data() {
    const form = useForm({
      name: null,
      guest_type_id: "",
      notes: "",
      brand_car: "",
      plate_car: "",
    });
    return { form };
  },

  components: {
    AppLayout,
    Link,
    PrimaryButton,
    SecondaryButton,
    useForm,
    TextInput,
    InputLabel,
    InputError,
  },

  props: {
    guest_types: Object,
    filters: Object,
    filterURL: String,
  },

  methods: {
    store() {
      this.form.post(this.route("guest.store-favorite"));
    },
  },
};
</script>
