<template>
     <!-- component -->
    <div class="flex items-center justify-center bg-transparent my-5">
      <div
        class="flex flex-col shadow-xl bg-white rounded-lg"
        style="width: 370px; height: 550px rounded: 10px"
      >
        <div class="flex flex-col">
          <img
            src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80"
            alt=""
          />
          <div class="p-5 -mt-8 rounded-2xl bg-white">
            <div class="flex flex-row items-center space-x-1">
              <p class="font-bold text-xl">{{ facility.name }}</p>
            </div>
            <div class="flex flex-row space-x-1 text-blue-600 my-2">
              <p class="font-semibold text-xs">{{ facility.hours_available }} Horas disponibles por reservación</p>
            </div>
            <div class="flex flex-row space-x-1">
              <div class="bg-gray-100 px-3 py-1 rounded-lg flex space-x-2 flex-row">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3"></path>
                  <path
                    d="M3 11v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v2H7v-2a2 2 0 0 0-4 0Z"
                  ></path>
                  <path d="M5 18v2"></path>
                  <path d="M19 18v2"></path>
                </svg>
                <p class="text-xxsm">Cleanliness 4.5/5</p>
              </div>
              <div class="bg-green-100 px-3 py-1 rounded-lg flex space-x-2 flex-row">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="M7 10v12"></path>
                  <path
                    d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z"
                  ></path>
                </svg>
                <p class="text-xxsm">Location 4.5/5</p>
              </div>
            </div>
            <div
              class="text-grey-500 flex flex-row space-x-1 py-4 border-t border-b border-gray-200 my-4"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
              <p class="text-xs">{{ facility.location }}</p>
            </div>
            <p class="mt-4">{{ facility.description }}</p>
            <div class="bg-gray-100 p-4 mt-2">
              <div class="flex flex-row justify-end">
                <div class="text-right">
                  <p class="text-2xl font-bold">${{ facility.cost }}</p>
                  <p class="text-sm text-green-500">Aportación por reservación.</p>
                  <p class="text-sm text-red-500">La cancelación debe de hacerse minimo 3 días antes de la fecha reservada</p>
                </div>
              </div>
              <div class="flex justify-center mt-2">
                <PrimaryButton class="w-full flex justify-center"> Reservar </PrimaryButton>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";

export default {
    data(){
        const form = useForm({
          reservation_name: "",
          reservation_date: null,
          event_start: "",
          notes: "",
          facility_id: null,
        });
        return { form };
    },
  props: {
    facility: Object,
  },
  components: {
    Link,
    PrimaryButton,
    InputError,
  },
  methods:{
    store() {
      this.form.post(this.route("reservation-facilities.store"));
    },
  }
};
</script>