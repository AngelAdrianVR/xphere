<template>
  <AppLayout title="Visitas">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Visitas</h2>
    </template>

    <div class="my-4 border-b border-gray-300">
      <Tabs :tabs="tabs" />
    </div>

    <div class="flex justify-end">
      <Link :href="route('guest.create')">
        <SecondaryButton class="mr-7 my-4">Programar Visita</SecondaryButton>
      </Link>
    </div>
    <SearchInput :filters="filters" filterURL="/guest" />
    <GuestsTable :guests="guests" />
    <div class="flex justify-end">
      <Pagination :pagination="guests" />
    </div>
  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import GuestsTable from "@/Components/GuestsTable.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
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
          url: "guest-events.index",
        },
      ],
    };
  },

  components: {
    AppLayout,
    GuestsTable,
    Link,
    SecondaryButton,
    Pagination,
    SearchInput,
    Tabs,
  },

  props: {
    guests: Object,
    filters: Object,
    filterURL: String,
  },

  methods: {},
};
</script>