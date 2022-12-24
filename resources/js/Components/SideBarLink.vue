<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'inline-flex items-center py-2 px-2 bg-gradient-to-r from-teal-700 to-teal-300 font-semibold text-sm leading-5 text-white transition rounded-lg'
        : 'inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-700 py-2 px-2 hover:bg-gradient-to-r from-teal-700 to-teal-300 hover:text-white rounded-lg transition';
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
