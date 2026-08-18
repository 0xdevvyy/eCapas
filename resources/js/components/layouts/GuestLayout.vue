<script setup lang="ts">
import Footer from '../Footer.vue';
import AppHeader from '../navigation/AppHeader.vue';
</script>

<template>
    <div class="min-h-screen bg-background text-foreground">
        <AppHeader />
        <main>
            <slot />
        </main>
    </div>
    <Footer />
</template>
