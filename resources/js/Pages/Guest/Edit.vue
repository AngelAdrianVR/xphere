<template>
  <AppLayout title="Editar Visita">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Visita</h2>
    </template>

    <AlertInfo>
      <template #title>
        ATENCIÓN
      </template>
      <template #info>
        Si tu visita Ingresa en conche llenar los campos correspondientes, si ingresa a pie favor de omitirlos.
      </template>
    </AlertInfo>

    <div class="flex justify-start ml-2">
      <Link :href="route('guest.index')" class="flex items-center mt-2 text-slate-700">
        <i
          class="fas fa-long-arrow-alt-left text-lg hover:bg-gray-200 rounded-full w-7 h-7 pl-1"
        ></i>
        <span class="ml-1 cursor-default">Atrás</span>
      </Link>
    </div>


    <div
      class="max-w-2xl md:mx-auto mt-5 shadow-md shadow-gray-500/70 rounded-lg px-5 py-8 bg-gray-50 mx-4"
    >
      <form @submit.prevent="update">
        <select
          class="bg-gray-50 mb-7 mr-2 rounded-lg border border-gray-300 text-gray-500 focus:border-cyan-500 focus:text-cyan-500"
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

        <div class="mb-5">
          <FloatingInput v-model="form.name" type="text">
          <template #label>
              Nombre *
          </template>
         </FloatingInput>
         <InputError :message="$page.props?.errors.name" />
        </div>

        <div class="mb-5">
          <FloatingInput v-model="form.brand_car" type="text">
           <template #label>
               Marca/modelo del Vehiculo
           </template>
          </FloatingInput>
          <InputError :message="$page.props?.errors.brand_car" />
        </div>

        <div class="mb-5">
          <FloatingInput v-model="form.plate_car" type="text">
           <template #label>
               Placa
           </template>
          </FloatingInput>
          <InputError :message="$page.props?.errors.plate_car" />
        </div>

        <div class="relative z-0 mb-6 w-full group">
          <textarea
            v-model="form.notes"
            type="text"
            rows="2"
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
        <div class="block mb-7">
          <label class="flex items-center">
            <Checkbox v-model:checked="form.favorite_guest" name="favorite_guest" />
            <span class="ml-2 text-sm text-gray-500"> Marcar como favoritos</span>
          </label>
        </div>
        <div class="flex justify-center lg:justify-end">
          <PrimaryButton :disabled="form.processing">Editar</PrimaryButton>
        </div>
      </form>
    </div>
  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import Checkbox from "@/Components/Checkbox.vue";
import FloatingInput from '@/Components/FloatingInput.vue'
import AlertInfo from '@/Components/AlertInfo.vue'

export default {
  data() {
    const form = useForm({
      name: this.guest.name,
      guest_type_id: this.guest.guest_type_id,
      notes: this.guest.notes,
      brand_car: this.guest.brand_car,
      plate_car: this.guest.plate_car,
      favorite_guest: this.guest.favorite_guest,
    });
    return { form };
  },

  components: {
    AppLayout,
    Link,
    PrimaryButton,
    Checkbox,
    InputError,
    FloatingInput,
    AlertInfo,
    
  },

  props: {
    guest_types: Object,
    guest: Object,
    filters: Object,
    filterURL: String,
  },

  methods: {
    update() {
      this.form.put(route("guest.update",this.guest));
    },
  },
};
</script>
