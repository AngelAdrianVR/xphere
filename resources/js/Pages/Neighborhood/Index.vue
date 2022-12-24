<template>
    <AppLayout title="Sección vecinal">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Sección vecinal
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="lg:grid grid-cols-3 gap-4">
                    <PostCard v-for="post in posts.data" :key="post.id" :post="post" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import PostCard from '@/Components/Cards/PostCard.vue'

export default {
    components: {
        AppLayout,
        PostCard,
    },
    props: {
        posts: Object,
    }
}
</script>
