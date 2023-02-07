<template>
  <AppLayout :title="post.title">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Post: {{ post.title }}
      </h2>
    </template>
    <div class="flex justify-start ml-2">
      <Link :href="route('neighborhood.index')" class="flex items-center mt-2 text-slate-700">
      <i class="fas fa-long-arrow-alt-left text-lg hover:bg-gray-200 rounded-full w-7 h-7 pl-1"></i>
      <span class="ml-1 cursor-default">Atrás</span>
      </Link>
    </div>

    <!-- <div class="py-12">
      <div class="max-w-7xl mx-auto xs:px-3 lg:px-8">
        <div class="lg:grid grid-cols-3 gap-4">
          <PostCard v-for="post in posts.data" :key="post.id" :post="post" />
        </div>
      </div>
    </div> -->
  </AppLayout>
</template>
<script>

import AppLayout from "@/Layouts/AppLayout.vue";
import PostCard from "@/Components/Cards/PostCard.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    AppLayout,
    PostCard,
    SecondaryButton,
    Link,
  },
  props: {
    post: Object,
  },
};
</script>
