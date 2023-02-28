<template>
  <AppLayout :title="post.data.title">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ post.data.title }}
      </h2>
    </template>
    <div class="flex justify-start ml-2">
      <Link
        :href="route('neighborhood.index')"
        class="flex items-center mt-2 text-slate-700"
      >
        <i
          class="fas fa-long-arrow-alt-left text-lg hover:bg-gray-200 rounded-full w-7 h-7 pl-1"
        ></i>
        <span class="ml-1 cursor-default">Atrás</span>
      </Link>
    </div>

    <div
      class="max-w-2xl md:mx-auto mt-5 shadow-md shadow-gray-500/70 rounded-lg px-5 py-8 bg-white mx-4"
    >
      <div class="flex items-center my-2">
        <i class="fa-solid fa-house text-lg mr-2 text-gray-700"></i>
        <div class="flex flex-col">
          <span>{{ post.data.user.name }}</span>
          <small class="text-gray-500 -mt-1">{{ post.data.created_at }}</small>
        </div>
      </div>
      <div
        class="bg-gray-200 border-2 shadow-md shadow-gray-400/70 rounded-md px-2 py-1"
      >
        <main>
          <div class="my-1">
            <h1 class="font-bold text-lg text-gray-700">
              {{ post.data.title }}
            </h1>
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
      <footer
        class="flex justify-between items-center w-full border-b-2 border-gray-200"
      >
        <div class="flex space-x-3 text-gray-600 mt-2">
          <button
            @click="comment_toggle()"
            class="p-1 rounded-lg hover:bg-gray-300/50"
          >
            <p class="flex items-center">
              <i class="fa-regular fa-comment rounded-full p-1"></i>
              <span>Comentar</span>
            </p>
          </button>
        </div>
      </footer>
      <form @submit.prevent="store">
        <div
          v-if="comment"
          class="relative flex items-center z-0 mb-6 w-[99%] group mt-4"
        >
          <textarea
            v-model="form.message"
            type="text"
            rows="1"
            name="floating_content"
            autocomplete="off"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-cyan-600 peer"
            placeholder=" "
          />
          <label
            for="floating_content"
            class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-cyan-600 peer-focus:dark:text-cyan-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Escribe tu comentario..</label
          >
          <InputError :message="$page.props?.errors.message" />
          <PrimaryButton class="ml-5 mt-4"
            ><i class="fa-solid fa-paper-plane"></i
          ></PrimaryButton>
        </div>
      </form>
      
      <!-- ------------comment----------------- -->
      <div v-for="(comment, index) in post.data.comments" :key="comment.id">
        <div
          class="flex items-center my-3 bg-sky-200 rounded-lg shadow-md shadow-gray-300/100 px-2 py-1 relative"
        >
          <div class="flex flex-col">
          <i class="fa-solid fa-house text-lg mr-2 text-gray-600"></i>
            <span class="font-bold">{{ comment.user.name }}</span>
            <small class="text-gray-500 -mt-1">{{ comment.created_at }}</small>
            <p class="text-sm my-1">{{ comment.message }}</p>
            <p @click="replyToggle" class="font-semibold text-cyan-700 hover:text-cyan-500 cursor-pointer">Responder</p> 

            <form @submit.prevent="storeReply">
        <div
          v-if="reply"
          class="relative flex items-center z-0 mb-6 w-[99%] group mt-4"
        >
          <textarea
            v-model="form.message_reply"
            type="text"
            rows="1"
            name="floating_content"
            autocomplete="off"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-1100 appearance-none focus:outline-none focus:ring-0 focus:border-cyan-600 peer"
            placeholder=" "
          />
          <label
            for="floating_content"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-cyan-600 peer-focus:dark:text-cyan-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Escribe una respuesta</label
          >
          <InputError :message="$page.props?.errors.message_reply" />
          <PrimaryButton class="ml-5 mt-4"
            ><i class="fa-solid fa-paper-plane"></i
          ></PrimaryButton>
        </div>
      </form>
      
          </div>

          <i
            class="fa-solid fa-ellipsis-vertical absolute top-3 right-3 text-gray-600 p-2 rounded-full hover:bg-sky-300 cursor-pointer"
            @click="dropdownOpen = !dropdownOpen"
          >
          </i>
          <div
            v-show="dropdownOpen"
            class=" absolute right-10 mt-2 w-24 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5"
            role="menu"
            aria-orientation="vertical"
            aria-labelledby="options-menu"
          >
            <div class="py-1 Z-10" role="none">
              <a
                href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 hover:text-gray-900"
                role="menuitem"
                @click="editItem"
                >Editar</a
              >
              <a
                href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 hover:text-gray-900"
                role="menuitem"
                @click="deleteItem"
                >Eliminar</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import PostCard from "@/Components/Cards/PostCard.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import { Link, useForm } from "@inertiajs/inertia-vue3";
import InputError from "@/Components/InputError.vue";
import DropButtonGPT from "@/Components/DropButtonGPT.vue";

export default {
  data() {
    const form = useForm({
      message: "",
      message_reply: "",
      post_id: this.post.data.id,
    });

    return {
      comment: false,
      reply: false,
      form,
      dropdownOpen: false,
    };
  },
  components: {
    AppLayout,
    PostCard,
    PrimaryButton,
    Link,
    InputLabel,
    InputError,
    DropButtonGPT,
  },
  props: {
    post: Object,
  },
  methods: {
    comment_toggle() {
      this.comment = !this.comment;
    },
    replyToggle() {
      this.reply = !this.reply;
    },
    store() {
      this.form.post(route("comments.store"));
      this.form.message = "";
    },
    storeReply() {
      this.form.post(route("comments.store"));
      this.form.message = "";
    },
    editItem() {
      // Lógica para editar el elemento seleccionado
    },
    deleteItem() {
      // Lógica para eliminar el elemento seleccionado
    },
  },
};
</script>
