<script setup lang="ts">
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
