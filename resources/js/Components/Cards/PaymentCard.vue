<template>
  <div
    class="
      cursor-pointer
      border-2 border-transparent
      hover:border-cyan-600
      mb-3
      transition
      ease-in-out
      bg-transparet
    "
  >
        <div class="bg-white shadow-md rounded-md px-2 py-3 border-dashed border-2 border-gray-400">
        <!-- <Link :href="route('neighborhood.show', payments.id)"> --> 
          <main class="grid grid-cols-3">
            <div class="col-span-2">
              <h1 class="font-bold text-lg text-gray-700">{{ payment.concept }}</h1>
              <p class="text-sm text-gray-500 max-h-20 overflow-hidden">{{ payment.created_at }}</p>
              <p v-if="payment.expired_date" class="text-sm text-gray-500 max-h-20 overflow-hidden">Expiración: {{ payment.expired_date }}</p>
              <p class="text-sm text-gray-500 max-h-20 overflow-hidden uppercase">{{ payment.description }}</p>
            </div>
            <div class="flex justify-center items-center">
                <p class="text-sm text-gray-500 max-h-20 overflow-hidden mx-6">${{ payment.amount }}</p><i class="fa-solid fa-angle-right text-gray-400"></i>
            </div>
          </main>
          <!-- </Link> -->
        </div>
  </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
  props: {
    payment: Object,
  },
  components: {
    Link,
  },
};
</script>
