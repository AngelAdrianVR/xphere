<template>
    <div class="bg-gray-50 rounded-md border-2 shadow-md cursor-pointer hover:border-cyan-600 px-2 py-1">
        <header class="flex justify-between items-center">
            <div class="flex space-x-3">
                <p class="flex items-center">
                    <i class="fa-regular fa-thumbs-up mr-1"></i>
                    <span>10</span>
                </p>
                <p class="flex items-center">
                    <i class="fa-regular fa-comment mr-1"></i>
                    <span>4</span>
                </p>
                <p class="flex items-center">
                    <i class="fa-regular fa-image mr-1"></i>
                    <span>2</span>
                </p>
            </div>
            <small class="text-gray-500">{{ post.created_at }}</small>
        </header>
        <main>
            <div class="flex items-center my-2">
                <i class="fa-solid fa-house text-lg mr-1"></i>
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
