<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/components/layouts/GuestLayout.vue';
import Preload from '@/components/ui/loader/Preload.vue';
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <GuestLayout>
        <Link href="/test" preload> hello </Link>
    </GuestLayout>
</template>
