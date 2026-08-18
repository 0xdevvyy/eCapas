<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import {
    ArrowRight,
    CalendarDays,
    CheckCircle2,
    FileCheck2,
    FileText,
    MessageSquareCheck,
    QrCode,
    SearchCheck,
    ShieldCheck,
    Sparkles,
} from '@lucide/vue';
import GhostButton from '@/components/ui/button/GhostButton.vue';
import PrimaryButton from '@/components/ui/button/PrimaryButton.vue';
import Card from '@/components/ui/card/Card.vue';
import CardContent from '@/components/ui/card/CardContent.vue';
import IconBox from '@/components/ui/icons/IconBox.vue';
import Pill from '@/components/ui/pill/Pill.vue';
import Section from '@/components/ui/section/Section.vue';

const services = [
    {
        title: 'Barangay Clearance',
        description: 'Request your barangay clearance online.',
        icon: FileText,
    },
    {
        title: 'Certificate of Residency',
        description: 'Proof of residency for various transactions.',
        icon: FileCheck2,
    },
    {
        title: 'Business Clearance',
        description: 'For business permits and other requirements.',
        icon: FileCheck2,
    },
    {
        title: 'Indigency Certificate',
        description: 'For financial assistance and other needs.',
        icon: ShieldCheck,
    },
];

const features = [
    {
        title: 'Online Requests',
        description: 'Submit requests conveniently online.',
        icon: MessageSquareCheck,
    },
    {
        title: 'Status Tracking',
        description: 'Track your request in real-time.',
        icon: SearchCheck,
    },
    {
        title: 'QR Verification',
        description: 'Secure QR code verification.',
        icon: QrCode,
    },
    {
        title: 'PDF Generation',
        description: 'Download documents in PDF format.',
        icon: FileText,
    },
    {
        title: 'Appointment',
        description: 'Schedule your appointment.',
        icon: CalendarDays,
    },
];
</script>

<template>
    <Head title="Home" />
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
                <Pill class="bg-secondary/10 px-3 py-1.5 text-accent">
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
                    documents anytime, anywhere without the hassle of long
                    queues.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <Link href="/request">
                        <PrimaryButton>
                            Request Now
                            <ArrowRight aria-hidden="true" class="size-4" />
                        </PrimaryButton>
                    </Link>

                    <Link href="/services">
                        <GhostButton> Learn More </GhostButton>
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
            <div class="relative hidden sm:block">
                <div
                    class="absolute inset-0 rounded-3xl bg-secondary/10 blur-3xl"
                />

                <div
                    class="relative aspect-[4/3] overflow-hidden rounded-3xl border border-border bg-card shadow-2xl shadow-black/20"
                >
                    <!-- will change this image -->
                    <img
                        src="/images/footer-image.png"
                        alt="Digital document verification illustration"
                        class="object-fit h-full w-full"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Service -->
    <Section>
        <!-- Section Header -->
        <div class="mb-8">
            <p
                class="text-sm font-semibold tracking-wider text-accent uppercase"
            >
                Our Services
            </p>

            <h2 class="mt-2 text-2xl font-bold tracking-tight">
                Services We Offer
            </h2>

            <p class="mt-2 max-w-2xl text-sm leading-6 text-muted-foreground">
                Access commonly requested barangay documents without having to
                visit the barangay hall.
            </p>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <Link
                v-for="service in services"
                :key="service.title"
                href="/services"
            >
                <Card class="hover-bounce rounded-xl border text-center">
                    <CardContent>
                        <div
                            class="mx-auto flex size-14 items-center justify-center rounded-xl border border-secondary/30 bg-secondary/10 text-accent transition-colors group-hover:bg-secondary/20"
                        >
                            <IconBox>
                                <component
                                    :is="service.icon"
                                    class="size-7"
                                    :stroke-width="1.7"
                                />
                            </IconBox>
                        </div>

                        <h3 class="mt-5 text-sm font-semibold">
                            {{ service.title }}
                        </h3>

                        <p
                            class="mx-auto mt-2 max-w-[200px] text-xs leading-5 text-muted-foreground"
                        >
                            {{ service.description }}
                        </p>
                    </CardContent>
                </Card>
            </Link>
        </div>
        <div
            class="mt-20 overflow-hidden rounded-3xl border border-border bg-card"
        >
            <div
                class="grid divide-y divide-border sm:grid-cols-2 sm:divide-x sm:divide-y-0 lg:grid-cols-5 lg:divide-x"
            >
                <Card
                    v-for="feature in features"
                    :key="feature.title"
                    class="text-center"
                >
                    <CardContent>
                        <div
                            class="mx-auto flex size-14 items-center justify-center rounded-xl border border-secondary/30 bg-secondary/10 text-accent transition-colors group-hover:bg-secondary/20"
                        >
                            <IconBox>
                                <component
                                    :is="feature.icon"
                                    class="size-6"
                                    :stroke-width="1.7"
                                />
                            </IconBox>
                        </div>

                        <h3 class="mt-4 text-sm font-semibold">
                            {{ feature.title }}
                        </h3>

                        <p class="mt-2 text-xs leading-5 text-muted-foreground">
                            {{ feature.description }}
                        </p>
                    </CardContent>
                </Card>
            </div>
        </div>
    </Section>
</template>
