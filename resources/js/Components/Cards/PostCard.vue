<template>
  <div
    class="rounded-lg cursor-pointer border-2 border-gray-200 hover:border-cyan-600 px-2 py-2 mb-3 transition ease-in-out bg-white"
  >
    <Link :href="route('neighborhood.show', post.id)">
      <div class="flex items-center my-2">
        <i class="fa-solid fa-house text-lg mr-2 text-gray-800"></i>
        <div class="flex flex-col">
          <span>{{ post.user.name }}</span>
          <small class="text-gray-500 -mt-1">{{ post.created_at }}</small>
        </div>
      </div>
      <div class="bg-gray-200 border-2 shadow-md rounded-md px-2 py-1">
        <main>
          <div>
            <h1 class="font-bold text-lg text-gray-700">{{ post.title }}</h1>
            <p class="text-sm text-gray-700 truncate">
              {{ post.content }}
            </p>
          </div>
        </main>
      </div>
    </Link>
    <footer class="flex justify-center items-center">
      <div class="flex space-x-3 text-gray-600 mt-2">
        <!-- <p class="flex items-center">
          <i class="fa-regular fa-thumbs-up rounded-full p-1"></i>
          <span>10</span>
        </p> -->
        <p class="flex items-center">
          <i class="fa-regular fa-comment rounded-full p-1"></i>
          <span>{{post.comments.length  }}</span>
        </p>
        <p class="flex items-center">
          <i class="fa-regular fa-image rounded-full p-1"></i>
          <span>{{post.media.length}}</span>
        </p>
      </div>
    </footer>
  </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
  props: {
    post: Object,
  },
  components: {
    Link,
  },
};
</script>
