<template>
  <div
    class="mt-20 rounded-lg border-2 border-transparent hover:border-cyan-600 transition ease-in-out bg-transparet"
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
          <div class="text-center mt-1 text-3xl font-medium">{{external_service.name}}</div>
          <div class="text-center font-normal text-sm"><i class="fa-solid fa-phone text-gray-600"></i><i class="fa-brands fa-whatsapp ml-1 text-green-600"></i> {{external_service.phone}}</div>
          <div class="bg-gray-300 mx-2 rounded-lg py-1 my-1">
            <div class="px-6 text-center mt-1 font-light text-sm">
              <p>{{external_service.description}}</p>
            </div>
          </div>
          <div class="bg-gray-300 mx-2 pb-1 rounded-lg text-gray-700">
            <p class="text-center pt-1 mt-2 text-gray-800 font-bold">Redes sociales</p>
            <div v-if="external_service.website" class="text-center mt-1 font-light text-sm"><i class="fa-solid fa-earth-americas text-gray-500"></i> <a target="blank" class="hover:underline inline-block py-1" :href="external_service.website"> {{external_service.website}}</a></div>
            <div v-if="external_service.social_networks.facebook" class="text-center mt-1 font-light text-sm"><i class="fa-brands fa-facebook text-blue-600"></i> <a target="blank" class="hover:underline inline-block py-1" :href="external_service.social_networks.facebook"> {{external_service.social_networks.facebook}}</a></div>
            <div v-if="external_service.social_networks.instagram" class="text-center mt-1 font-light text-sm"><i class="fa-brands fa-instagram bg-gradient-to-tl from-orange-400 to-violet-500 text-gray-200"></i> <a target="blank" class="hover:underline inline-block py-1" :href="external_service.social_networks.facebook"> {{external_service.social_networks.instagram}}</a></div>
            <div v-if="external_service.social_networks.tiktok" class="text-center mt-1 font-light text-sm"><i class="fa-brands fa-tiktok"></i> <a target="blank" class="hover:underline inline-block py-1" :href="external_service.social_networks.facebook"> {{external_service.social_networks.tiktok}}</a></div>
            <div v-if="external_service.social_networks.twitter" class="text-center mt-1 font-light text-sm"><i class="fa-brands fa-twitter text-sky-500"></i> <a target="blank" class="hover:underline inline-block py-1" :href="external_service.social_networks.facebook"> {{external_service.social_networks.tiktok}}</a></div>
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
    external_service: Object,
  },
  components: {
    Link,
    PrimaryButton,
    SecondaryButton,
  },
};
</script>
