<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import {
    ArrowRight,
    CheckCircle2,
    ChevronRight,
    FileCheck2,
    FileText,
    LockKeyhole,
    Mail,
    QrCode,
    ShieldCheck,
    UserCheck,
    Users,
} from '@lucide/vue';

import Card from '@/components/ui/card/Card.vue';

const sections = [
    {
        id: 'information',
        title: 'Information We Collect',
    },
    {
        id: 'use',
        title: 'How We Use Your Information',
    },
    {
        id: 'verification',
        title: 'Resident Verification',
    },
    {
        id: 'sharing',
        title: 'Information Sharing',
    },
    {
        id: 'access',
        title: 'Access and Security',
    },
    {
        id: 'documents',
        title: 'Documents and QR Verification',
    },
    {
        id: 'retention',
        title: 'Data Retention',
    },
    {
        id: 'rights',
        title: 'Your Rights',
    },
    {
        id: 'changes',
        title: 'Changes to This Policy',
    },
];

const privacyHighlights = [
    {
        title: 'Resident Information',
        description:
            'Personal and address information is collected to create and verify resident accounts.',
        icon: UserCheck,
    },
    {
        title: 'Controlled Access',
        description:
            'Administrative access is based on the responsibilities of the municipal or barangay office.',
        icon: LockKeyhole,
    },
    {
        title: 'Secure Documents',
        description:
            'Approved digital documents may include QR codes for document verification.',
        icon: QrCode,
    },
];
</script>

<template>
    <Head title="Privacy Policy" />

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
                    Privacy & Security
                </p>

                <h1
                    class="mt-3 text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl"
                >
                    Your information,
                    <span class="text-accent"> handled responsibly. </span>
                </h1>

                <p
                    class="mt-6 max-w-2xl text-base leading-7 text-muted-foreground sm:text-lg"
                >
                    The eCapas Municipal System collects and processes
                    information needed to provide digital municipal and barangay
                    services while maintaining appropriate access and security
                    controls.
                </p>

                <p class="mt-5 text-xs text-muted-foreground">
                    Last updated: August 20, 2026
                </p>
            </div>
        </div>
    </section>

    <!-- Privacy Highlights -->
    <section class="border-b border-border/60 bg-muted/20">
        <div
            class="mx-auto grid max-w-7xl divide-y divide-border px-6 sm:grid-cols-3 sm:divide-x sm:divide-y-0 lg:px-8"
        >
            <div
                v-for="item in privacyHighlights"
                :key="item.title"
                class="flex items-center gap-4 px-0 py-6 sm:px-6"
            >
                <div
                    class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                >
                    <component :is="item.icon" class="size-5" />
                </div>

                <div>
                    <p class="text-sm font-semibold">
                        {{ item.title }}
                    </p>

                    <p class="mt-1 text-xs leading-5 text-muted-foreground">
                        {{ item.description }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Privacy Content -->
    <section>
        <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">
            <div class="grid gap-12 lg:grid-cols-[240px_1fr]">
                <!-- Sidebar -->
                <aside class="lg:sticky lg:top-24 lg:self-start">
                    <p
                        class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                    >
                        On this page
                    </p>

                    <nav class="mt-4 space-y-1">
                        <a
                            v-for="section in sections"
                            :key="section.id"
                            :href="`#${section.id}`"
                            class="flex items-center justify-between rounded-lg px-3 py-2.5 text-xs font-medium text-muted-foreground transition-colors hover:bg-muted hover:text-foreground"
                        >
                            {{ section.title }}

                            <ChevronRight class="size-3.5" />
                        </a>
                    </nav>

                    <!-- Contact Card -->
                    <div
                        class="mt-8 rounded-2xl border border-border bg-muted/20 p-5"
                    >
                        <div
                            class="flex size-10 items-center justify-center rounded-lg bg-secondary/10 text-accent"
                        >
                            <Mail class="size-5" />
                        </div>

                        <h3 class="mt-4 text-sm font-semibold">
                            Privacy concerns?
                        </h3>

                        <p class="mt-2 text-xs leading-5 text-muted-foreground">
                            If you have questions about your personal
                            information, contact the appropriate municipal
                            office.
                        </p>

                        <Link
                            href="/contact"
                            class="mt-4 inline-flex items-center gap-2 text-xs font-semibold text-accent hover:underline"
                        >
                            Contact Us
                            <ArrowRight class="size-3.5" />
                        </Link>
                    </div>
                </aside>

                <!-- Main Content -->
                <article
                    class="max-w-3xl text-sm leading-7 text-muted-foreground"
                >
                    <!-- Introduction -->
                    <div class="mb-12">
                        <p>
                            The
                            <strong class="text-foreground">
                                eCapas Municipal System
                            </strong>
                            is a centralized digital platform designed to
                            provide residents with convenient access to
                            municipal and barangay document-related services.
                        </p>

                        <p class="mt-5">
                            This Privacy Policy explains what information may be
                            collected through the system, why it is needed, how
                            it may be used, and how access to information is
                            managed within the platform.
                        </p>

                        <div
                            class="mt-6 flex gap-4 rounded-2xl border border-border bg-muted/20 p-5"
                        >
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-full bg-secondary/10 text-accent"
                            >
                                <ShieldCheck class="size-5" />
                            </div>

                            <p class="text-xs leading-6">
                                By using the eCapas Municipal System, you
                                acknowledge that information may be collected
                                and processed as necessary to provide government
                                services, verify resident accounts, process
                                requests, and maintain government records.
                            </p>
                        </div>
                    </div>

                    <!-- ================================================= -->
                    <!-- 1. Information -->
                    <!-- ================================================= -->
                    <section id="information" class="scroll-mt-28">
                        <h2
                            class="text-2xl font-bold tracking-tight text-foreground"
                        >
                            1. Information We Collect
                        </h2>

                        <p class="mt-4">
                            Depending on the service you use, the system may
                            collect information necessary to establish your
                            resident account and process your requests.
                        </p>

                        <h3 class="mt-7 text-sm font-semibold text-foreground">
                            Personal Information
                        </h3>

                        <ul class="mt-3 space-y-2">
                            <li class="flex gap-3">
                                <CheckCircle2
                                    class="mt-1 size-4 shrink-0 text-accent"
                                />
                                <span>
                                    Full name and other basic identifying
                                    information.
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <CheckCircle2
                                    class="mt-1 size-4 shrink-0 text-accent"
                                />
                                <span>
                                    Contact information such as email address or
                                    other information provided during
                                    registration.
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <CheckCircle2
                                    class="mt-1 size-4 shrink-0 text-accent"
                                />
                                <span> Address and barangay information. </span>
                            </li>

                            <li class="flex gap-3">
                                <CheckCircle2
                                    class="mt-1 size-4 shrink-0 text-accent"
                                />
                                <span>
                                    Information submitted when requesting a
                                    government document.
                                </span>
                            </li>
                        </ul>

                        <h3 class="mt-7 text-sm font-semibold text-foreground">
                            Verification Information
                        </h3>

                        <p class="mt-3">
                            During registration, applicants may be required to
                            provide proof of residency or other information
                            necessary for the Municipality to verify their
                            registration.
                        </p>

                        <p class="mt-4">
                            These documents are used for verification and are
                            not intended to be repeatedly submitted for every
                            document request unless specifically required by the
                            responsible office.
                        </p>
                    </section>

                    <!-- ================================================= -->
                    <!-- 2. Use -->
                    <!-- ================================================= -->
                    <section
                        id="use"
                        class="mt-14 scroll-mt-28 border-t border-border pt-14"
                    >
                        <h2
                            class="text-2xl font-bold tracking-tight text-foreground"
                        >
                            2. How We Use Your Information
                        </h2>

                        <p class="mt-4">
                            Information collected through the system may be used
                            for the following purposes:
                        </p>

                        <ul class="mt-4 space-y-3">
                            <li class="flex gap-3">
                                <FileCheck2
                                    class="mt-1 size-4 shrink-0 text-accent"
                                />
                                <span>
                                    Creating and maintaining your resident
                                    account.
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <FileCheck2
                                    class="mt-1 size-4 shrink-0 text-accent"
                                />
                                <span>
                                    Reviewing and verifying resident
                                    registrations.
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <FileCheck2
                                    class="mt-1 size-4 shrink-0 text-accent"
                                />
                                <span>
                                    Processing municipal and barangay document
                                    requests.
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <FileCheck2
                                    class="mt-1 size-4 shrink-0 text-accent"
                                />
                                <span>
                                    Managing appointments and service schedules.
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <FileCheck2
                                    class="mt-1 size-4 shrink-0 text-accent"
                                />
                                <span>
                                    Generating approved digital documents when
                                    supported by the service.
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <FileCheck2
                                    class="mt-1 size-4 shrink-0 text-accent"
                                />
                                <span>
                                    Maintaining accurate government service
                                    records.
                                </span>
                            </li>
                        </ul>
                    </section>

                    <!-- ================================================= -->
                    <!-- 3. Verification -->
                    <!-- ================================================= -->
                    <section
                        id="verification"
                        class="mt-14 scroll-mt-28 border-t border-border pt-14"
                    >
                        <h2
                            class="text-2xl font-bold tracking-tight text-foreground"
                        >
                            3. Resident Verification
                        </h2>

                        <p class="mt-4">
                            Resident registration is subject to municipal
                            verification before access to resident services is
                            granted.
                        </p>

                        <div
                            class="mt-6 overflow-hidden rounded-2xl border border-border"
                        >
                            <div
                                class="grid divide-y divide-border sm:grid-cols-4 sm:divide-x sm:divide-y-0"
                            >
                                <div class="p-4">
                                    <p
                                        class="text-[10px] font-semibold tracking-wider text-accent uppercase"
                                    >
                                        01
                                    </p>

                                    <p
                                        class="mt-2 text-xs font-semibold text-foreground"
                                    >
                                        Registration
                                    </p>

                                    <p class="mt-1 text-[11px] leading-5">
                                        Applicant provides account and address
                                        information.
                                    </p>
                                </div>

                                <div class="p-4">
                                    <p
                                        class="text-[10px] font-semibold tracking-wider text-accent uppercase"
                                    >
                                        02
                                    </p>

                                    <p
                                        class="mt-2 text-xs font-semibold text-foreground"
                                    >
                                        Verification
                                    </p>

                                    <p class="mt-1 text-[11px] leading-5">
                                        Municipal personnel review the submitted
                                        registration.
                                    </p>
                                </div>

                                <div class="p-4">
                                    <p
                                        class="text-[10px] font-semibold tracking-wider text-accent uppercase"
                                    >
                                        03
                                    </p>

                                    <p
                                        class="mt-2 text-xs font-semibold text-foreground"
                                    >
                                        Approval
                                    </p>

                                    <p class="mt-1 text-[11px] leading-5">
                                        An approved applicant receives access to
                                        resident services.
                                    </p>
                                </div>

                                <div class="p-4">
                                    <p
                                        class="text-[10px] font-semibold tracking-wider text-accent uppercase"
                                    >
                                        04
                                    </p>

                                    <p
                                        class="mt-2 text-xs font-semibold text-foreground"
                                    >
                                        Resubmission
                                    </p>

                                    <p class="mt-1 text-[11px] leading-5">
                                        Rejected registrations may be corrected
                                        and resubmitted.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- 4. Sharing -->
                    <!-- ================================================= -->
                    <section
                        id="sharing"
                        class="mt-14 scroll-mt-28 border-t border-border pt-14"
                    >
                        <h2
                            class="text-2xl font-bold tracking-tight text-foreground"
                        >
                            4. Information Sharing
                        </h2>

                        <p class="mt-4">
                            Access to resident information is managed according
                            to the role and responsibilities of authorized users
                            within the system.
                        </p>

                        <div class="mt-6 grid gap-4 sm:grid-cols-3">
                            <Card class="rounded-2xl">
                                <div class="p-5">
                                    <Users class="size-5 text-accent" />

                                    <h3
                                        class="mt-4 text-sm font-semibold text-foreground"
                                    >
                                        Residents
                                    </h3>

                                    <p class="mt-2 text-xs leading-5">
                                        Can access their own account, requests,
                                        appointments, and available documents.
                                    </p>
                                </div>
                            </Card>

                            <Card class="rounded-2xl">
                                <div class="p-5">
                                    <FileText class="size-5 text-accent" />

                                    <h3
                                        class="mt-4 text-sm font-semibold text-foreground"
                                    >
                                        Barangay Administrators
                                    </h3>

                                    <p class="mt-2 text-xs leading-5">
                                        Can manage information and requests
                                        relevant to their barangay.
                                    </p>
                                </div>
                            </Card>

                            <Card class="rounded-2xl">
                                <div class="p-5">
                                    <ShieldCheck class="size-5 text-accent" />

                                    <h3
                                        class="mt-4 text-sm font-semibold text-foreground"
                                    >
                                        Municipal Administrators
                                    </h3>

                                    <p class="mt-2 text-xs leading-5">
                                        Can manage municipal-level operations
                                        and system-wide information according to
                                        their authorized responsibilities.
                                    </p>
                                </div>
                            </Card>
                        </div>

                        <p class="mt-6">
                            Information should only be accessed by authorized
                            personnel when necessary to perform their assigned
                            government functions or process a service request.
                        </p>
                    </section>

                    <!-- ================================================= -->
                    <!-- 5. Access -->
                    <!-- ================================================= -->
                    <section
                        id="access"
                        class="mt-14 scroll-mt-28 border-t border-border pt-14"
                    >
                        <h2
                            class="text-2xl font-bold tracking-tight text-foreground"
                        >
                            5. Access and Security
                        </h2>

                        <p class="mt-4">
                            The system is designed with role-based access so
                            that users receive access appropriate to their
                            responsibilities.
                        </p>

                        <p class="mt-4">
                            Administrative users should only access information
                            necessary for their assigned functions. Barangay
                            administrators are restricted to information
                            associated with their barangay, while municipal
                            administrators may manage information at the
                            municipal level.
                        </p>

                        <div
                            class="mt-6 flex gap-4 rounded-2xl border border-border bg-muted/20 p-5"
                        >
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-full bg-secondary/10 text-accent"
                            >
                                <LockKeyhole class="size-5" />
                            </div>

                            <p class="text-xs leading-6">
                                While reasonable technical and organizational
                                measures should be used to protect information,
                                no online system can guarantee absolute
                                security. Users should also protect their
                                account credentials and avoid sharing passwords
                                with others.
                            </p>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- 6. Documents -->
                    <!-- ================================================= -->
                    <section
                        id="documents"
                        class="mt-14 scroll-mt-28 border-t border-border pt-14"
                    >
                        <h2
                            class="text-2xl font-bold tracking-tight text-foreground"
                        >
                            6. Documents and QR Verification
                        </h2>

                        <p class="mt-4">
                            When a document request is approved, the system may
                            generate a digital document in PDF format when
                            digital issuance is supported by the service.
                        </p>

                        <p class="mt-4">
                            Generated documents may contain a QR code that
                            allows the document's verification information to be
                            checked through the Capas Municipal System.
                        </p>

                        <div
                            class="mt-6 flex gap-4 rounded-2xl border border-border bg-muted/20 p-5"
                        >
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-full bg-secondary/10 text-accent"
                            >
                                <QrCode class="size-5" />
                            </div>

                            <div>
                                <h3
                                    class="text-sm font-semibold text-foreground"
                                >
                                    Document verification
                                </h3>

                                <p class="mt-2 text-xs leading-6">
                                    QR verification is intended to help confirm
                                    whether a document was issued through the
                                    system and corresponds to the verification
                                    information provided by the Municipality or
                                    responsible barangay office.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- 7. Retention -->
                    <!-- ================================================= -->
                    <section
                        id="retention"
                        class="mt-14 scroll-mt-28 border-t border-border pt-14"
                    >
                        <h2
                            class="text-2xl font-bold tracking-tight text-foreground"
                        >
                            7. Data Retention
                        </h2>

                        <p class="mt-4">
                            Information may be retained for as long as necessary
                            to provide government services, maintain resident
                            and transaction records, comply with applicable
                            recordkeeping requirements, and support the
                            operation of the system.
                        </p>

                        <p class="mt-4">
                            Different types of information may have different
                            retention periods depending on their purpose and the
                            applicable requirements of the responsible
                            government office.
                        </p>
                    </section>

                    <!-- ================================================= -->
                    <!-- 8. Rights -->
                    <!-- ================================================= -->
                    <section
                        id="rights"
                        class="mt-14 scroll-mt-28 border-t border-border pt-14"
                    >
                        <h2
                            class="text-2xl font-bold tracking-tight text-foreground"
                        >
                            8. Your Rights
                        </h2>

                        <p class="mt-4">
                            Subject to applicable laws, regulations, and
                            government procedures, individuals may have rights
                            regarding their personal information.
                        </p>

                        <ul class="mt-5 space-y-3">
                            <li class="flex gap-3">
                                <CheckCircle2
                                    class="mt-1 size-4 shrink-0 text-accent"
                                />

                                <span>
                                    Request information about how their personal
                                    information is being used.
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <CheckCircle2
                                    class="mt-1 size-4 shrink-0 text-accent"
                                />

                                <span>
                                    Request correction of inaccurate or
                                    incomplete information, where applicable.
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <CheckCircle2
                                    class="mt-1 size-4 shrink-0 text-accent"
                                />

                                <span>
                                    Raise concerns regarding the handling of
                                    their personal information.
                                </span>
                            </li>

                            <li class="flex gap-3">
                                <CheckCircle2
                                    class="mt-1 size-4 shrink-0 text-accent"
                                />

                                <span>
                                    Contact the appropriate government office
                                    regarding privacy-related concerns.
                                </span>
                            </li>
                        </ul>
                    </section>

                    <!-- ================================================= -->
                    <!-- 9. Changes -->
                    <!-- ================================================= -->
                    <section
                        id="changes"
                        class="mt-14 scroll-mt-28 border-t border-border pt-14"
                    >
                        <h2
                            class="text-2xl font-bold tracking-tight text-foreground"
                        >
                            9. Changes to This Privacy Policy
                        </h2>

                        <p class="mt-4">
                            This Privacy Policy may be updated when changes are
                            made to the eCapas Municipal System, its services,
                            information practices, or applicable requirements.
                        </p>

                        <p class="mt-4">
                            When significant changes are made, the updated
                            policy may be published through the system. Users
                            are encouraged to review this page periodically for
                            the latest information.
                        </p>
                    </section>

                    <!-- Final Notice -->
                    <div
                        class="mt-14 rounded-2xl border border-border bg-muted/20 p-6"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-full bg-secondary/10 text-accent"
                            >
                                <ShieldCheck class="size-5" />
                            </div>

                            <div>
                                <h3
                                    class="text-sm font-semibold text-foreground"
                                >
                                    Questions about this policy?
                                </h3>

                                <p class="mt-2 text-xs leading-6">
                                    For questions, concerns, or requests
                                    relating to personal information, please
                                    contact the appropriate municipal office
                                    through the information provided on our
                                    Contact page.
                                </p>

                                <Link
                                    href="/contact"
                                    class="mt-4 inline-flex items-center gap-2 text-xs font-semibold text-accent hover:underline"
                                >
                                    Contact the Municipality
                                    <ArrowRight class="size-3.5" />
                                </Link>
                            </div>
                        </div>
                    </div>
                </article>
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
                            class="text-xs font-semibold tracking-[0.18em] text-[#57CC99]"
                        >
                            eCapas Municipal System
                        </p>

                        <h2
                            class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl"
                        >
                            Your information is part of
                            <span class="text-[#57CC99]">
                                your government services.
                            </span>
                        </h2>

                        <p class="mt-4 text-sm leading-6 text-white/70">
                            We aim to provide convenient digital services while
                            maintaining responsible access to resident
                            information.
                        </p>
                    </div>

                    <Link href="/contact">
                        <button
                            class="inline-flex h-11 shrink-0 items-center gap-2 rounded-lg bg-[#57CC99] px-5 text-sm font-semibold text-[#032240] transition-colors hover:bg-[#80ED99]"
                        >
                            Contact Us
                            <ArrowRight class="size-4" />
                        </button>
                    </Link>
                </div>
            </div>
        </div>
    </section>
</template>
