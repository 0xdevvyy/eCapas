<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import {
    ArrowRight,
    Building2,
    CheckCircle2,
    FileCheck2,
    FileText,
    Globe2,
    Handshake,
    Landmark,
    LockKeyhole,
    Network,
    QrCode,
    ShieldCheck,
    Users,
} from '@lucide/vue';

import SecondaryButton from '@/components/ui/button/SecondaryButton.vue';
import Card from '@/components/ui/card/Card.vue';
import CardContent from '@/components/ui/card/CardContent.vue';

const coreValues = [
    {
        title: 'Accessibility',
        description:
            'Making essential government document services easier to access for residents.',
        icon: Globe2,
    },
    {
        title: 'Transparency',
        description:
            'Providing clear request statuses and processes from submission to completion.',
        icon: ShieldCheck,
    },
    {
        title: 'Efficiency',
        description:
            'Reducing unnecessary visits and improving how document requests are processed.',
        icon: CheckCircle2,
    },
    {
        title: 'Service',
        description:
            'Using technology to provide a more convenient and resident-centered public service.',
        icon: Handshake,
    },
];

const systemFeatures = [
    {
        title: 'Online Document Requests',
        description:
            'Residents can submit document requests without repeatedly visiting the municipal or barangay office.',
        icon: FileText,
    },
    {
        title: 'Request Tracking',
        description:
            'Residents can monitor the progress of their requests from submission to completion.',
        icon: CheckCircle2,
    },
    {
        title: 'Digital Documents',
        description:
            'Approved documents can be digitally generated and made available through the platform.',
        icon: FileCheck2,
    },
    {
        title: 'QR Verification',
        description:
            'Digitally generated documents can include QR verification for easier validation.',
        icon: QrCode,
    },
];

const administrativeLevels = [
    {
        title: 'Municipality of Capas',
        description:
            'The main administrative level responsible for municipal-wide operations, oversight, and management.',
        icon: Landmark,
    },
    {
        title: 'Barangay of Capas',
        description:
            'The barangay-level administration manages requests and services belonging to its local community.',
        icon: Building2,
    },
    {
        title: 'Residents',
        description:
            'Residents access services, submit requests, track documents, and manage their appointments online.',
        icon: Users,
    },
];
</script>

<template>
    <Head title="About" />

    <main>
        <!-- Hero -->
        <section class="relative overflow-hidden border-b border-border/60">
            <!-- Background decorations -->
            <div
                class="pointer-events-none absolute -top-40 -left-40 size-96 rounded-full bg-secondary/10 blur-3xl"
            />

            <div
                class="pointer-events-none absolute top-20 -right-40 size-96 rounded-full bg-accent/10 blur-3xl"
            />

            <div
                class="relative mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 lg:grid-cols-[1fr_0.85fr] lg:px-8 lg:py-28"
            >
                <!-- Content -->
                <div class="max-w-2xl">
                    <p
                        class="text-sm font-semibold tracking-[0.18em] text-accent"
                    >
                        About eCapas
                    </p>

                    <h1
                        class="mt-3 text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl"
                    >
                        Serving
                        <span class="text-accent"> Capas </span>
                        through better digital services.
                    </h1>

                    <p
                        class="mt-6 max-w-xl text-base leading-7 text-muted-foreground sm:text-lg"
                    >
                        The eCapas System is a web based local government
                        platform designed to make document related services more
                        accessible, organized, and convenient for the
                        Municipality of Capas and its barangays.
                    </p>
                </div>

                <!-- Visual -->
                <div class="relative">
                    <div
                        class="absolute inset-0 rounded-3xl bg-secondary/10 blur-3xl"
                    />

                    <div
                        class="relative overflow-hidden rounded-3xl border border-border bg-card p-6 shadow-xl"
                    >
                        <!-- Municipality -->
                        <div
                            class="rounded-2xl border border-border bg-muted/30 p-5"
                        >
                            <div class="flex items-center gap-4">
                                <div
                                    class="flex size-12 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                                >
                                    <Landmark class="size-6" />
                                </div>

                                <div>
                                    <p
                                        class="text-xs font-medium text-muted-foreground"
                                    >
                                        Main Administrative Level
                                    </p>

                                    <h2 class="mt-1 text-sm font-semibold">
                                        Municipality of Capas
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <!-- Connection -->
                        <div class="relative flex justify-center py-3">
                            <div
                                class="h-8 border-l border-dashed border-accent/40"
                            />
                        </div>

                        <!-- Barangay -->
                        <div
                            class="rounded-2xl border border-accent/20 bg-accent/5 p-5"
                        >
                            <div class="flex items-center gap-4">
                                <div
                                    class="flex size-12 shrink-0 items-center justify-center rounded-xl bg-accent/10 text-accent"
                                >
                                    <Building2 class="size-6" />
                                </div>

                                <div>
                                    <p
                                        class="text-xs font-medium text-muted-foreground"
                                    >
                                        Barangay Administration
                                    </p>

                                    <h2 class="mt-1 text-sm font-semibold">
                                        Barangays of Capas
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <!-- Connection -->
                        <div class="relative flex justify-center py-3">
                            <div
                                class="h-8 border-l border-dashed border-accent/40"
                            />
                        </div>

                        <!-- Residents -->
                        <div
                            class="rounded-2xl border border-border bg-card p-5"
                        >
                            <div class="flex items-center gap-4">
                                <div
                                    class="flex size-12 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                                >
                                    <Users class="size-6" />
                                </div>

                                <div>
                                    <p
                                        class="text-xs font-medium text-muted-foreground"
                                    >
                                        Community
                                    </p>

                                    <h2 class="mt-1 text-sm font-semibold">
                                        Residents
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About -->
        <section>
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">
                <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">
                    <!-- Heading -->
                    <div>
                        <p
                            class="text-sm font-semibold tracking-[0.18em] text-accent uppercase"
                        >
                            Our Purpose
                        </p>

                        <h2
                            class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl"
                        >
                            A more connected way to access
                            <span class="text-accent">
                                local government services.
                            </span>
                        </h2>
                    </div>

                    <!-- Text -->
                    <div
                        class="space-y-5 text-sm leading-7 text-muted-foreground"
                    >
                        <p>
                            eCapas is designed to centralize and digitize
                            document related services for the Municipality of
                            Capas and its barangays. It provides residents with
                            a single platform where they can access government
                            services without repeatedly visiting different
                            offices.
                        </p>

                        <p>
                            Through the platform, residents can create an
                            account, submit document requests, monitor request
                            statuses, schedule appointments, and receive
                            digitally generated documents.
                        </p>

                        <p>
                            The system also provides a structured administrative
                            environment. Municipal administrators can manage
                            municipal level operations, while barangay
                            administrators are limited to requests and
                            information belonging to their respective barangay.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Administrative Structure -->
        <section class="border-y border-border/60 bg-muted/20">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">
                <div class="max-w-2xl">
                    <p
                        class="text-sm font-semibold tracking-[0.18em] text-accent uppercase"
                    >
                        How It Works
                    </p>

                    <h2
                        class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl"
                    >
                        One system.
                        <span class="text-accent">
                            Multiple levels of service.
                        </span>
                    </h2>

                    <p class="mt-4 text-sm leading-6 text-muted-foreground">
                        The platform follows a centralized municipal structure
                        while maintaining appropriate administrative boundaries
                        between the municipality, barangays, and residents.
                    </p>
                </div>

                <div class="mt-10 grid gap-4 lg:grid-cols-3">
                    <Card
                        v-for="(level, index) in administrativeLevels"
                        :key="level.title"
                        class="relative rounded-2xl border"
                    >
                        <CardContent>
                            <!-- Number -->
                            <div
                                class="absolute top-5 right-5 text-xs font-semibold text-muted-foreground/50"
                            >
                                0{{ index + 1 }}
                            </div>

                            <div
                                class="flex size-12 items-center justify-center rounded-xl border border-secondary/30 bg-secondary/10 text-accent"
                            >
                                <component
                                    :is="level.icon"
                                    class="size-6"
                                    :stroke-width="1.7"
                                />
                            </div>

                            <h3 class="mt-5 text-sm font-semibold">
                                {{ level.title }}
                            </h3>

                            <p
                                class="mt-2 text-xs leading-6 text-muted-foreground"
                            >
                                {{ level.description }}
                            </p>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </section>

        <!-- System Features -->
        <section>
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">
                <div class="text-center">
                    <p
                        class="text-sm font-semibold tracking-[0.18em] text-accent uppercase"
                    >
                        What We Provide
                    </p>

                    <h2
                        class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl"
                    >
                        Designed around the needs of
                        <span class="text-accent"> residents </span>
                    </h2>

                    <p
                        class="mx-auto mt-4 max-w-2xl text-sm leading-6 text-muted-foreground"
                    >
                        The platform brings frequently needed document services
                        into one convenient digital experience.
                    </p>
                </div>

                <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <Card
                        v-for="feature in systemFeatures"
                        :key="feature.title"
                        class="rounded-2xl border transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                    >
                        <CardContent>
                            <div
                                class="flex size-12 items-center justify-center rounded-xl border border-secondary/30 bg-secondary/10 text-accent"
                            >
                                <component
                                    :is="feature.icon"
                                    class="size-6"
                                    :stroke-width="1.7"
                                />
                            </div>

                            <h3 class="mt-5 text-sm font-semibold">
                                {{ feature.title }}
                            </h3>

                            <p
                                class="mt-2 text-xs leading-6 text-muted-foreground"
                            >
                                {{ feature.description }}
                            </p>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Core Values -->
        <section class="border-y border-border/60 bg-muted/20">
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">
                <div class="max-w-2xl">
                    <p
                        class="text-sm font-semibold tracking-[0.18em] text-accent uppercase"
                    >
                        Our Values
                    </p>

                    <h2
                        class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl"
                    >
                        Technology with a
                        <span class="text-accent"> purpose. </span>
                    </h2>

                    <p class="mt-4 text-sm leading-6 text-muted-foreground">
                        The system is built around principles that support
                        accessible, transparent, and efficient public service.
                    </p>
                </div>

                <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <Card
                        v-for="value in coreValues"
                        :key="value.title"
                        class="rounded-2xl border"
                    >
                        <CardContent>
                            <div
                                class="flex size-12 items-center justify-center rounded-full border border-border bg-card text-muted-foreground"
                            >
                                <component
                                    :is="value.icon"
                                    class="size-5"
                                    :stroke-width="1.7"
                                />
                            </div>

                            <h3 class="mt-5 text-sm font-semibold">
                                {{ value.title }}
                            </h3>

                            <p
                                class="mt-2 text-xs leading-6 text-muted-foreground"
                            >
                                {{ value.description }}
                            </p>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Security / Administration -->
        <section>
            <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">
                <div
                    class="grid items-center gap-10 rounded-3xl border border-border bg-card p-8 shadow-sm lg:grid-cols-[1fr_auto] lg:p-12"
                >
                    <div>
                        <div class="flex items-center gap-3">
                            <div
                                class="flex size-11 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <LockKeyhole class="size-5" />
                            </div>

                            <p
                                class="text-sm font-semibold tracking-wide text-accent uppercase"
                            >
                                Structured Administration
                            </p>
                        </div>

                        <h2
                            class="mt-5 max-w-2xl text-2xl font-bold tracking-tight sm:text-3xl"
                        >
                            The right access for the right
                            <span class="text-accent">
                                administrative level.
                            </span>
                        </h2>

                        <p
                            class="mt-4 max-w-2xl text-sm leading-7 text-muted-foreground"
                        >
                            The platform separates municipal and barangay
                            responsibilities to help ensure that administrators
                            manage only the requests and information relevant to
                            their assigned level of government.
                        </p>
                    </div>

                    <div
                        class="hidden size-28 items-center justify-center rounded-full border border-secondary/30 bg-secondary/10 text-accent lg:flex"
                    >
                        <Network class="size-12" :stroke-width="1.3" />
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="pb-20 lg:pb-24">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div
                    class="relative overflow-hidden rounded-3xl bg-primary/35 px-7 py-12 text-foreground sm:px-10 lg:px-14"
                >
                    <!-- Background -->
                    <div
                        class="pointer-events-none absolute -top-32 -right-20 size-80 rounded-full bg-[#38A3A5]/20 blur-3xl"
                    />

                    <div
                        class="pointer-events-none absolute -bottom-40 left-1/3 size-80 rounded-full bg-[#007E25]/20 blur-3xl"
                    />

                    <div class="relative max-w-2xl">
                        <p
                            class="text-sm font-semibold tracking-[0.18em] text-accent"
                        >
                            eCapas System
                        </p>

                        <h2
                            class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl"
                        >
                            Access local government services
                            <span class="text-accent">
                                more conveniently.
                            </span>
                        </h2>

                        <p
                            class="mt-4 text-sm leading-6 text-foreground/70 sm:text-base"
                        >
                            Submit your document request online, track its
                            progress, and manage your appointments through one
                            centralized platform.
                        </p>

                        <div class="mt-7">
                            <Link href="/request">
                                <SecondaryButton>
                                    Request a Document
                                    <ArrowRight class="size-4" />
                                </SecondaryButton>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>
