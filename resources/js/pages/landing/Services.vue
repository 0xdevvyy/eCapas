<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import {
    ArrowRight,
    Building2,
    CalendarDays,
    CheckCircle2,
    Clock3,
    FileCheck2,
    FileText,
    Info,
    Landmark,
    QrCode,
    ShieldCheck,
    UserCheck,
    Users,
} from '@lucide/vue';

import PrimaryButton from '@/components/ui/button/PrimaryButton.vue';
import Card from '@/components/ui/card/Card.vue';
import CardContent from '@/components/ui/card/CardContent.vue';

const barangayServices = [
    {
        title: 'Barangay Clearance',
        description:
            'An official barangay document commonly used for employment, applications, transactions, and other official purposes.',
        icon: FileCheck2,
        processing: '1–2 working days',
    },
    {
        title: 'Certificate of Residency',
        description:
            'An official certification confirming that a resident belongs to the selected barangay.',
        icon: Building2,
        processing: '1–2 working days',
    },
    {
        title: 'Certificate of Indigency',
        description:
            'A certification for residents who need to establish their financial status for assistance or other purposes.',
        icon: ShieldCheck,
        processing: '1–3 working days',
    },
    {
        title: 'Barangay Business Clearance',
        description:
            'A barangay-level clearance for businesses operating within the barangay.',
        icon: FileText,
        processing: '1–3 working days',
    },
];

const platformFeatures = [
    {
        title: 'Verified Resident Account',
        description:
            'Your identity, address, and selected barangay are verified during registration.',
        icon: UserCheck,
    },
    {
        title: 'Online Requests',
        description:
            'Submit available document requests without repeatedly visiting the office.',
        icon: FileText,
    },
    {
        title: 'Request Tracking',
        description:
            'Monitor the progress of your submitted requests from your account.',
        icon: Clock3,
    },
    {
        title: 'Digital Documents',
        description:
            'Access approved documents digitally when the service supports digital release.',
        icon: QrCode,
    },
];

const processSteps = [
    {
        number: '01',
        title: 'Register',
        description:
            'Create your resident account and provide your personal and address information.',
        icon: Users,
    },
    {
        number: '02',
        title: 'Get Verified',
        description:
            'The Municipality reviews your registration and verifies your selected barangay.',
        icon: UserCheck,
    },
    {
        number: '03',
        title: 'Request a Service',
        description:
            'Choose the document you need and submit your request using your verified account.',
        icon: FileText,
    },
    {
        number: '04',
        title: 'Track & Receive',
        description:
            'Monitor your request, attend an appointment when required, and receive your approved document.',
        icon: CheckCircle2,
    },
];
</script>

<template>
    <Head title="Services" />

        <!-- Hero -->
        <section class="relative overflow-hidden border-border/60">
            <!-- Decorative background -->
            <div
                class="pointer-events-none absolute -left-40 -top-40 size-96 rounded-full bg-secondary/10 blur-3xl"
            />

            <div
                class="pointer-events-none absolute -right-40 top-20 size-96 rounded-full bg-accent/10 blur-3xl"
            />

            <div
                class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24"
            >
                <div class="max-w-3xl">
                    <h1
                        class="mt-3 text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl"
                    >
                        Local Government services,
                        <span class="text-accent">
                            made easier.
                        </span>
                    </h1>

                    <p
                        class="mt-6 max-w-2xl text-base leading-7 text-muted-foreground sm:text-lg"
                    >
                        Access available municipal and barangay services
                        through eCapas System. Submit requests
                        online, track their progress, schedule appointments,
                        and access your approved documents from one platform.
                    </p>

                </div>
            </div>
        </section>

        <!-- Verified Resident Notice -->
        <div class="border-b">
            <div
                class="mx-auto max-w-7xl px-6 py-6 lg:px-8"
            >
                <div
                    class="flex gap-4 rounded-2xl border border-accent/20 bg-accent/5 p-5"
                >
                    <div
                        class="flex size-11 shrink-0 items-center justify-center rounded-full bg-accent/10 text-accent"
                    >
                        <ShieldCheck class="size-5" />
                    </div>

                    <div>
                        <h2 class="text-sm font-semibold">
                            Services for verified residents
                        </h2>

                        <p
                            class="mt-1 max-w-4xl text-xs leading-6 text-muted-foreground"
                        >
                            Your resident information, address, and selected
                            barangay are verified during registration. Once
                            your account is approved by the Municipality or Brgy Admin, you
                            do not need to repeatedly submit proof of residency or any related ID's
                            when requesting services.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Information -->
        <section class="border-b border-border/60">
            <div
                class="mx-auto grid max-w-7xl divide-y divide-border px-6 sm:grid-cols-3 sm:divide-x sm:divide-y-0 lg:px-8"
            >
                <!-- Online Requests -->
                <div class="flex items-center gap-4 px-0 py-6 sm:px-6">
                    <div
                        class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                    >
                        <FileText class="size-5" />
                    </div>

                    <div>
                        <p class="text-sm font-semibold">
                            Online Requests
                        </p>

                        <p class="mt-1 text-xs text-muted-foreground">
                            Submit available services online.
                        </p>
                    </div>
                </div>

                <!-- Tracking -->
                <div class="flex items-center gap-4 px-0 py-6 sm:px-6">
                    <div
                        class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                    >
                        <Clock3 class="size-5" />
                    </div>

                    <div>
                        <p class="text-sm font-semibold">
                            Track Progress
                        </p>

                        <p class="mt-1 text-xs text-muted-foreground">
                            Follow your request status.
                        </p>
                    </div>
                </div>

                <!-- Digital -->
                <div class="flex items-center gap-4 px-0 py-6 sm:px-6">
                    <div
                        class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                    >
                        <QrCode class="size-5" />
                    </div>

                    <div>
                        <p class="text-sm font-semibold">
                            Digital Documents
                        </p>

                        <p class="mt-1 text-xs text-muted-foreground">
                            Access and verify approved documents.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section id="available-services">
            <div
                class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24"
            >
                <!-- Section Header -->
                <div class="max-w-2xl">
                    <p
                        class="text-sm font-semibold tracking-[0.18em] text-accent uppercase"
                    >
                        Available Services
                    </p>

                    <h2
                        class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl"
                    >
                        Choose the service
                        <span class="text-accent">
                            you need.
                        </span>
                    </h2>

                    <p
                        class="mt-4 text-sm leading-6 text-muted-foreground"
                    >
                        Available services are processed by the appropriate
                        barangay or municipal office. Your verified resident
                        information is already associated with your account.
                    </p>
                </div>

                <!-- ===================================================== -->
                <!-- Barangay Services -->
                <!-- ===================================================== -->
                <div class="mt-14">
                    <div class="mb-6 flex items-center gap-4">
                        <div
                            class="flex size-11 items-center justify-center rounded-xl bg-accent/10 text-accent"
                        >
                            <Building2 class="size-5" />
                        </div>

                        <div>
                            <h3 class="text-xl font-bold">
                                Barangay Services
                            </h3>

                            <p class="mt-1 text-xs text-muted-foreground">
                                Barangay-level documents and certifications.
                            </p>
                        </div>
                    </div>

                    <div
                        class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4"
                    >
                        <Card
                            v-for="service in barangayServices"
                            :key="service.title"
                            class="group flex flex-col rounded-2xl border transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                        >
                            <CardContent class="flex h-full flex-col">
                                <!-- Icon -->
                                <div
                                    class="flex size-12 items-center justify-center rounded-xl border border-secondary/30 bg-secondary/10 text-accent transition-colors group-hover:bg-secondary/20"
                                >
                                    <component
                                        :is="service.icon"
                                        class="size-6"
                                        :stroke-width="1.7"
                                    />
                                </div>

                                <!-- Title -->
                                <h4
                                    class="mt-5 text-sm font-semibold leading-5"
                                >
                                    {{ service.title }}
                                </h4>

                                <!-- Description -->
                                <p
                                    class="mt-2 text-xs leading-5 text-muted-foreground"
                                >
                                    {{ service.description }}
                                </p>

                                <!-- Processing -->
                                <div
                                    class="mt-5 flex items-center gap-2 border-t border-border pt-4"
                                >
                                    <Clock3
                                        class="size-3.5 shrink-0 text-accent"
                                    />

                                    <span
                                        class="text-xs text-muted-foreground"
                                    >
                                        Estimated processing:
                                        <span class="font-medium text-foreground">
                                            {{ service.processing }}
                                        </span>
                                    </span>
                                </div>

                                <!-- Request -->
                                <div class="mt-auto pt-6">
                                    <Link
                                        :href="`/request?service=${encodeURIComponent(service.title)}`"
                                        class="inline-flex w-full items-center justify-center gap-2 rounded-lg border border-border px-3 py-2 text-xs font-semibold transition-colors hover:border-accent hover:bg-accent hover:text-white"
                                    >
                                        Request Service

                                        <ArrowRight class="size-3.5" />
                                    </Link>
                                </div>
                            </CardContent>
                        </Card>
                    </div>
                </div>

                <!-- ===================================================== -->
                <!-- Municipal Services -->
                <!-- ===================================================== -->
                <div class="mt-20">
                    <div class="mb-6 flex items-center gap-4">
                        <div
                            class="flex size-11 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                        >
                            <Landmark class="size-5" />
                        </div>

                        <div>
                            <h3 class="text-xl font-bold">
                                Municipal Services
                            </h3>

                            <p class="mt-1 text-xs text-muted-foreground">
                                Services handled by the Municipality of Capas.
                            </p>
                        </div>
                    </div>

                    <div
                        class="rounded-2xl border border-dashed border-border bg-muted/20 p-6"
                    >
                        <div class="flex items-start gap-4">
                           

                            <div>
                                <h4 class="text-sm font-semibold">
                                    Municipal services are centrally managed
                                </h4>

                                <p
                                    class="mt-1 max-w-3xl text-xs leading-5 text-muted-foreground"
                                >
                                    Municipal services can be made
                                    available through the same platform. These
                                    requests are routed to the appropriate
                                    municipal office or department based on
                                    the selected service.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Platform Features -->
        <section class="border-y border-border/60 bg-muted/20">
            <div
                class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24"
            >
                <div class="max-w-2xl">
                    <p
                        class="text-sm font-semibold tracking-[0.18em] text-accent uppercase"
                    >
                        Built Around Residents
                    </p>

                    <h2
                        class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl"
                    >
                        One account,
                        <span class="text-accent">
                            connected services.
                        </span>
                    </h2>

                    <p
                        class="mt-4 text-sm leading-6 text-muted-foreground"
                    >
                        Once your registration has been verified, your resident
                        profile becomes the foundation for accessing available
                        municipal and barangay services.
                    </p>
                </div>

                <div
                    class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-4"
                >
                    <Card
                        v-for="feature in platformFeatures"
                        :key="feature.title"
                        class="rounded-2xl border"
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
                                class="mt-2 text-xs leading-5 text-muted-foreground"
                            >
                                {{ feature.description }}
                            </p>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Process -->
        <section>
            <div
                class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24"
            >
                <div class="text-center">
                    <p
                        class="text-sm font-semibold tracking-[0.18em] text-accent uppercase"
                    >
                        How It Works
                    </p>

                    <h2
                        class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl"
                    >
                        From registration to
                        <span class="text-accent">
                            document.
                        </span>
                    </h2>

                    <p
                        class="mx-auto mt-4 max-w-2xl text-sm leading-6 text-muted-foreground"
                    >
                        The system separates resident verification from
                        document requests, so you only need to verify your
                        residency during registration.
                    </p>
                </div>

                <div
                    class="relative mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4"
                >
                    <!-- Connecting line -->
                    <div
                        class="pointer-events-none absolute left-[12%] right-[12%] top-6 hidden border-t border-dashed border-border lg:block"
                    />

                    <div
                        v-for="step in processSteps"
                        :key="step.number"
                        class="relative text-center"
                    >
                        <!-- Number/Icon -->
                        <div
                            class="relative mx-auto flex size-12 items-center justify-center rounded-full border border-border bg-card text-accent shadow-sm"
                        >
                            <component
                                :is="step.icon"
                                class="size-5"
                            />
                        </div>

                        <p
                            class="mt-5 text-[11px] font-semibold tracking-wider text-accent"
                        >
                            {{ step.number }}
                        </p>

                        <h3 class="mt-2 text-sm font-semibold">
                            {{ step.title }}
                        </h3>

                        <p
                            class="mx-auto mt-2 max-w-[230px] text-xs leading-5 text-muted-foreground"
                        >
                            {{ step.description }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Registration Information -->
        <section class="border-y border-border/60 bg-muted/20">
            <div
                class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20"
            >
                <div
                    class="grid gap-6 lg:grid-cols-[1fr_1.5fr]"
                >
                    <!-- Heading -->
                    <div>
                        <p
                            class="text-sm font-semibold tracking-[0.18em] text-accent uppercase"
                        >
                            Resident Verification
                        </p>

                        <h2
                            class="mt-3 text-2xl font-bold tracking-tight sm:text-3xl"
                        >
                            Verify once.
                            <span class="text-accent">
                                Access services.
                            </span>
                        </h2>

                        <p
                            class="mt-4 text-sm leading-6 text-muted-foreground"
                        >
                            The municipality verifies resident registrations
                            before granting access to resident services.
                        </p>
                    </div>

                    <!-- Flow -->
                    <Card class="rounded-2xl border">
                        <CardContent>
                            <div class="space-y-5">
                                <!-- Registration -->
                                <div class="flex items-start gap-4">
                                    <div
                                        class="flex size-9 shrink-0 items-center justify-center rounded-full bg-accent/10 text-xs font-bold text-accent"
                                    >
                                        1
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold">
                                            Registration
                                        </h3>

                                        <p
                                            class="mt-1 text-xs leading-5 text-muted-foreground"
                                        >
                                            Provide your personal information,
                                            address details, selected barangay,
                                            and proof of residency.
                                        </p>
                                    </div>
                                </div>

                                <!-- Verification -->
                                <div class="flex items-start gap-4">
                                    <div
                                        class="flex size-9 shrink-0 items-center justify-center rounded-full bg-accent/10 text-xs font-bold text-accent"
                                    >
                                        2
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold">
                                            Municipal Verification
                                        </h3>

                                        <p
                                            class="mt-1 text-xs leading-5 text-muted-foreground"
                                        >
                                            A municipal administrator reviews
                                            your registration and verifies the
                                            submitted information.
                                        </p>
                                    </div>
                                </div>

                                <!-- Account -->
                                <div class="flex items-start gap-4">
                                    <div
                                        class="flex size-9 shrink-0 items-center justify-center rounded-full bg-accent/10 text-xs font-bold text-accent"
                                    >
                                        3
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold">
                                            Approved Resident Account
                                        </h3>

                                        <p
                                            class="mt-1 text-xs leading-5 text-muted-foreground"
                                        >
                                            Once approved, your verified
                                            resident profile can be used to
                                            access available services.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </CardContent>
                    </Card>
                </div>
            </div>
        </section>

        <!-- Requirements Notice -->
        <section>
            <div
                class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20"
            >
                <div
                    class="flex gap-4 rounded-2xl border border-border bg-card p-6"
                >
                    <div
                        class="flex size-11 shrink-0 items-center justify-center rounded-full bg-secondary/10 text-accent"
                    >
                        <Info class="size-5" />
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold">
                            About document requirements
                        </h3>

                        <p
                            class="mt-2 text-xs leading-6 text-muted-foreground"
                        >
                            Resident verification requirements are handled
                            during account registration. Individual document
                            services may have additional requirements depending
                            on the type of request, its purpose, and the
                            responsible office. Any applicable requirements
                            will be shown during the request process.
                        </p>
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
                    <!-- Decorative -->
                    <div
                        class="pointer-events-none absolute -right-20 -top-32 size-80 rounded-full bg-[#38A3A5]/20 blur-3xl"
                    />

                    <div
                        class="pointer-events-none absolute -bottom-40 left-1/3 size-80 rounded-full bg-[#007E25]/20 blur-3xl"
                    />

                    <div
                        class="relative flex flex-col justify-between gap-8 lg:flex-row lg:items-center"
                    >
                        <div class="max-w-2xl">
                            <p
                                class="text-sm font-semibold tracking-[0.18em] text-[#57CC99]"
                            >
                                eCapas Municipal System
                            </p>

                            <h2
                                class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl"
                            >
                                Need a document?
                                <span class="text-[#57CC99]">
                                    Start your request online.
                                </span>
                            </h2>

                            <p
                                class="mt-4 text-sm leading-6 text-white/70"
                            >
                                Use your verified resident account to request
                                available municipal and barangay documents,
                                track your request, and access approved
                                documents.
                            </p>
                        </div>

                        <Link href="/request">
                            <button
                                class="inline-flex h-11 shrink-0 items-center gap-2 rounded-lg bg-[#57CC99] px-5 text-sm font-semibold text-[#032240] transition-colors hover:bg-[#80ED99]"
                            >
                                Request a document
                                <ArrowRight class="size-4" />
                            </button>
                        </Link>
                    </div>
                </div>
            </div>
        </section>

</template>