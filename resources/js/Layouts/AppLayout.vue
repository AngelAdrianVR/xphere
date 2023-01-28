<script setup>
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { Head, Link } from "@inertiajs/inertia-vue3";
import ApplicationMark from "@/Components/ApplicationMark.vue";
import Banner from "@/Components/Banner.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import SideBar from "@/Components/SideBar.vue";

defineProps({
  title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
  Inertia.put(
    route("current-team.update"),
    {
      team_id: team.id,
    },
    {
      preserveState: false,
    }
  );
};

const logout = () => {
  Inertia.post(route("logout"));
};
</script>

<template>
  <div class="">
    <Head :title="title" />

    <Banner />

    <div class="h-screen bg-gray-200 lg:grid lg:grid-cols-6">
      <aside>
        <SideBar />
      </aside>
      <main class="col-span-5">
        <nav class="bg-gradient-to-tl from-slate-700 to-cyan-700 border-b-2 border-gray-500 shadow-md shadow-gray-500/100">
          <!-- Primary Navigation Menu -->
          <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
              <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                  <Link :href="route('dashboard')">
                    <ApplicationMark class="block h-9 w-auto" />
                  </Link>
                </div>
              </div>
              <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="ml-3 relative">
                  <!-- Teams Dropdown -->
                  <Dropdown
                    v-if="$page.props.jetstream.hasTeamFeatures"
                    align="right"
                    width="60"
                  >
                    <template #trigger>
                      <span class="inline-flex rounded-md">
                        <button
                          type="button"
                          class="
                            inline-flex
                            items-center
                            px-3
                            py-2
                            border border-transparent
                            text-sm
                            leading-4
                            font-medium
                            rounded-md
                            text-gray-500
                            bg-white
                            hover:bg-gray-50 hover:text-gray-700
                            focus:outline-none focus:bg-gray-50
                            active:bg-gray-50
                            transition
                          "
                        >
                          {{ $page.props.user.current_team.name }}

                          <svg
                            class="ml-2 -mr-0.5 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                              clip-rule="evenodd"
                            />
                          </svg>
                        </button>
                      </span>
                    </template>

                    <template #content>
                      <div class="w-60">
                        <!-- Team Management -->
                        <template v-if="$page.props.jetstream.hasTeamFeatures">
                          <div class="block px-4 py-2 text-xs text-gray-400">
                            Manage Team
                          </div>

                          <!-- Team Settings -->
                          <DropdownLink
                            :href="
                              route('teams.show', $page.props.user.current_team)
                            "
                          >
                            Team Settings
                          </DropdownLink>

                          <DropdownLink
                            v-if="$page.props.jetstream.canCreateTeams"
                            :href="route('teams.create')"
                          >
                            Create New Team
                          </DropdownLink>

                          <div class="border-t border-gray-100" />

                          <!-- Team Switcher -->
                          <div class="block px-4 py-2 text-xs text-gray-400">
                            Switch Teams
                          </div>

                          <template
                            v-for="team in $page.props.user.all_teams"
                            :key="team.id"
                          >
                            <form @submit.prevent="switchToTeam(team)">
                              <DropdownLink as="button">
                                <div class="flex items-center">
                                  <svg
                                    v-if="
                                      team.id ==
                                      $page.props.user.current_team_id
                                    "
                                    class="mr-2 h-5 w-5 text-green-400"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                  >
                                    <path
                                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                    />
                                  </svg>
                                  <div>{{ team.name }}</div>
                                </div>
                              </DropdownLink>
                            </form>
                          </template>
                        </template>
                      </div>
                    </template>
                  </Dropdown>
                </div>

                <Dropdown align="center" class="mr-5" width="lg">
                            <template #trigger>
                                <i class="fa-solid fa-bell text-gray-300 text-xl hover:text-white cursor-pointer"></i>
                            </template>
                            <template #content>
                            <div class="text-sm text-white p-3 felx flex-row space-y-3 h-48 overflow-auto">
                                <p>Aquí van tus notificaciones</p>
                                <p>Aquí van tus notificaciones para prueba de deasas</p>
                                <p>Aquí van tus notificaciones</p>
                                <p>Aquí van tus notificaciones dsgfsdgf dgdrfg sdg d</p>
                                <p>Aquí van tus notificaciones</p>
                                <p>Aquí van tus notificaciones para prueba de deasas</p>
                                <p>Aquí van tus notificaciones</p>
                                <p>Aquí van tus notificaciones dsgfsdgf dgdrfg sdg d</p>
                                <p>Aquí van tus notificaciones</p>
                                <p>Aquí van tus notificaciones para prueba de deasas</p>
                                <p>Aquí van tus notificaciones</p>
                                <p>Aquí van tus notificaciones dsgfsdgf dgdrfg sdg d</p>
                            </div>
                            </template>
                            </Dropdown>
                
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                  <Dropdown align="right" width="48">
                    <template #trigger>
                      <button
                        v-if="$page.props.jetstream.managesProfilePhotos"
                        class="
                          flex
                          text-sm
                          border-2 border-transparent
                          rounded-full
                          focus:outline-none focus:border-gray-300
                          transition
                        "
                      >
                        <img
                          class="h-8 w-8 rounded-full object-cover"
                          :src="$page.props.user.profile_photo_url"
                          :alt="$page.props.user.name"
                        />
                      </button>

                      <span v-else class="inline-flex rounded-md">
                        <button
                          type="button"
                          class="
                            inline-flex
                            items-center
                            px-3
                            py-2
                            border border-gray-600
                            text-sm
                            leading-4
                            font-medium
                            rounded-md
                            text-gray-600
                            bg-gray-300
                            hover:text-teal-800
                            hover:border-teal-600
                            focus:outline-none
                            transition
                          "
                        >
                          {{ $page.props.user.name }}

                          <svg
                            class="ml-2 -mr-0.5 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"
                            />
                          </svg>
                        </button>
                      </span>
                    </template>
                    
                    <template #content>
                      <!-- Account Management -->
                      <div class="block px-4 py-2 text-xs text-white">
                        Manage Account
                      </div>

                      <DropdownLink :href="route('profile.show')">
                        Profile
                      </DropdownLink>

                      <DropdownLink
                        v-if="$page.props.jetstream.hasApiFeatures"
                        :href="route('api-tokens.index')"
                      >
                        API Tokens
                      </DropdownLink>

                      <div class="border-t border-gray-100" />

                      <!-- Authentication -->
                      <form @submit.prevent="logout">
                        <DropdownLink as="button"> Log Out </DropdownLink>
                      </form>
                    </template>
                  </Dropdown>
                </div>
              </div>

              <!-- Hamburger -->
              
              <div class="-mr-2 flex items-center sm:hidden">

              <Dropdown align="right" class="mr-3">
                            <template #trigger>
                                <i class="fa-solid fa-bell text-gray-200 text-lg"></i>
                            </template>
                            <template #content>
                            <div class="text-xs text-white p-3 felx flex-row space-y-3 h-48 overflow-auto">
                                <p>Aquí van tus notificaciones</p>
                                <p>Aquí van tus notificaciones para prueba de deasas</p>
                                <p>Aquí van tus notificaciones</p>
                                <p>Aquí van tus notificaciones dsgfsdgf dgdrfg sdg d</p>
                                <p>Aquí van tus notificaciones</p>
                                <p>Aquí van tus notificaciones para prueba de deasas</p>
                                <p>Aquí van tus notificaciones</p>
                                <p>Aquí van tus notificaciones dsgfsdgf dgdrfg sdg d</p>
                                <p>Aquí van tus notificaciones</p>
                                <p>Aquí van tus notificaciones para prueba de deasas</p>
                                <p>Aquí van tus notificaciones</p>
                                <p>Aquí van tus notificaciones dsgfsdgf dgdrfg sdg d</p>
                            </div>
                            </template>
                            </Dropdown>

                <button
                  class="
                    inline-flex
                    items-center
                    justify-center
                    p-2
                    rounded-md
                    text-gray-400
                    hover:text-gray-500 hover:bg-gray-100
                    focus:outline-none focus:bg-gray-100 focus:text-gray-500
                    transition
                  "
                  @click="
                    showingNavigationDropdown = !showingNavigationDropdown
                  "
                >
                  <svg
                    class="h-6 w-6"
                    stroke="currentColor"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      :class="{
                        hidden: showingNavigationDropdown,
                        'inline-flex': !showingNavigationDropdown,
                      }"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"
                    />
                    <path
                      :class="{
                        hidden: !showingNavigationDropdown,
                        'inline-flex': showingNavigationDropdown,
                      }"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"
                    />
                  </svg>
                </button>
                
              </div>
            </div>
          </div>
            
          <!-- Responsive Navigation Menu -->
          <div
            :class="{
              block: showingNavigationDropdown,
              hidden: !showingNavigationDropdown,
            }"
            class="sm:hidden"
          >
            <div class="pt-2 pb-3 space-y-1">
              <ResponsiveNavLink
                :href="route('dashboard')"
                :active="route().current('dashboard')"
              >
              <svg
                class="w-6 h-6 fill-current inline-block"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                ></path>
              </svg>
                Dashboard
              </ResponsiveNavLink>
              <ResponsiveNavLink
                :href="route('guest.index')"
                :active="route().current('guest.*')"
              >
              <svg
                class="w-6 h-6 fill-current inline-block"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                ></path>
              </svg>
                Visitas
              </ResponsiveNavLink>
              <ResponsiveNavLink
                :href="route('payments.index')"
                :active="route().current('payments.*')"
              >
              <i class="fa-solid fa-credit-card"></i>
                Pagos
              </ResponsiveNavLink>
              <ResponsiveNavLink
                :href="route('neighborhood.index')"
                :active="route().current('neighborhood.*')"
              >
              <i class="fa-solid fa-bullhorn"></i>
                Sección Vecinal
              </ResponsiveNavLink>
              <a
                :href="route('chatify')"
                class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-300 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-400 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition"
              >
              <svg
                class="w-6 h-6 fill-current inline-block"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"
                ></path>
                <path
                  d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"
                ></path>
              </svg>
                Chat
              </a>
              <ResponsiveNavLink
                :href="route('reservation-facilities.index')"
                :active="route().current('reservation-facilities.*')"
              >
              <svg
                class="w-6 h-6 fill-current inline-block"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                  clip-rule="evenodd"
                ></path>
              </svg>
                Reservación de Areas
              </ResponsiveNavLink>
              <ResponsiveNavLink
                :href="route('dashboard')"
                :active="false"
              >
              <i class="fa-solid fa-headset text-lg"></i>
                 Administración
              </ResponsiveNavLink>
              <ResponsiveNavLink
                :href="route('internal-services.index')"
                :active="route().current('internal-services.*')"
              >
              <i class="fa-solid fa-people-group text-lg"></i>
                 Servicios
              </ResponsiveNavLink>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
              <div class="flex items-center px-4">
                <div
                  v-if="$page.props.jetstream.managesProfilePhotos"
                  class="shrink-0 mr-3"
                >
                  <img
                    class="h-10 w-10 rounded-full object-cover"
                    :src="$page.props.user.profile_photo_url"
                    :alt="$page.props.user.name"
                  />
                </div>

                <div>
                  <div class="font-medium text-base text-white">
                    {{ $page.props.user.name }}
                  </div>
                  <div class="font-medium text-sm text-gray-400">
                    {{ $page.props.user.email }}
                  </div>
                </div>
              </div>

              <div class="mt-3 space-y-1">
                <ResponsiveNavLink
                  :href="route('profile.show')"
                  :active="route().current('profile.show')"
                >
                  Profile
                </ResponsiveNavLink>

                <ResponsiveNavLink
                  v-if="$page.props.jetstream.hasApiFeatures"
                  :href="route('api-tokens.index')"
                  :active="route().current('api-tokens.index')"
                >
                  API Tokens
                </ResponsiveNavLink>

                <!-- Authentication -->
                <form method="POST" @submit.prevent="logout">
                  <ResponsiveNavLink as="button"> Log Out </ResponsiveNavLink>
                </form>

                <!-- Team Management -->
                <template v-if="$page.props.jetstream.hasTeamFeatures">
                  <div class="border-t border-gray-200" />

                  <div class="block px-4 py-2 text-xs text-gray-400">
                    Manage Team
                  </div>

                  <!-- Team Settings -->
                  <ResponsiveNavLink
                    :href="route('teams.show', $page.props.user.current_team)"
                    :active="route().current('teams.show')"
                  >
                    Team Settings
                  </ResponsiveNavLink>

                  <ResponsiveNavLink
                    v-if="$page.props.jetstream.canCreateTeams"
                    :href="route('teams.create')"
                    :active="route().current('teams.create')"
                  >
                    Create New Team
                  </ResponsiveNavLink>

                  <div class="border-t border-gray-200" />

                  <!-- Team Switcher -->
                  <div class="block px-4 py-2 text-xs text-gray-400">
                    Switch Teams
                  </div>

                  <template
                    v-for="team in $page.props.user.all_teams"
                    :key="team.id"
                  >
                    <form @submit.prevent="switchToTeam(team)">
                      <ResponsiveNavLink as="button">
                        <div class="flex items-center">
                          <svg
                            v-if="team.id == $page.props.user.current_team_id"
                            class="mr-2 h-5 w-5 text-green-400"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                          >
                            <path
                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                          </svg>
                          <div>{{ team.name }}</div>
                        </div>
                      </ResponsiveNavLink>
                    </form>
                  </template>
                </template>
              </div>
            </div>
          </div>
        </nav>

        <!-- Page Heading -->
        <header v-if="$slots.header" class="bg-gray-300 shadow-md shadow-gray-400 rounded-b-md">
          <div class="mx-auto py-2 px-4 sm:px-6 lg:px-8">
            <slot name="header" />
          </div>
        </header>
        
        <div
          class="
            overflow-y-auto
            h-[calc(100vh-6.7rem)]
            transition-dark
            dark:bg-slate-900
          "
        >
          <slot />
        </div>
      </main>
    </div>
  </div>
</template>
