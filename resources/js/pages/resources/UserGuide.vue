<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import {
    ArrowRight,
    CalendarDays,
    CheckCircle2,
    ChevronRight,
    Clock3,
    FileCheck2,
    FileText,
    HelpCircle,
    QrCode,
    SearchCheck,
    ShieldCheck,
    Upload,
    UserCheck,
    UserPlus,
} from '@lucide/vue';

import GhostButton from '@/components/ui/button/GhostButton.vue';
import PrimaryButton from '@/components/ui/button/PrimaryButton.vue';
import Card from '@/components/ui/card/Card.vue';

const guideSections = [
    {
        id: 'getting-started',
        title: 'Getting Started',
    },
    {
        id: 'registration',
        title: 'Create an Account',
    },
    {
        id: 'verification',
        title: 'Registration Verification',
    },
    {
        id: 'request',
        title: 'Request a Document',
    },
    {
        id: 'tracking',
        title: 'Track Your Request',
    },
    {
        id: 'appointment',
        title: 'Schedule an Appointment',
    },
    {
        id: 'document',
        title: 'Receive Your Document',
    },
    {
        id: 'verification-qr',
        title: 'Verify a Document',
    },
];

const steps = [
    {
        number: '01',
        title: 'Create an Account',
        description:
            'Register and provide your personal and address information.',
        icon: UserPlus,
    },
    {
        number: '02',
        title: 'Get Verified',
        description:
            'The Municipality reviews your registration and proof of residency.',
        icon: ShieldCheck,
    },
    {
        number: '03',
        title: 'Request a Service',
        description:
            'Choose the document you need and submit your request online.',
        icon: FileText,
    },
    {
        number: '04',
        title: 'Track Progress',
        description: 'Monitor the status of your request through your account.',
        icon: SearchCheck,
    },
    {
        number: '05',
        title: 'Receive Your Document',
        description: 'Download your approved digital document when available.',
        icon: FileCheck2,
    },
];

const documentServices = [
    'Barangay Clearance',
    'Certificate of Residency',
    'Business Clearance',
    'Certificate of Indigency',
];
</script>

<template>
    <Head title="User-Guide" />
    <!-- Hero -->
    <section class="relative overflow-hidden border-b border-border/60">
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
                    User Guide
                </p>

                <h1
                    class="mt-3 text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl"
                >
                    How to use the
                    <span class="text-accent"> Capas Municipal System. </span>
                </h1>

                <p
                    class="mt-6 max-w-2xl text-base leading-7 text-muted-foreground sm:text-lg"
                >
                    Follow this guide to create your resident account, complete
                    verification, request government documents, track your
                    requests, and receive your approved documents online.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <Link href="/register">
                        <PrimaryButton>
                            Create an Account
                            <ArrowRight class="size-4" />
                        </PrimaryButton>
                    </Link>

                    <Link href="/services">
                        <GhostButton class="hover-bounce">
                            View Services
                        </GhostButton>
                    </Link>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Overview -->
    <section class="border-b border-border/60 bg-muted/20">
        <div class="mx-auto max-w-7xl px-6 py-10 lg:px-8">
            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-5">
                <div v-for="step in steps" :key="step.number" class="relative">
                    <div
                        class="flex size-10 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                    >
                        <component :is="step.icon" class="size-5" />
                    </div>

                    <p
                        class="mt-4 text-[10px] font-semibold tracking-wider text-accent"
                    >
                        {{ step.number }}
                    </p>

                    <h3 class="mt-1 text-sm font-semibold">
                        {{ step.title }}
                    </h3>

                    <p class="mt-1 text-xs leading-5 text-muted-foreground">
                        {{ step.description }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Guide -->
    <section>
        <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">
            <div class="grid gap-12 lg:grid-cols-[240px_1fr]">
                <!-- Sidebar -->
                <aside class="lg:sticky lg:top-24 lg:self-start">
                    <p
                        class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                    >
                        Guide Contents
                    </p>

                    <nav class="mt-4 space-y-1">
                        <a
                            v-for="section in guideSections"
                            :key="section.id"
                            :href="`#${section.id}`"
                            class="flex items-center justify-between rounded-lg px-3 py-2.5 text-xs font-medium text-muted-foreground transition-colors hover:bg-muted hover:text-foreground"
                        >
                            {{ section.title }}

                            <ChevronRight class="size-3.5" />
                        </a>
                    </nav>

                    <div
                        class="mt-8 rounded-2xl border border-border bg-muted/20 p-5"
                    >
                        <div
                            class="flex size-10 items-center justify-center rounded-lg bg-secondary/10 text-accent"
                        >
                            <HelpCircle class="size-5" />
                        </div>

                        <h3 class="mt-4 text-sm font-semibold">
                            Need more help?
                        </h3>

                        <p class="mt-2 text-xs leading-5 text-muted-foreground">
                            Find answers to common questions or contact the
                            appropriate office.
                        </p>

                        <div class="mt-4 flex flex-col gap-2">
                            <Link
                                href="/faq"
                                class="inline-flex items-center gap-2 text-xs font-semibold text-accent hover:underline"
                            >
                                View FAQs
                                <ArrowRight class="size-3.5" />
                            </Link>

                            <Link
                                href="/contact"
                                class="inline-flex items-center gap-2 text-xs font-semibold text-accent hover:underline"
                            >
                                Contact Us
                                <ArrowRight class="size-3.5" />
                            </Link>
                        </div>
                    </div>
                </aside>

                <!-- Guide Content -->
                <div class="max-w-3xl">
                    <!-- ================================================= -->
                    <!-- Getting Started -->
                    <!-- ================================================= -->
                    <section id="getting-started" class="scroll-mt-28">
                        <p
                            class="text-sm font-semibold tracking-[0.18em] text-accent uppercase"
                        >
                            Getting Started
                        </p>

                        <h2 class="mt-3 text-3xl font-bold tracking-tight">
                            Start with your
                            <span class="text-accent"> resident account. </span>
                        </h2>

                        <p class="mt-4 text-sm leading-6 text-muted-foreground">
                            Before requesting resident services online, you need
                            to create an account and complete the Municipality's
                            registration verification process.
                        </p>

                        <div class="mt-8 grid gap-4 sm:grid-cols-2">
                            <Card class="rounded-2xl">
                                <div class="p-5">
                                    <UserPlus class="size-5 text-accent" />

                                    <h3 class="mt-4 text-sm font-semibold">
                                        New Resident
                                    </h3>

                                    <p
                                        class="mt-2 text-xs leading-5 text-muted-foreground"
                                    >
                                        Create an account if you are using the
                                        Capas Municipal System for the first
                                        time.
                                    </p>

                                    <Link
                                        href="/register"
                                        class="mt-4 inline-flex items-center gap-2 text-xs font-semibold text-accent hover:underline"
                                    >
                                        Register
                                        <ArrowRight class="size-3.5" />
                                    </Link>
                                </div>
                            </Card>

                            <Card class="rounded-2xl">
                                <div class="p-5">
                                    <UserCheck class="size-5 text-accent" />

                                    <h3 class="mt-4 text-sm font-semibold">
                                        Existing Resident
                                    </h3>

                                    <p
                                        class="mt-2 text-xs leading-5 text-muted-foreground"
                                    >
                                        Sign in to access your requests,
                                        appointments, documents, and account
                                        information.
                                    </p>

                                    <Link
                                        href="/login"
                                        class="mt-4 inline-flex items-center gap-2 text-xs font-semibold text-accent hover:underline"
                                    >
                                        Sign In
                                        <ArrowRight class="size-3.5" />
                                    </Link>
                                </div>
                            </Card>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- Registration -->
                    <!-- ================================================= -->
                    <section
                        id="registration"
                        class="mt-16 scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <UserPlus class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    Step 1
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Create an Account
                                </h2>
                            </div>
                        </div>

                        <p class="mt-5 text-sm leading-6 text-muted-foreground">
                            Registration establishes your resident account and
                            provides the Municipality with the information
                            needed to verify your residency.
                        </p>

                        <div class="mt-7 space-y-3">
                            <div
                                class="flex gap-4 rounded-xl border border-border p-4"
                            >
                                <span
                                    class="flex size-7 shrink-0 items-center justify-center rounded-full bg-accent/10 text-xs font-bold text-accent"
                                >
                                    1
                                </span>

                                <div>
                                    <h3 class="text-sm font-semibold">
                                        Personal Information
                                    </h3>

                                    <p
                                        class="mt-1 text-xs leading-5 text-muted-foreground"
                                    >
                                        Enter the personal information requested
                                        by the registration form.
                                    </p>
                                </div>
                            </div>

                            <div
                                class="flex gap-4 rounded-xl border border-border p-4"
                            >
                                <span
                                    class="flex size-7 shrink-0 items-center justify-center rounded-full bg-accent/10 text-xs font-bold text-accent"
                                >
                                    2
                                </span>

                                <div>
                                    <h3 class="text-sm font-semibold">
                                        Address Details
                                    </h3>

                                    <p
                                        class="mt-1 text-xs leading-5 text-muted-foreground"
                                    >
                                        Provide your current address
                                        information.
                                    </p>
                                </div>
                            </div>

                            <div
                                class="flex gap-4 rounded-xl border border-border p-4"
                            >
                                <span
                                    class="flex size-7 shrink-0 items-center justify-center rounded-full bg-accent/10 text-xs font-bold text-accent"
                                >
                                    3
                                </span>

                                <div>
                                    <h3 class="text-sm font-semibold">
                                        Select Your Barangay
                                    </h3>

                                    <p
                                        class="mt-1 text-xs leading-5 text-muted-foreground"
                                    >
                                        Select the barangay where you currently
                                        reside.
                                    </p>
                                </div>
                            </div>

                            <div
                                class="flex gap-4 rounded-xl border border-border p-4"
                            >
                                <span
                                    class="flex size-7 shrink-0 items-center justify-center rounded-full bg-accent/10 text-xs font-bold text-accent"
                                >
                                    4
                                </span>

                                <div>
                                    <h3 class="text-sm font-semibold">
                                        Upload Proof of Residency
                                    </h3>

                                    <p
                                        class="mt-1 text-xs leading-5 text-muted-foreground"
                                    >
                                        Submit the required proof of residency
                                        for the Municipality to review your
                                        registration.
                                    </p>
                                </div>
                            </div>

                            <div
                                class="flex gap-4 rounded-xl border border-border p-4"
                            >
                                <span
                                    class="flex size-7 shrink-0 items-center justify-center rounded-full bg-accent/10 text-xs font-bold text-accent"
                                >
                                    5
                                </span>

                                <div>
                                    <h3 class="text-sm font-semibold">
                                        Submit Registration
                                    </h3>

                                    <p
                                        class="mt-1 text-xs leading-5 text-muted-foreground"
                                    >
                                        Review your information and submit the
                                        registration for municipal verification.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="mt-6 flex gap-4 rounded-2xl border border-accent/20 bg-accent/5 p-5"
                        >
                            <Upload
                                class="mt-0.5 size-5 shrink-0 text-accent"
                            />

                            <p class="text-xs leading-6 text-muted-foreground">
                                <strong class="text-foreground">
                                    Important:
                                </strong>
                                Proof of residency is part of the registration
                                and verification process. It does not
                                automatically mean that you must upload proof of
                                residency every time you request a document.
                            </p>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- Verification -->
                    <!-- ================================================= -->
                    <section
                        id="verification"
                        class="mt-16 scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <ShieldCheck class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    Step 2
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Wait for Verification
                                </h2>
                            </div>
                        </div>

                        <p class="mt-5 text-sm leading-6 text-muted-foreground">
                            After registration, your information is submitted to
                            the Municipality for review. Verification helps
                            confirm that the account belongs to a resident
                            associated with the selected barangay.
                        </p>

                        <div class="mt-7 grid gap-4 sm:grid-cols-2">
                            <div class="rounded-2xl border border-border p-5">
                                <CheckCircle2 class="size-5 text-accent" />

                                <h3 class="mt-4 text-sm font-semibold">
                                    Approved
                                </h3>

                                <p
                                    class="mt-2 text-xs leading-5 text-muted-foreground"
                                >
                                    Your resident account is approved and you
                                    can access available resident services.
                                </p>
                            </div>

                            <div class="rounded-2xl border border-border p-5">
                                <SearchCheck class="size-5 text-accent" />

                                <h3 class="mt-4 text-sm font-semibold">
                                    Rejected
                                </h3>

                                <p
                                    class="mt-2 text-xs leading-5 text-muted-foreground"
                                >
                                    Review the reason provided, correct the
                                    necessary information, and resubmit your
                                    registration.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- Request -->
                    <!-- ================================================= -->
                    <section
                        id="request"
                        class="mt-16 scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <FileText class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    Step 3
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Request a Document
                                </h2>
                            </div>
                        </div>

                        <p class="mt-5 text-sm leading-6 text-muted-foreground">
                            Once your resident account has been approved, you
                            can request available municipal and barangay
                            documents online.
                        </p>

                        <div class="mt-7">
                            <p class="text-xs font-semibold text-foreground">
                                Common services include:
                            </p>

                            <div class="mt-3 grid gap-3 sm:grid-cols-2">
                                <div
                                    v-for="service in documentServices"
                                    :key="service"
                                    class="flex items-center gap-3 rounded-xl border border-border p-4"
                                >
                                    <CheckCircle2
                                        class="size-4 shrink-0 text-accent"
                                    />

                                    <span class="text-xs font-medium">
                                        {{ service }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-7 space-y-3">
                            <div class="flex gap-4 rounded-xl bg-muted/30 p-4">
                                <span
                                    class="flex size-7 shrink-0 items-center justify-center rounded-full bg-accent text-xs font-bold text-white"
                                >
                                    1
                                </span>

                                <div>
                                    <h3 class="text-sm font-semibold">
                                        Select the service
                                    </h3>

                                    <p
                                        class="mt-1 text-xs leading-5 text-muted-foreground"
                                    >
                                        Choose the document you want to request.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4 rounded-xl bg-muted/30 p-4">
                                <span
                                    class="flex size-7 shrink-0 items-center justify-center rounded-full bg-accent text-xs font-bold text-white"
                                >
                                    2
                                </span>

                                <div>
                                    <h3 class="text-sm font-semibold">
                                        Complete the request
                                    </h3>

                                    <p
                                        class="mt-1 text-xs leading-5 text-muted-foreground"
                                    >
                                        Provide the information required for the
                                        selected service.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4 rounded-xl bg-muted/30 p-4">
                                <span
                                    class="flex size-7 shrink-0 items-center justify-center rounded-full bg-accent text-xs font-bold text-white"
                                >
                                    3
                                </span>

                                <div>
                                    <h3 class="text-sm font-semibold">
                                        Submit your request
                                    </h3>

                                    <p
                                        class="mt-1 text-xs leading-5 text-muted-foreground"
                                    >
                                        Review the details and submit the
                                        request to the appropriate office.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <Link
                            href="/services"
                            class="mt-7 inline-flex items-center gap-2 text-xs font-semibold text-accent hover:underline"
                        >
                            Browse Available Services
                            <ArrowRight class="size-3.5" />
                        </Link>
                    </section>

                    <!-- ================================================= -->
                    <!-- Tracking -->
                    <!-- ================================================= -->
                    <section
                        id="tracking"
                        class="mt-16 scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <SearchCheck class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    Step 4
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Track Your Request
                                </h2>
                            </div>
                        </div>

                        <p class="mt-5 text-sm leading-6 text-muted-foreground">
                            After submitting a request, you can monitor its
                            progress through your resident account. This allows
                            you to know when your request is being reviewed,
                            processed, or completed.
                        </p>

                        <div
                            class="mt-7 overflow-hidden rounded-2xl border border-border"
                        >
                            <div
                                class="grid divide-y divide-border sm:grid-cols-4 sm:divide-x sm:divide-y-0"
                            >
                                <div class="p-5">
                                    <Clock3 class="size-5 text-accent" />

                                    <h3 class="mt-3 text-xs font-semibold">
                                        Pending
                                    </h3>

                                    <p
                                        class="mt-1 text-[11px] leading-5 text-muted-foreground"
                                    >
                                        Waiting for review or assignment.
                                    </p>
                                </div>

                                <div class="p-5">
                                    <SearchCheck class="size-5 text-accent" />

                                    <h3 class="mt-3 text-xs font-semibold">
                                        In Progress
                                    </h3>

                                    <p
                                        class="mt-1 text-[11px] leading-5 text-muted-foreground"
                                    >
                                        The responsible office is processing the
                                        request.
                                    </p>
                                </div>

                                <div class="p-5">
                                    <CheckCircle2 class="size-5 text-accent" />

                                    <h3 class="mt-3 text-xs font-semibold">
                                        Approved
                                    </h3>

                                    <p
                                        class="mt-1 text-[11px] leading-5 text-muted-foreground"
                                    >
                                        The request has been approved.
                                    </p>
                                </div>

                                <div class="p-5">
                                    <FileCheck2 class="size-5 text-accent" />

                                    <h3 class="mt-3 text-xs font-semibold">
                                        Completed
                                    </h3>

                                    <p
                                        class="mt-1 text-[11px] leading-5 text-muted-foreground"
                                    >
                                        The document is ready according to the
                                        service process.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- Appointment -->
                    <!-- ================================================= -->
                    <section
                        id="appointment"
                        class="mt-16 scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <CalendarDays class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    Step 5
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Schedule an Appointment
                                </h2>
                            </div>
                        </div>

                        <p class="mt-5 text-sm leading-6 text-muted-foreground">
                            Some services may require or allow an in-person
                            appointment. When appointment scheduling is
                            available, you can select an available schedule
                            through the system.
                        </p>

                        <div class="mt-7 grid gap-4 sm:grid-cols-3">
                            <div class="rounded-2xl border border-border p-5">
                                <CalendarDays class="size-5 text-accent" />

                                <h3 class="mt-4 text-sm font-semibold">
                                    Select a Schedule
                                </h3>

                                <p
                                    class="mt-2 text-xs leading-5 text-muted-foreground"
                                >
                                    Choose from the available dates and times.
                                </p>
                            </div>

                            <div class="rounded-2xl border border-border p-5">
                                <CheckCircle2 class="size-5 text-accent" />

                                <h3 class="mt-4 text-sm font-semibold">
                                    Confirm
                                </h3>

                                <p
                                    class="mt-2 text-xs leading-5 text-muted-foreground"
                                >
                                    Review your appointment details before
                                    confirming.
                                </p>
                            </div>

                            <div class="rounded-2xl border border-border p-5">
                                <Clock3 class="size-5 text-accent" />

                                <h3 class="mt-4 text-sm font-semibold">
                                    Attend
                                </h3>

                                <p
                                    class="mt-2 text-xs leading-5 text-muted-foreground"
                                >
                                    Visit the designated office if the service
                                    requires an in-person transaction.
                                </p>
                            </div>
                        </div>

                        <div
                            class="mt-6 rounded-2xl border border-border bg-muted/20 p-5"
                        >
                            <p class="text-xs leading-6 text-muted-foreground">
                                <strong class="text-foreground"> Note: </strong>
                                Not every document request requires an
                                appointment. Appointment availability depends on
                                the service and responsible office.
                            </p>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- Document -->
                    <!-- ================================================= -->
                    <section
                        id="document"
                        class="mt-16 scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <FileCheck2 class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    Step 6
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Receive Your Document
                                </h2>
                            </div>
                        </div>

                        <p class="mt-5 text-sm leading-6 text-muted-foreground">
                            Once your request has been approved, the document
                            will be made available according to the service's
                            issuance process.
                        </p>

                        <div class="mt-7 grid gap-4 sm:grid-cols-2">
                            <div class="rounded-2xl border border-border p-5">
                                <FileText class="size-5 text-accent" />

                                <h3 class="mt-4 text-sm font-semibold">
                                    Digital Document
                                </h3>

                                <p
                                    class="mt-2 text-xs leading-5 text-muted-foreground"
                                >
                                    If digital issuance is supported, an
                                    approved PDF may be made available for
                                    viewing or downloading through your account.
                                </p>
                            </div>

                            <div class="rounded-2xl border border-border p-5">
                                <CalendarDays class="size-5 text-accent" />

                                <h3 class="mt-4 text-sm font-semibold">
                                    Office Release
                                </h3>

                                <p
                                    class="mt-2 text-xs leading-5 text-muted-foreground"
                                >
                                    Some services may require the document to be
                                    claimed from the responsible office.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- QR Verification -->
                    <!-- ================================================= -->
                    <section
                        id="verification-qr"
                        class="mt-16 scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <QrCode class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    Document Verification
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Verify a Digital Document
                                </h2>
                            </div>
                        </div>

                        <p class="mt-5 text-sm leading-6 text-muted-foreground">
                            Approved digital documents may contain a QR code
                            that can be scanned to verify information associated
                            with the document.
                        </p>

                        <div
                            class="mt-7 flex gap-5 rounded-2xl border border-border bg-muted/20 p-6"
                        >
                            <div
                                class="flex size-14 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <QrCode class="size-7" />
                            </div>

                            <div>
                                <h3 class="text-sm font-semibold">
                                    Scan the QR code
                                </h3>

                                <p
                                    class="mt-2 text-xs leading-6 text-muted-foreground"
                                >
                                    Use a compatible QR scanner to open the
                                    document verification information provided
                                    by the Capas Municipal System.
                                </p>

                                <Link
                                    href="/verify"
                                    class="mt-4 inline-flex items-center gap-2 text-xs font-semibold text-accent hover:underline"
                                >
                                    Verify a Document
                                    <ArrowRight class="size-3.5" />
                                </Link>
                            </div>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- Important Information -->
                    <!-- ================================================= -->
                    <div
                        class="mt-16 rounded-2xl border border-accent/20 bg-accent/5 p-6"
                    >
                        <div class="flex gap-4">
                            <ShieldCheck
                                class="mt-0.5 size-5 shrink-0 text-accent"
                            />

                            <div>
                                <h3 class="text-sm font-semibold">
                                    Keep your account secure
                                </h3>

                                <p
                                    class="mt-2 text-xs leading-6 text-muted-foreground"
                                >
                                    Do not share your password or account
                                    credentials with other people. Always sign
                                    out when using a shared or public device and
                                    make sure the information submitted through
                                    your account is accurate.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ CTA -->
    <section class="border-t border-border/60 bg-muted/20">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">
            <div
                class="flex flex-col justify-between gap-8 lg:flex-row lg:items-center"
            >
                <div class="max-w-2xl">
                    <p
                        class="text-xs font-semibold tracking-[0.18em] text-accent uppercase"
                    >
                        Need More Information?
                    </p>

                    <h2
                        class="mt-3 text-2xl font-bold tracking-tight sm:text-3xl"
                    >
                        Find answers to common
                        <span class="text-accent"> questions. </span>
                    </h2>

                    <p class="mt-3 text-sm leading-6 text-muted-foreground">
                        Visit the FAQ page for answers about registration,
                        document requests, appointments, verification, and your
                        resident account.
                    </p>
                </div>

                <Link href="/faq">
                    <button
                        class="inline-flex h-11 items-center gap-2 rounded-lg bg-accent px-5 text-sm font-semibold text-white transition-colors hover:bg-accent/90"
                    >
                        View FAQs
                        <ArrowRight class="size-4" />
                    </button>
                </Link>
            </div>
        </div>
    </section>
</template>
