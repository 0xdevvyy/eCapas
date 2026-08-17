<script setup lang="ts">
import GhostButton from '@/components/ui/button/GhostButton.vue';
import PrimaryButton from '@/components/ui/button/PrimaryButton.vue';
import Preload from '@/components/ui/loader/Preload.vue';
import Pill from '@/components/ui/pill/Pill.vue';
import { Link } from '@inertiajs/vue3';
import { ArrowRight, CheckCircle2, FileText, QrCode, ShieldCheck, Sparkles } from '@lucide/vue';

</script>

<template>
    <Preload />
    <!-- Hero -->
    <section class="relative overflow-hidden border-b border-border/50">
        <!-- Decorative background -->
        <div
            class="pointer-events-none absolute -top-40 -left-40 size-96 rounded-full bg-secondary/10 blur-3xl"
        />

        <div
            class="pointer-events-none absolute top-20 -right-40 size-96 rounded-full bg-accent/10 blur-3xl"
        />

        <div
            class="relative mx-auto grid max-w-7xl items-center gap-16 px-6 py-20 lg:grid-cols-2 lg:px-8 lg:py-28"
        >
            <!-- Hero content -->
            <div class="max-w-xl">
                <Pill class=" px-3 py-1.5 bg-secondary/10 text-accent">
                    <Sparkles class="size-3.5" />
                    Convenient Municipal Services
                </Pill>

                <h1
                    class="text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl"
                >
                    Request Municipal
                    <span class="text-accent">Documents Online</span>
                </h1>

                <p
                    class="mt-6 max-w-lg text-base leading-7 text-muted-foreground sm:text-lg"
                >
                    Fast, easy, and secure. Request your Barangay/Municipal
                    documents anytime, anywhere without the hassle of
                    long queues.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <Link
                        href="/request"
                    >
                       <PrimaryButton>
                            Request Now
                            <ArrowRight aria-hidden="true" class="size-4" />
                       </PrimaryButton>
                    </Link>

                    <Link
                        href="/services"
                    >
                        <GhostButton>
                            Learn More
                        </GhostButton>
                       
                    </Link>
                </div>

                <!-- Trust indicators -->
                <div
                    class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-3 text-xs text-muted-foreground"
                >
                    <div class="flex items-center gap-2">
                        <CheckCircle2 class="size-4 text-accent" />
                        Secure Requests
                    </div>

                    <div class="flex items-center gap-2">
                        <CheckCircle2 class="size-4 text-accent" />
                        Track Your Documents Online
                    </div>

                    <div class="flex items-center gap-2">
                        <CheckCircle2 class="size-4 text-accent" />
                        Digital Documents
                    </div>
                </div>
            </div>

            <!-- Hero illustration -->
            <div class="relative">
                <div
                    class="absolute inset-0 rounded-3xl bg-secondary/10 blur-3xl"
                />

                <div
                    class="relative aspect-[4/3] overflow-hidden rounded-3xl border border-border bg-card shadow-2xl shadow-black/20"
                >
                    <!-- will change this image -->
                    <img
                        src="/images/municipal-hall.png"
                        alt="Digital document verification illustration"
                        class="h-full w-full object-fit"
                    />
                </div>
            </div>
        </div>
    </section>
</template>