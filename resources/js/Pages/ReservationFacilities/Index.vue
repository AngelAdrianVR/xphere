<template>
  <AppLayout title="Reservación de Areas">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Reservación de Áreas
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto xs:px-3 lg:px-8">
        <div class="lg:grid grid-cols-3 gap-4">
          <Link
            v-for="post in posts.data"
            :key="post.id"
            :href="route('neighborhood.show', post.id)"
          >
            <PostCard :post="post" />
            <hr>
          </Link>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
export default {
  data() {
    return {};
  },

  components: {
    AppLayout,
    Link,
    PrimaryButton,
    SecondaryButton,
  },

  props: {},

  methods: {},
};
</script>