<template>
  <AppLayout title="Editar Favorito">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editar Favorito
      </h2>
    </template>

     <AlertInfo>
      <template #title>
        ATENCIÓN
      </template>
      <template #info>
        El código debe ser mostrado al vigilante de caseta para dar acceso al invitado.
        Anotar un número aproximado de visitantes.
      </template>
    </AlertInfo>

    <div class="flex justify-start ml-2">
      <Link :href="route('guest-events.index')" class="flex items-center mt-2 text-slate-700">
        <i
          class="fas fa-long-arrow-alt-left text-lg hover:bg-gray-200 rounded-full w-7 h-7 pl-1"
        ></i>
        <span class="ml-1 cursor-default">Atrás</span>
      </Link>
    </div>

    <div
      class="max-w-2xl md:mx-auto mt-5 shadow-md shadow-gray-500/70 rounded-lg px-5 py-8 bg-gray-200 mx-4"
    >
      <form @submit.prevent="update">
        <FloatingInput v-model="form.name" type="text">
        <template #label>
            Nombre del evento *
        </template>
       </FloatingInput>
       <InputError :message="$page.props?.errors.name" />

       <FloatingInput v-model="form.num_guests" type="number">
        <template #label>
            Núm. aprox invitados
        </template>
       </FloatingInput>
       <InputError :message="$page.props?.errors.brand_car" />

        <div class="relative z-0 mb-6 w-full group">
          <textarea
            v-model="form.notes"
            type="text"
            rows="3"
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
          <PrimaryButton :disabled="form.processing">Actualizar</PrimaryButton>
        </div>
      </form>
    </div>
  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import InputError from "@/Components/InputLabel.vue";
import FloatingInput from '@/Components/FloatingInput.vue'
import AlertInfo from '@/Components/AlertInfo.vue'

export default {
  data() {
    const form = useForm({
      name: this.event.name,
      num_guests: this.event.num_guests,
      notes: this.event.notes,
    });
    return { form };
  },

  components: {
    AppLayout,
    Link,
    PrimaryButton,
    SecondaryButton,
    InputError,
    FloatingInput,
    AlertInfo,
  },

  props: {
    event: Object,
    filters: Object,
    filterURL: String,
  },

  methods: {
    update() {
      this.form.put(this.route("guest-events.update",this.event.id));
    },
  },
};
</script>
