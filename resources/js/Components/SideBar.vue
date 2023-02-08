<template>
  <!-- component -->

  <div class="h-full flex flex-row">
    <div class="bg-gray-300 h-full xs:hidden lg:block shadow-lg shadow-gray-600/100 px-3">
      <div class="space-y-6 md:space-y-10 ">

        <div id="profile" class="space-y-3 flex justify-center items-center pt-4">
          <ApplicationMark class="w-1/4" />
        </div>

        <div id="menu" class="flex flex-col space-y-2 h-[calc(100vh-7.5rem)] overflow-y-auto">
          <SideBarLink :href="route('dashboard')" :active="route().current('dashboard')">
            <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
              </path>
            </svg>
            <span class="ml-1"> Panel de Inicio</span>
          </SideBarLink>

          <SideBarLink :href="route('guest.index')" :active="route().current('guest.*') || route().current('favorite-guests.*')">
            <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
              </path>
            </svg>
            <span class="ml-1"> Visitas</span>
          </SideBarLink>
          <SideBarLink :href="route('payments.index')" :active="route().current('payments.*')">
            <i class="fa-solid fa-credit-card text-lg"></i>
            <span class="ml-1"> Pagos</span>
          </SideBarLink>
          <SideBarLink :href="route('neighborhood.index')" :active="route().current('neighborhood.*')">
            <i class="fa-solid fa-bullhorn text-lg"></i>
            <span class="ml-1">Sección Vecinal</span>
          </SideBarLink>
          <a :href="route('chatify')"
            class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-gradient-to-r from-slate-700 to-teal-500 hover:text-white rounded-lg">
            <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"></path>
              <path
                d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z">
              </path>
            </svg>
            <span class="ml-1"> Chat</span>
          </a>
          <SideBarLink :href="route('reservation-facilities.index')"
            :active="route().current('reservation-facilities.*')">
            <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="ml-1"> Reservación de Areas</span>
          </SideBarLink>
          <SideBarLink :href="route('internal-services.index')" :active="route().current('internal-services.*')">
            <i class="fa-solid fa-people-group text-xl"></i>

            <span class="ml-1"> Servicios</span>
          </SideBarLink>
          <SideBarLink :href="route('general.index')" :active="route().current('general.*')">
            <!-- <i class="fa-solid fa-headset text-xl"></i> -->
            <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="ml-1"> Generales</span>
          </SideBarLink>
          <SideBarLink :href="route('dashboard')" :active="false">
            <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z">
              </path>
            </svg>
            <span class="ml-1"> UI Components</span>
          </SideBarLink>
          <SideBarLink :href="route('dashboard')" :active="false">
            <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
              <path fill-rule="evenodd"
                d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="ml-1"> Users</span>
          </SideBarLink>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import SideBarLink from "@/Components/SideBarLink.vue";
import ApplicationMark from "@/Components/ApplicationMark.vue";
export default {
  data() {
    return {

    }
  },
  components: {
    SideBarLink,
    ApplicationMark,
  }
}
</script>