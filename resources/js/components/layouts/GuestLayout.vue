<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import Preload from '../ui/loader/Preload.vue';


</script>

<template>
    <!-- preload page is only for home -->
    <Preload /> 
    <slot />
</template>