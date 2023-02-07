<template>
  <AppLayout title="Visitas Favoritas">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Visitas Favoritas</h2>
    </template>

    <div class="my-4 border-b border-gray-300">
      <Tabs :tabs="tabs" />
    </div>

    <div class="flex justify-end">
      <Link :href="route('favorite-guests.create')">
        <SecondaryButton class="mr-7 my-4">Agregar</SecondaryButton>
      </Link>
    </div>
    <SearchInput :filters="filters" filterURL="/guest/favorites" />
    <FavoriteGuestTable :favorite_guests="favorite_guests" />
    <!-- <div class="flex justify-end">
      <Pagination :pagination="favorite_guests" />
    </div> -->
  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import FavoriteGuestTable from "@/Components/FavoriteGuestTable.vue";
import { Link } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import Pagination from "@/Components/Pagination.vue";
import SearchInput from "@/Components/SearchInput.vue";
import Tabs from "@/Components/Tabs.vue";

export default {
  data() {
    return {
      tabs: [
        {
          label: "Bitácora",
          url: "guest.index",
        },
        {
          label: "Favoritos",
          url: "favorite-guests.index",
        },
        {
          label: "Eventos",
          url: "guest.events",
        },
      ],
    };
  },

  components: {
    AppLayout,
    FavoriteGuestTable,
    Link,
    PrimaryButton,
    SecondaryButton,
    Pagination,
    SearchInput,
    Tabs,
  },

  props: {
    favorite_guests: Object,
    // filters: Object,
    // filterURL: String,
  },

  methods: {},
};
</script>