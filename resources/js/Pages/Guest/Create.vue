<template>
  <AppLayout title="Programar Visita">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Programar Visita</h2>
    </template>

    <div class="flex justify-start">
      <Link :href="route('guest.index')" class="flex items-center mt-2 text-slate-700">
        <i class="fas fa-long-arrow-alt-left text-lg"></i>
        <span class="ml-2">Atrás</span>
      </Link>
    </div>

<div class="container mx-auto bg-gray-300 rounded-lg h-auto mt-4 w-[90%] shadow-md shadow-gray-500/100 flex justify-center items-center">
    <form @submit.prevent="store" class="mt-6">
        <div class="lg:grid grid-cols-2 gap-x-3 transition-dark dark:bg-slate-900 flex flex-row justify-center items-center">
          <div class="mt-3 text-center">
          
          <select
              class="bg-gray-200 my-2 mr-2"
              required
              v-model="form.type"
            >
              <option disabled selected class="text-gray-500" value="">
                -- Seleccione --
              </option>
              <option
                v-for="guest_type in guest_types"
                :key="guest_type.id"
                :value="guest_type.id"
              >
                {{ guest_type.name }}
              </option>
            </select>

            <InputLabel class="text-gray-700 mx-4 my-2 text-base" value="Nombre" />
            <TextInput
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                />
                <InputError :message="$page.props?.errors.name" />

            <InputLabel class="text-gray-700 mx-4 my-2 text-base" value="Notas" />
            <TextInput
                    v-model="form.notes"
                    type="text"
                    class="mt-1 block w-full"
                />
                <InputError :message="$page.props?.errors.notes" />

            <InputLabel class="text-gray-700 mx-4 my-2 text-base" value="Placas" />
            <TextInput
                    v-model="form.plate_car"
                    type="text"
                    class="mt-1 block w-full"
                />
                <InputError :message="$page.props?.errors.notes" />
                <PrimaryButton :disabled="form.processing" class="my-4">Programar</PrimaryButton>
        </div>
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
export default {
  data() {
    const form = useForm({
        name: null,
        type: "",
        notes: "",
        plate_car: "",    
      })
    return {form};
  },

  components: {
    AppLayout,
    Link,
    PrimaryButton,
    SecondaryButton,
    useForm,
    TextInput,
    InputLabel,
  },

  props: {
    guest_types: Object,
  },

  methods: {
     store() {
      this.form.post(this.route('guest.store'));
    },
  },
};
</script>
