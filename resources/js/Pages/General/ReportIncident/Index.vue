<template>
  <AppLayout title="Reportar Incidente">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Reportar Incidente
      </h2>
    </template>

    <div class="flex justify-start ml-2">
      <Link :href="route('general.index')" class="flex items-center mt-2 text-slate-700">
        <i class="fas fa-long-arrow-alt-left text-lg hover:bg-gray-200 rounded-full w-7 h-7 pl-1"></i>
        <span class="ml-1 cursor-default">Atrás</span>
      </Link>
    </div>

    <div class="max-w-2xl md:mx-auto mt-5 shadow-md shadow-gray-500/70 rounded-lg px-5 py-8 bg-gray-200 mx-4">
	<form @submit.prevent="store">
    <FloatingInput v-model="form.subject" required type="text">
      <template #label>
        Asunto
      </template>
    </FloatingInput>
      <InputError :message="$page.props?.errors.subject" />
		<div class="relative z-0 mb-6 w-full group">
			<textarea v-model="form.description" rows="4" type="text" name="floating_description" autocomplete="off" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=" " required />
			<label for="floating_description" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-cyan-600 peer-focus:dark:text-cyan-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripción</label>
      <InputError :message="$page.props?.errors.description" />
		</div>
    <div>
      <FileUploader @input="form.resources = $event.target.files" />
    </div>
    <div class="flex justify-center lg:justify-end">
		  <PrimaryButton :disabled="form.processing">Reportar</PrimaryButton>
    </div>
	</form>
    </div>

    
    
  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, useForm } from "@inertiajs/inertia-vue3";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import FileUploader from "@/Components/FileUploader.vue";
import FloatingInput from "@/Components/FloatingInput.vue";

export default {
  data() {
    const form = useForm({
        subject: "",
        description: "",
        resources: null,
     
      })
    return {form};
  },

  components: {
    AppLayout,
    Link,
    InputError,
    PrimaryButton,
    FileUploader,
    FloatingInput,

  },

  props: {
  },

  methods: {
    store(){
      this.form.post(route('incidents.store'));
    }
    
  },
};
</script>
