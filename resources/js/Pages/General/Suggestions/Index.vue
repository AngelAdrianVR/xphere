<template>
  <AppLayout title="Quejas y sugerencias">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
       Quejas y Sugerencias
      </h2>
    </template>

    <div class="flex justify-start ml-2">
      <Link :href="route('general.index')" class="flex items-center mt-2 text-slate-700">
        <i class="fas fa-long-arrow-alt-left text-lg hover:bg-gray-200 rounded-full w-7 h-7 pl-1"></i>
        <span class="ml-1 cursor-default">Atrás</span>
      </Link>
    </div>

<div class="max-w-2xl md:mx-auto mt-5 shadow-md shadow-gray-500/70 rounded-lg px-5 py-8 bg-gray-200 mx-4">
    <form @submit="store">
        <div class="lg:grid grid-cols-2 gap-x-3 section-container dark:bg-slate-900">

        <FloatingInput v-model="form.subject" required type="text">
          <template #label>
            Asunto
          </template>
        </FloatingInput>
        <InputError :message="$page.props?.errors.subject" />

          <div class="flex justify-center">
            <div>
              <div class="form-check">
                <input
                  v-model="form.is_error"
                  class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white dark:border-slate-500 dark:bg-slate-500 checked:bg-red-600 checked:border-red-600 dark:checked:bg-red-600 dark:checked:border-red-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                  type="radio"
                  name="bug"
                  id="bug"
                  value="1"
                />
                <label
                  class="form-check-label inline-block text-gray-800 dark:text-gray-300"
                  for="flexRadioDefault1"
                >
                  Reportar Error
                </label>
              </div>
              <div class="form-check">
                <input
                  v-model="form.is_error"
                  class="form-check-input appearance-none rounded-full h-4 w-4 bg-white dark:border-slate-500 dark:bg-slate-500 checked:bg-cyan-600 checked:border-cyan-600 dark:checked:bg-cyan-600 dark:checked:border-cyan-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                  type="radio"
                  name="bug"
                  id="sug"
                  value="0"
                />
                <label
                  class="form-check-label inline-block text-gray-800 dark:text-gray-300"
                  for="flexRadioDefault2"
                >
                  Dejar sugerencia
                </label>
              </div>
            </div>
          </div>
          <div class="relative z-0 mb-6 w-full group">
            <textarea v-model="form.description" rows="4" type="text" name="floating_description" autocomplete="off" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=" " required />
            <label for="floating_description" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-cyan-600 peer-focus:dark:text-cyan-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripción</label>
            <InputError :message="$page.props?.errors.description" />
          </div>

          <div>
            <label class="text-gray-500"> Archivos de evidencia</label>
            <FileUploader />
          </div>
        </div>
        <div class="flex justify-end">
          <PrimaryButton v-if="!form.processing">
            Enviar
          </PrimaryButton>
          <p v-else class="text-sm text-gray-400 mt-4">Enviando...</p>
        </div>
      </form>
    </div>

  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import InputError from "@/Components/InputError.vue";
import FileUploader from "@/Components/FileUploader.vue";
import FloatingInput from "@/Components/FloatingInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

export default {
  data() {
    const form = useForm({
      subject: "",
      description: "",
      is_error: "",
      resources: [],
    });
      
    return { form };
  },

  components: {
    AppLayout,
    Link,
    InputError,
    FileUploader,
    FloatingInput,
    PrimaryButton,
  },

  props: {
  },

  methods: {
    store() {
      this.form.post(route("error-reports.store"));
  },
  },
};
</script>
