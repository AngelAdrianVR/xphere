<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type" class="shadow-md shadow-gray-700/100 inline-flex items-center px-4 py-2 bg-slate-700 rounded-full font-semibold text-xs text-gray-200 uppercase tracking-widest hover:bg-slate-900 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-100 active:bg-slate-600 disabled:opacity-25 transition">
        <slot />
    </button>
</template>
