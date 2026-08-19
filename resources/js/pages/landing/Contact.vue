<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import {
    ArrowRight,
    Building2,
    CalendarDays,
    CheckCircle2,
    Clock3,
    FileText,
    HelpCircle,
    Mail,
    MapPin,
    MessageSquare,
    Phone,
} from '@lucide/vue';

import Card from '@/components/ui/card/Card.vue';
import CardContent from '@/components/ui/card/CardContent.vue';

const contactChannels = [
    {
        title: 'Municipal Office',
        description:
            'For municipal-level services, requests, and general government concerns.',
        icon: Building2,
        value: 'Municipality of Capas',
        action: 'Capas Municipal Hall, Capas, Tarlac 2315',
    },
    {
        title: 'Email',
        description:
            'Send general inquiries and concerns to the appropriate office.',
        icon: Mail,
        value: 'Official email address',
        action: 'info@capas.gov.ph',
    },
    {
        title: 'Telephone',
        description:
            'Contact the appropriate municipal or barangay office during office hours.',
        icon: Phone,
        value: 'Official contact number',
        action: '+63 925 015 4000',
    },
];

const officeInformation = [
    {
        title: 'Capas Municipal Office',
        value: 'Municipality of Capas',
        description: 'Municipal Hall, Capas, Tarlac',
        icon: MapPin,
    },
    {
        title: 'Office Hours',
        value: 'Monday – Friday',
        description: 'During regular government office hours',
        icon: Clock3,
    },
    {
        title: 'Appointments',
        value: 'Schedule Online',
        description: 'Appointments may be required for selected services.',
        icon: CalendarDays,
    },
];

const helpTopics = [
    {
        title: 'Document Requests',
        description:
            'Questions about requesting, processing, or receiving government documents.',
        icon: FileText,
    },
    {
        title: 'Request Status',
        description:
            'Need help understanding the current status of your submitted request?',
        icon: CheckCircle2,
    },
    {
        title: 'Account & Registration',
        description:
            'Questions about resident registration, verification, or your account?',
        icon: MessageSquare,
    },
];
</script>

<template>
    <Head title="Contact" />
    <!-- Hero -->
    <section class="relative overflow-hidden border-b border-border/60">
        <!-- Decorative background -->
        <div
            class="pointer-events-none absolute -top-40 -left-40 size-96 rounded-full bg-secondary/10 blur-3xl"
        />

        <div
            class="pointer-events-none absolute top-20 -right-40 size-96 rounded-full bg-accent/10 blur-3xl"
        />

        <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">
            <div class="max-w-3xl">
                <p
                    class="text-sm font-semibold tracking-[0.18em] text-accent uppercase"
                >
                    Contact & Support
                </p>

                <h1
                    class="mt-3 text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl"
                >
                    We're here to
                    <span class="text-accent"> help. </span>
                </h1>

                <p
                    class="mt-6 max-w-2xl text-base leading-7 text-muted-foreground sm:text-lg"
                >
                    Have a question about a document request, your resident
                    account, or a municipal service? Find the appropriate
                    contact information or send us a message through the eCapas
                    Municipal System.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <Link
                        href="/faq"
                        class="inline-flex h-10 items-center gap-2 rounded-lg border border-border bg-background px-4 text-sm font-medium transition-colors hover:bg-muted"
                    >
                        <HelpCircle class="size-4" />
                        View FAQs
                    </Link>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Channels -->
    <section>
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">
            <div class="grid gap-5 md:grid-cols-3">
                <Card
                    v-for="channel in contactChannels"
                    :key="channel.title"
                    class="group rounded-2xl border transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                >
                    <CardContent>
                        <div
                            class="flex size-12 items-center justify-center rounded-xl border border-secondary/30 bg-secondary/10 text-accent transition-colors group-hover:bg-secondary/20"
                        >
                            <component
                                :is="channel.icon"
                                class="size-6"
                                :stroke-width="1.7"
                            />
                        </div>

                        <h2 class="mt-5 text-base font-semibold">
                            {{ channel.title }}
                        </h2>

                        <p class="mt-2 text-xs leading-5 text-muted-foreground">
                            {{ channel.description }}
                        </p>

                        <div class="mt-5 border-t border-border pt-4">
                            <p class="text-xs font-medium text-foreground">
                                {{ channel.value }}
                            </p>

                            <button
                                type="button"
                                class="mt-3 inline-flex items-center gap-2 text-xs font-semibold text-accent transition-colors hover:underline"
                            >
                                {{ channel.action }}

                                <ArrowRight class="size-3.5" />
                            </button>
                        </div>
                    </CardContent>
                </Card>
            </div>
        </div>
    </section>

    <!-- Office Information + Map -->
    <section class="border-y border-border/60 bg-muted/20">
        <div
            class="mx-auto grid max-w-7xl gap-10 px-6 py-20 lg:grid-cols-[0.9fr_1.1fr] lg:px-8 lg:py-24"
        >
            <!-- Information -->
            <div>
                <p
                    class="text-sm font-semibold tracking-[0.18em] text-accent uppercase"
                >
                    Office Information
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">
                    Get in touch with the
                    <span class="text-accent"> Municipality. </span>
                </h2>

                <p
                    class="mt-4 max-w-xl text-sm leading-6 text-muted-foreground"
                >
                    For concerns that require direct assistance, you may contact
                    or visit the appropriate municipal or barangay office during
                    regular government office hours.
                </p>

                <div class="mt-8 space-y-4">
                    <div
                        v-for="office in officeInformation"
                        :key="office.title"
                        class="flex gap-4 rounded-xl border border-border bg-card p-4"
                    >
                        <div
                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-secondary/10 text-accent"
                        >
                            <component :is="office.icon" class="size-5" />
                        </div>

                        <div>
                            <p
                                class="text-[11px] font-semibold tracking-wide text-muted-foreground uppercase"
                            >
                                {{ office.title }}
                            </p>

                            <p class="mt-1 text-sm font-semibold">
                                {{ office.value }}
                            </p>

                            <p
                                class="mt-1 text-xs leading-5 text-muted-foreground"
                            >
                                {{ office.description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Placeholder -->
            <div
                class="relative min-h-[380px] overflow-hidden rounded-3xl border border-border bg-card shadow-sm"
            >
                <iframe
                    title="Capas Municipal Hall Location"
                    class="absolute inset-0 h-full w-full border-0"
                    src="https://www.google.com/maps?q=15.346306,120.5928777&z=18&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>

                <!-- Location Information -->
                <div
                    class="absolute right-4 bottom-4 left-4 flex items-center justify-between gap-4 rounded-2xl border border-border/60 bg-background/90 p-4 shadow-lg backdrop-blur-md"
                >
                    <div class="flex items-center gap-3">
                        <div
                            class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                        >
                            <MapPin class="size-5" />
                        </div>

                        <div>
                            <h3 class="text-sm font-semibold text-foreground">
                                Capas Municipal Hall
                            </h3>

                            <p class="mt-0.5 text-xs text-muted-foreground">
                                Sto. Domingo II, Capas, Tarlac
                            </p>
                        </div>
                    </div>

                    <a
                        href="https://www.google.com/maps/search/?api=1&query=Capas+Municipal+Hall"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex shrink-0 items-center gap-2 rounded-xl bg-primary px-4 py-2.5 text-xs font-semibold text-primary-foreground transition hover:opacity-90"
                    >
                        View Location
                        <ArrowRight class="size-3.5" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Help Topics -->
    <section class="border-y border-border/60 bg-muted/20">
        <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">
            <div class="text-center">
                <p
                    class="text-sm font-semibold tracking-[0.18em] text-accent uppercase"
                >
                    Need Help?
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">
                    Find the right
                    <span class="text-accent"> assistance. </span>
                </h2>

                <p
                    class="mx-auto mt-4 max-w-2xl text-sm leading-6 text-muted-foreground"
                >
                    You may be able to find the information you need without
                    contacting the office directly.
                </p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-3">
                <Card
                    v-for="topic in helpTopics"
                    :key="topic.title"
                    class="group rounded-2xl border transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                >
                    <CardContent>
                        <div
                            class="flex size-11 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                        >
                            <component :is="topic.icon" class="size-5" />
                        </div>

                        <h3 class="mt-5 text-sm font-semibold">
                            {{ topic.title }}
                        </h3>

                        <p class="mt-2 text-xs leading-5 text-muted-foreground">
                            {{ topic.description }}
                        </p>

                        <Link
                            href="/faq"
                            class="mt-5 inline-flex items-center gap-2 text-xs font-semibold text-accent hover:underline"
                        >
                            Learn More
                            <ArrowRight class="size-3.5" />
                        </Link>
                    </CardContent>
                </Card>
            </div>
        </div>
    </section>

    <!-- Emergency Notice -->
    <section>
        <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
            <div class="rounded-2xl border border-border bg-card p-5">
                <div class="flex items-start gap-4">
                    <div
                        class="flex size-10 shrink-0 items-center justify-center rounded-full bg-secondary/10 text-accent"
                    >
                        <Phone class="size-4" />
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold">For emergencies</h3>

                        <p class="mt-1 text-xs leading-5 text-muted-foreground">
                            The eCapas Municipal System is intended for
                            government document services and general inquiries.
                            For emergencies, contact the appropriate emergency
                            response service directly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="pb-20 lg:pb-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="relative overflow-hidden rounded-3xl bg-[#032240] px-7 py-12 text-white sm:px-10 lg:px-14"
            >
                <div
                    class="pointer-events-none absolute -top-32 -right-20 size-80 rounded-full bg-[#38A3A5]/20 blur-3xl"
                />

                <div
                    class="pointer-events-none absolute -bottom-40 left-1/3 size-80 rounded-full bg-[#007E25]/20 blur-3xl"
                />

                <div
                    class="relative flex flex-col justify-between gap-8 lg:flex-row lg:items-center"
                >
                    <div class="max-w-2xl">
                        <p
                            class="text-xs font-semibold tracking-[0.18em] text-[#57CC99] uppercase"
                        >
                            Capas Municipal System
                        </p>

                        <h2
                            class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl"
                        >
                            Looking for a document?
                            <span class="text-[#57CC99]"> Start online. </span>
                        </h2>

                        <p class="mt-4 text-sm leading-6 text-white/70">
                            Access available barangay and municipal services
                            through your verified resident account.
                        </p>
                    </div>

                    <Link href="/services">
                        <button
                            class="inline-flex h-11 shrink-0 items-center gap-2 rounded-lg bg-[#57CC99] px-5 text-sm font-semibold text-[#032240] transition-colors hover:bg-[#80ED99]"
                        >
                            View Services
                            <ArrowRight class="size-4" />
                        </button>
                    </Link>
                </div>
            </div>
        </div>
    </section>
</template>
