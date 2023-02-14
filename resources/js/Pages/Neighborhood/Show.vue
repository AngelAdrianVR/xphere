<template>
  <AppLayout :title="post.data.title">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ post.data.title }}
      </h2>
    </template>
    <div class="flex justify-start ml-2">
      <Link :href="route('neighborhood.index')" class="flex items-center mt-2 text-slate-700">
      <i class="fas fa-long-arrow-alt-left text-lg hover:bg-gray-200 rounded-full w-7 h-7 pl-1"></i>
      <span class="ml-1 cursor-default">Atrás</span>
      </Link>
    </div>

    <div class="max-w-2xl md:mx-auto mt-5 shadow-md shadow-gray-500/70 rounded-lg px-5 py-8 bg-white mx-4">
      <div class="flex items-center my-2">
        <i class="fa-solid fa-house text-lg mr-2 text-gray-700"></i>
        <div class="flex flex-col">
          <span>{{ post.data.user.name }}</span>
          <small class="text-gray-500 -mt-1">{{ post.data.created_at }}</small>
        </div>
      </div>
      <div class="bg-gray-200 border-2 shadow-md shadow-gray-400/70 rounded-md px-2 py-1">
        <main>
          <div class="my-1">
            <h1 class="font-bold text-lg text-gray-700">{{ post.data.title }}</h1>
            <p class="text-sm text-gray-700 max-h-20 overflow-hidden">
              {{ post.data.content }}
            </p>
          </div>
          <div class="mt-5">
            <InputLabel class="text-gray-400" value="Imágenes" />
            <div
              class="flex flex-col"
              v-for="file in post.data.media"
              :key="file.id"
            >
              <div>
                <a
                  :href="file.original_url"
                  target="_blank"
                  class="text-sm text-cyan-600 hover:underline"
                  >{{ file.name }}
                </a>
              </div>
            </div>
            </div>
        </main>
      </div>
      <footer class="flex justify-between items-center w-full border-b-2 border-gray-200">
      <div class="flex space-x-3 text-gray-600 mt-2">
        <p class="flex items-center">
        <button @click="" class="p-1 rounded-lg hover:bg-gray-300/50 text-cyan-600">
          <i class="fa-regular fa-thumbs-up rounded-full p-1"></i>
          <span>Me Gusta</span>
        </button>  
        </p>
        <button @click="comment_toggle()" class="p-1 rounded-lg hover:bg-gray-300/50">
        <p class="flex items-center">
          <i class="fa-regular fa-comment rounded-full p-1"></i>
          <span>Comentar</span>
        </p>
        </button>
      </div>
    </footer>
      <div v-if="comment" class="relative flex items-center z-0 mb-6 w-[99%] group mt-4">
        <textarea type="text" rows="1" name="floating_content" autocomplete="off" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-cyan-500 focus:outline-none focus:ring-0 focus:border-cyan-600 peer" placeholder=" " />
        <label for="floating_content" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-cyan-600 peer-focus:dark:text-cyan-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Escribe tu comentario</label>
        <PrimaryButton class="ml-5 mt-4"><i class="fa-solid fa-paper-plane"></i></PrimaryButton>
    </div>
      
    </div>


  </AppLayout>
</template>
<script>

import AppLayout from "@/Layouts/AppLayout.vue";
import PostCard from "@/Components/Cards/PostCard.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
  data(){
    return{
      comment: 0,
    }
  },
  components: {
    AppLayout,
    PostCard,
    PrimaryButton,
    Link,
    InputLabel,
  },
  props: {
    post: Object,
  },
  methods:{
    comment_toggle(){
      this.comment = !this.comment
    }

  },
};
</script>
