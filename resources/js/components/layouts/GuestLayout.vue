<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import AppHeader from '../navigation/AppHeader.vue';
</script>

<template>
  
    <div class="min-h-screen bg-background text-foreground">
        <AppHeader />
        <main>
            <slot />
        </main>
    </div>
</template>
