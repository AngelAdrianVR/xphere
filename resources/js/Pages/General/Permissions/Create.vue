<template>
  <AppLayout title="Solicitar Permiso">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Solicitar Permiso</h2>
    </template>

    <AlertInfo>
      <template #title> ATENCIÓN </template>
      <template #info>
        Los Permisos tienen que ser programados mínimo 7 días de anticipación
        a la fecha requerida. Serán respondidos en un plazo de 7 días hábiles. En caso de no ser
        respondido, pasar a administración a dar seguimiento. Gracias!
      </template>
    </AlertInfo>

    <div class="flex justify-start ml-2">
      <Link
        :href="route('general.permissions')"
        class="flex items-center mt-2 text-slate-700"
      >
        <i
          class="fas fa-long-arrow-alt-left text-lg hover:bg-gray-200 rounded-full w-7 h-7 pl-1"
        ></i>
        <span class="ml-1 cursor-default">Atrás</span>
      </Link>
    </div>

    <div
      class="max-w-2xl md:mx-auto mt-5 shadow-md shadow-gray-500/70 rounded-lg px-5 py-8 bg-white mx-4"
    >
      <form @submit.prevent="store">
        <select class="select mb-5" required v-model="form.permission_type_id">
          <option disabled selected class="text-gray-500" value="">
            -- Tipo de Permiso --
          </option>
          <option
            class="text-gray-500"
            v-for="permission_type in permission_types"
            :key="permission_type.id"
            :value="permission_type.id"
          >
            {{ permission_type.name }}
          </option>
        </select>

        <FloatingInput v-model="form.date" type="date" required>
          <template #label> Fecha requerida * </template>
        </FloatingInput>
        <InputError :message="$page.props?.errors.date" />

        <FloatingInput v-model="form.subject" type="text" required>
          <template #label> Asunto del permiso * </template>
        </FloatingInput>
        <InputError :message="$page.props?.errors.subject" />

        <div class="relative z-0 mb-6 w-full group">
          <textarea
            v-model="form.description"
            type="text"
            rows="4"
            name="floating_notes"
            autocomplete="off"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer"
            placeholder=" "
          />
          <label
            for="floating_notes"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-cyan-600 peer-focus:dark:text-cyan-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Descripción del permiso</label
          >
          <InputError :message="$page.props?.errors.notes" />
        </div>

        <div class="flex justify-center lg:justify-end">
          <PrimaryButton>Programar</PrimaryButton>
        </div>
      </form>
    </div>
  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import AlertInfo from "@/Components/AlertInfo.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import FloatingInput from "@/Components/FloatingInput.vue";
import InputError from "@/Components/InputError.vue";

export default {
  data() {
    const form = useForm({
      permission_type_id: null,
      subject: "",
      date: null,
      description: "",
    });

    return { form };
  },

  components: {
    AppLayout,
    Link,
    AlertInfo,
    PrimaryButton,
    FloatingInput,
    InputError,
  },

  props: {
    permission_types: Array,
  },

  methods: {
    store(){
      this.form.post(route('resident-permissions.store'));
    }
  },
};
</script>
