<template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Panel de Inicio
        <span>{{ sphere.name }}</span>
      </h2>
    </template>

    <div class="h-[100%] relative">
      <!-- ---------------------------LOGO---------------------------- -->
      <div
        class="w-24 h-24 rounded-full border-8 border-gray-300 absolute sm:bottom-[80%] bottom-[83%] sm:right-[46%] right-[38%] flex justify-center items-center"
      >
        <p class="text-gray-500 font-semibold">logo</p>
      </div>

      <!-- ---------------------------PAYMENTS---------------------------- -->
      <Link :href="route('payments.index')">
        <div v-if="!pendent_payments.data.length"
          class="w-56 h-56 rounded-full border-8 hover:ring-2 ring-offset-1 ring-green-600 border-green-500 absolute sm:bottom-[40%] bottom-[50%] sm:right-[40%] right-[23%] flex justify-center items-center"
        >
          <p class="text-gray-500 font-semibold">Tiene {{pendent_payments.data.length}} Pago(s) pendientes</p>
        </div>
        <div v-else-if="pendent_payments.data.length >=1 && pendent_payments.data.length <=2"
          class="w-56 h-56 rounded-full border-8 hover:ring-2 ring-offset-1 ring-orange-600 border-orange-500 absolute sm:bottom-[40%] bottom-[50%] sm:right-[40%] right-[23%] flex justify-center items-center"
        >
          <p class="text-gray-500 font-semibold">Tiene {{pendent_payments.data.length}} Pago(s) pendientes</p>
        </div>
        <div v-else
          class="w-56 h-56 rounded-full border-8 hover:ring-2 ring-offset-1 ring-red-600 border-red-500 absolute sm:bottom-[40%] bottom-[50%] sm:right-[40%] right-[23%] flex justify-center items-center"
        >
          <p class="text-gray-500 font-semibold">Tiene {{pendent_payments.data.length}} Pago(s) pendientes</p>
        </div>
      </Link>
      <!-- ---------------------------PANIC BUTTON---------------------------- -->
      <button>
      <div
        class="w-16 h-16 rounded-full border-8 border-red-500 absolute top-3 right-4 flex justify-center items-center hover:ring-2 ring-red-700 ring-offset-1"
      >
        <i title="Botón de pánico" class="fa-solid fa-circle-exclamation text-6xl text-red-600"></i>
      </div>
      </button>
      <!-- ---------------------------CHAT GUARDHOUSE BUTTON---------------------------- -->
      <Link :href="route('general.guard-house-chat')">
      <div title="Chat con caseta"
        class="w-16 h-16 rounded-full border-4 bg-cyan-600 border-cyan-500 absolute top-24 right-4 flex justify-center items-center hover:ring-2 ring-cyan-600 ring-offset-1"
      >
        <i class="fa-solid fa-comments text-white text-xl"></i>
      </div>
      </Link>
      <!-- ---------------------------CALL GUARDHOUSE BUTTON---------------------------- -->
      <button>
      <div title="Chat con caseta"
        class="w-16 h-16 rounded-full border-4 bg-cyan-600 border-cyan-500 absolute top-40 right-4 flex justify-center items-center hover:ring-2 ring-cyan-600 ring-offset-1"
      >
        <i class="fa-solid fa-phone text-white text-xl"></i>
      </div>
      </button>
      <!-- ---------------------------GUEST BUTTON---------------------------- -->
      <Link :href="route('guest.create')">
      <div title="Programar Visita"
        class="w-16 h-16 rounded-full border-4 bg-cyan-600 border-cyan-500 absolute top-3 left-5 flex justify-center items-center hover:ring-2 ring-cyan-600 ring-offset-1"
      >
        <svg
                class="w-7 h-7 fill-current inline-block text-white"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                ></path>
              </svg>
      </div>
      </Link>
      <!-- ---------------------------INCIDENT REPORT BUTTON---------------------------- -->
      <Link :href="route('general.report-incident')">
      <div title="Reportar insidente"
        class="w-16 h-16 rounded-full border-4 bg-cyan-600 border-cyan-500 absolute top-20 left-5 flex justify-center items-center hover:ring-2 ring-cyan-600 ring-offset-1"
      >
      <i class="fa-solid fa-circle-info text-white text-3xl"></i>
      </div>
      </Link>
      <!-- ---------------------------SUGGESTIONS---------------------------- -->
      <Link :href="route('general.suggestions')">
      <div title="Quejas y sugerencias"
        class="w-16 h-16 rounded-full border-4 bg-cyan-600 border-cyan-500 absolute top-36 left-5 flex justify-center items-center hover:ring-2 ring-cyan-600 ring-offset-1"
      >
      <i class="fa-solid fa-headset text-white text-2xl"></i>
      </div>
      </Link>
      <!-- ---------------------------SURVEYS------------CONDITIONAL IF THERE IS SOME SURVEY AVAILABLE---------------- -->
      <Link :href="route('general.surveys')">
      <div title="Encuesta disponible"
        class="w-16 h-16 rounded-full border-4 bg-cyan-600 border-cyan-500 absolute top-60 right-4 flex justify-center items-center hover:ring-2 ring-cyan-600 ring-offset-1"
      >
      <i class="fa-solid fa-clipboard-question text-white text-2xl"></i>
      </div>
      </Link>

      <!-- --------------------------------DIV SEPARATOR OF ABSOLUTE POSITION BUTTONS------------------------------ -->
      <div class="bg-transparent h-[48%] sm:h-[60%]"></div> 
      <!-- -------------------------------------------------------------------------------------------------------- -->


      <!-- ---------------------------USER INFORMATION---------------------------- -->
      <InformationGlobe>
        <template #header>
          <p class="text-white font-bold">INFORMACIÓN DE RESIDENTE</p>
        </template>
        <template #body>
          <p class="text-gray-500 font-semibold">{{ sphere.name }}</p>
          <p class="text-gray-500 font-semibold">{{ sphere.location }}</p>
          <p class="text-gray-500 font-semibold">{{ user.name }}</p>
          <p class="text-gray-500 font-semibold">{{ user.phone }}</p>
          <p class="text-gray-500 font-semibold">{{ user.email }}</p>
        </template>
        <template #footer>
        <!-- <Link :href=""> -->
          <PrimaryButton class="my-4">Actualizar</PrimaryButton>
          <!-- </Link> -->
        </template>
      </InformationGlobe>
      
<!-- -------------------------PROGRAMED GUESTS------------------------ -->
<h1 class="text-lg font-bold text-gray-500 text-center mt-7">Visitas programadas para hoy</h1>

    <div v-if="guests.data.length" class="py-4">
      <div class="max-w-7xl mx-auto lg:px-8">
        <div class="lg:grid grid-cols-3 gap-4">
            <GuestCard v-for="guest in guests.data" :key="guest.id" :guest="guest" />
        </div>
      </div>
    </div>
    <p v-else class="text-gray-600 text-center">No tienes visitas programadas.</p>

<!-- -------------------------FACILITY RESERVATIONS------------------------ -->
<h1 class="text-lg font-bold text-gray-500 text-center mt-7">Reservaciones de Áreas</h1>

    <div v-if="guests.data.length" class="py-4">
      <div class="max-w-7xl mx-auto lg:px-8">
        <div class="lg:grid grid-cols-3 gap-4">
          <GuestCard v-for="guest in guests.data" :key="guest.id" :guest="guest" />
        </div>
      </div>
    </div>
    <p v-else class="text-gray-600 text-center">No tienes reservaciones pendientes.</p>
<!-- -------------------------RESIDENT PERMISSIONS------------------------ -->
<h1 class="text-lg font-bold text-gray-500 text-center mt-7">Permisos Solicitados</h1>

    <div v-if="guests.data.length" class="py-4">
      <div class="max-w-7xl mx-auto lg:px-8">
        <div class="lg:grid grid-cols-3 gap-4">
          <GuestCard v-for="guest in guests.data" :key="guest.id" :guest="guest" />
        </div>
      </div>
    </div>
    <p v-else class="text-gray-600 text-center">No tienes permisos solicitados recientemente.</p>


  </div>
  </AppLayout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import InformationGlobe from "@/Components/InformationGlobe.vue"; 
import PrimaryButton from "@/Components/PrimaryButton.vue"; 
import GuestCard from "@/Components/Cards/GuestCard.vue"; 
export default {
  data() {
  
    return {
      payment_circle: "null",
    };
  },
  props: {
    sphere: Object,
    user: Object,
    guests: Object,
    pendent_payments: Object,
    
  },
  components: {
    AppLayout,
    Link,
    InformationGlobe,
    PrimaryButton,
    GuestCard,
  },

};
</script>
