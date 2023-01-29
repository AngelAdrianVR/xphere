<template>
  <div
    class="mt-20 rounded-lg cursor-pointer border-2 border-transparent hover:border-cyan-600 transition ease-in-out bg-transparet"
  >
    <div class="bg-gray-200 shadow-md rounded-md px-2 py-3">
      <!-- component -->
      <div
        class="bg-gray-200 font-sans w-full flex flex-row justify-center items-center"
      >
        <div class="card w-80 mx-auto bg-white shadow-xl hover:shadow">
          <img
            class="w-32 mx-auto rounded-full -mt-20 border-8 border-white"
            src="https://avatars.githubusercontent.com/u/67946056?v=4"
            alt=""
          />
          <div class="text-center mt-2 text-3xl font-medium">{{internal_service.name}}</div>
          <div class="text-center font-normal text-sm"><i class="fa-solid fa-phone text-gray-600"></i><i class="fa-brands fa-whatsapp ml-1 text-green-600"></i> {{internal_service.phone}}</div>
          <div class="bg-gray-300 mx-2 pb-1 rounded-lg text-gray-700 py-1 my-1">
            <div class="px-6 text-center mt-2 font-light text-sm">
              <p>{{internal_service.description}}</p>
            </div>
          </div>
          <hr class="mt-8" />
          <div class="flex p-4">
            <div class="w-1/2 text-center">
              <SecondaryButton>Otra</SecondaryButton>
            </div>
            <div class="w-0 border border-gray-300"></div>
            <div class="w-1/2 text-center">
              <PrimaryButton>Solicitar</PrimaryButton>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";


export default {
  props: {
    internal_service: Object,
  },
  components: {
    Link,
    PrimaryButton,
    SecondaryButton,
  },
};
</script>
