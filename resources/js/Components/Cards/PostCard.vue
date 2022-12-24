<template>
    <div class="bg-gray-50 rounded-md border-2 shadow-md cursor-pointer hover:border-cyan-600 px-2 py-1">
        <header class="flex justify-between items-center">
            <div>
                <p class="flex">
                    <i class="fa-solid fa-thumbs-up mr-1"></i>
                    <span>10</span>
                </p>
                <p class="flex">
                    <i class="fa-solid fa-comment mr-1"></i>
                    <span>4</span>
                </p>
                <p class="flex">
                    <i class="fa-solid fa-image mr-1"></i>
                    <span>2</span>
                </p>
            </div>
            <small class="text-gray-500">{{ post.created_at }}</small>
        </header>
        <main>
            <div class="flex items-center mb-4">
                <i class="fa-solid fa-house text-lg"></i>
                <span>{{ post.user_id }}</span>
            </div>
            <div>
                <h1 class="font-bold text-lg text-gray-900">{{ post.title }}</h1>
                <p class="text-sm text-gray-700">{{ post.content }}</p>
            </div>
        </main>
    </div>
</template>
<script>
export default {
    props: {
        post: Object,
    }
}
</script>
