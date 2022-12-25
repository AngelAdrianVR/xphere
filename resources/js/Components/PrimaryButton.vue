<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 bg-cyan-800 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-cyan-600 active:bg-cyan-900 focus:outline-none focus:border-gray-300 focus:ring focus:ring-cyan-500 disabled:opacity-25 transition">
        <slot />
    </button>
</template>
