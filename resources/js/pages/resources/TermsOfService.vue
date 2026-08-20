<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import {
    AlertCircle,
    ArrowRight,
    CalendarDays,
    CheckCircle2,
    FileCheck2,
    FileText,
    HelpCircle,
    Info,
    Landmark,
    LockKeyhole,
    Scale,
    ShieldCheck,
    UserCheck,
} from '@lucide/vue';
</script>

<template>
    <Head title="Terms-of-Service" />

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
                    Legal Information
                </p>

                <h1
                    class="mt-3 text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl"
                >
                    Terms of
                    <span class="text-accent"> Service. </span>
                </h1>

                <p
                    class="mt-6 max-w-2xl text-base leading-7 text-muted-foreground sm:text-lg"
                >
                    These terms explain the rules and conditions for using the
                    eCapas Municipal System and its online municipal and
                    barangay services.
                </p>

                <p class="mt-5 text-xs text-muted-foreground">
                    Last updated: August 2026
                </p>
            </div>
        </div>
    </section>

    <!-- Quick Summary -->
    <section class="border-b border-border/60 bg-muted/20">
        <div class="mx-auto max-w-7xl px-6 py-10 lg:px-8">
            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex gap-4">
                    <div
                        class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                    >
                        <UserCheck class="size-5" />
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold">
                            Use Your Own Account
                        </h3>

                        <p class="mt-1 text-xs leading-5 text-muted-foreground">
                            Keep your account information accurate and secure.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div
                        class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                    >
                        <FileCheck2 class="size-5" />
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold">
                            Provide Accurate Information
                        </h3>

                        <p class="mt-1 text-xs leading-5 text-muted-foreground">
                            Submit truthful and complete information.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div
                        class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                    >
                        <ShieldCheck class="size-5" />
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold">
                            Protect Your Credentials
                        </h3>

                        <p class="mt-1 text-xs leading-5 text-muted-foreground">
                            Do not share your password or account access.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div
                        class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                    >
                        <Scale class="size-5" />
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold">
                            Use Services Properly
                        </h3>

                        <p class="mt-1 text-xs leading-5 text-muted-foreground">
                            Use the platform only for legitimate purposes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Terms Content -->
    <section>
        <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">
            <div class="grid gap-12 lg:grid-cols-[230px_1fr]">
                <!-- Sidebar -->
                <aside class="lg:sticky lg:top-24 lg:self-start">
                    <p
                        class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                    >
                        On This Page
                    </p>

                    <nav class="mt-4 space-y-1">
                        <a
                            href="#acceptance"
                            class="block rounded-lg px-3 py-2 text-xs font-medium text-muted-foreground transition-colors hover:bg-muted hover:text-foreground"
                        >
                            1. Acceptance of Terms
                        </a>

                        <a
                            href="#system"
                            class="block rounded-lg px-3 py-2 text-xs font-medium text-muted-foreground transition-colors hover:bg-muted hover:text-foreground"
                        >
                            2. About the System
                        </a>

                        <a
                            href="#accounts"
                            class="block rounded-lg px-3 py-2 text-xs font-medium text-muted-foreground transition-colors hover:bg-muted hover:text-foreground"
                        >
                            3. Resident Accounts
                        </a>

                        <a
                            href="#verification"
                            class="block rounded-lg px-3 py-2 text-xs font-medium text-muted-foreground transition-colors hover:bg-muted hover:text-foreground"
                        >
                            4. Registration Verification
                        </a>

                        <a
                            href="#requests"
                            class="block rounded-lg px-3 py-2 text-xs font-medium text-muted-foreground transition-colors hover:bg-muted hover:text-foreground"
                        >
                            5. Document Requests
                        </a>

                        <a
                            href="#documents"
                            class="block rounded-lg px-3 py-2 text-xs font-medium text-muted-foreground transition-colors hover:bg-muted hover:text-foreground"
                        >
                            6. Digital Documents
                        </a>

                        <a
                            href="#appointments"
                            class="block rounded-lg px-3 py-2 text-xs font-medium text-muted-foreground transition-colors hover:bg-muted hover:text-foreground"
                        >
                            7. Appointments
                        </a>

                        <a
                            href="#acceptable-use"
                            class="block rounded-lg px-3 py-2 text-xs font-medium text-muted-foreground transition-colors hover:bg-muted hover:text-foreground"
                        >
                            8. Acceptable Use
                        </a>

                        <a
                            href="#privacy"
                            class="block rounded-lg px-3 py-2 text-xs font-medium text-muted-foreground transition-colors hover:bg-muted hover:text-foreground"
                        >
                            9. Privacy
                        </a>

                        <a
                            href="#availability"
                            class="block rounded-lg px-3 py-2 text-xs font-medium text-muted-foreground transition-colors hover:bg-muted hover:text-foreground"
                        >
                            10. Availability
                        </a>

                        <a
                            href="#changes"
                            class="block rounded-lg px-3 py-2 text-xs font-medium text-muted-foreground transition-colors hover:bg-muted hover:text-foreground"
                        >
                            11. Changes to These Terms
                        </a>

                        <a
                            href="#contact"
                            class="block rounded-lg px-3 py-2 text-xs font-medium text-muted-foreground transition-colors hover:bg-muted hover:text-foreground"
                        >
                            12. Contact
                        </a>
                    </nav>
                </aside>

                <!-- Content -->
                <article class="max-w-3xl space-y-16">
                    <!-- ================================================= -->
                    <!-- 1 -->
                    <!-- ================================================= -->
                    <section id="acceptance" class="scroll-mt-28">
                        <div class="flex gap-4">
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <CheckCircle2 class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    01
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Acceptance of Terms
                                </h2>
                            </div>
                        </div>

                        <div
                            class="mt-5 space-y-4 text-sm leading-7 text-muted-foreground"
                        >
                            <p>
                                By accessing or using the Capas Municipal
                                System, you acknowledge that you have read,
                                understood, and agree to follow these Terms of
                                Service.
                            </p>

                            <p>
                                If you do not agree with these terms, please do
                                not use the online services provided through the
                                system.
                            </p>

                            <p>
                                These terms apply to residents and other
                                authorized users who access the public services
                                and features made available through the
                                platform.
                            </p>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- 2 -->
                    <!-- ================================================= -->
                    <section
                        id="system"
                        class="scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <Landmark class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    02
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    About the System
                                </h2>
                            </div>
                        </div>

                        <div
                            class="mt-5 space-y-4 text-sm leading-7 text-muted-foreground"
                        >
                            <p>
                                The Capas Municipal System is a web-based
                                government service platform designed to
                                centralize and digitize selected
                                document-related services of the Municipality of
                                Capas and its barangays.
                            </p>

                            <p>
                                The platform allows eligible residents to create
                                an account, request available documents, track
                                request status, schedule appointments when
                                applicable, and access approved digital
                                documents.
                            </p>

                            <p>
                                Municipal and barangay administrators use the
                                system according to their assigned
                                administrative responsibilities and access
                                permissions.
                            </p>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- 3 -->
                    <!-- ================================================= -->
                    <section
                        id="accounts"
                        class="scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <UserCheck class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    03
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Resident Accounts
                                </h2>
                            </div>
                        </div>

                        <div
                            class="mt-5 space-y-4 text-sm leading-7 text-muted-foreground"
                        >
                            <p>
                                Residents are responsible for providing accurate
                                information when creating and maintaining their
                                accounts.
                            </p>

                            <p>
                                You are responsible for keeping your login
                                credentials confidential and for activities
                                performed through your account.
                            </p>
                        </div>

                        <div class="mt-7 space-y-3">
                            <div
                                class="flex gap-3 rounded-xl border border-border p-4"
                            >
                                <CheckCircle2
                                    class="mt-0.5 size-4 shrink-0 text-accent"
                                />

                                <p
                                    class="text-xs leading-5 text-muted-foreground"
                                >
                                    Provide truthful and accurate registration
                                    information.
                                </p>
                            </div>

                            <div
                                class="flex gap-3 rounded-xl border border-border p-4"
                            >
                                <CheckCircle2
                                    class="mt-0.5 size-4 shrink-0 text-accent"
                                />

                                <p
                                    class="text-xs leading-5 text-muted-foreground"
                                >
                                    Keep your account information updated when
                                    necessary.
                                </p>
                            </div>

                            <div
                                class="flex gap-3 rounded-xl border border-border p-4"
                            >
                                <CheckCircle2
                                    class="mt-0.5 size-4 shrink-0 text-accent"
                                />

                                <p
                                    class="text-xs leading-5 text-muted-foreground"
                                >
                                    Protect your password and do not
                                    intentionally allow unauthorized persons to
                                    use your account.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- 4 -->
                    <!-- ================================================= -->
                    <section
                        id="verification"
                        class="scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <ShieldCheck class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    04
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Registration Verification
                                </h2>
                            </div>
                        </div>

                        <div
                            class="mt-5 space-y-4 text-sm leading-7 text-muted-foreground"
                        >
                            <p>
                                New resident registrations are subject to review
                                by the Municipality before resident services
                                become available.
                            </p>

                            <p>
                                During registration, applicants may be required
                                to provide personal information, address
                                information, their selected barangay, and proof
                                of residency.
                            </p>

                            <p>
                                Submission of a registration does not guarantee
                                approval. The Municipality may review the
                                submitted information and supporting documents
                                before approving or rejecting an application.
                            </p>
                        </div>

                        <div class="mt-7 grid gap-4 sm:grid-cols-2">
                            <div class="rounded-2xl border border-border p-5">
                                <CheckCircle2 class="size-5 text-accent" />

                                <h3 class="mt-4 text-sm font-semibold">
                                    Approved
                                </h3>

                                <p
                                    class="mt-2 text-xs leading-5 text-muted-foreground"
                                >
                                    Your resident account becomes available for
                                    applicable online services.
                                </p>
                            </div>

                            <div class="rounded-2xl border border-border p-5">
                                <AlertCircle class="size-5 text-accent" />

                                <h3 class="mt-4 text-sm font-semibold">
                                    Rejected
                                </h3>

                                <p
                                    class="mt-2 text-xs leading-5 text-muted-foreground"
                                >
                                    You may be asked to correct information or
                                    submit the registration again.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- 5 -->
                    <!-- ================================================= -->
                    <section
                        id="requests"
                        class="scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <FileText class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    05
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Document Requests
                                </h2>
                            </div>
                        </div>

                        <div
                            class="mt-5 space-y-4 text-sm leading-7 text-muted-foreground"
                        >
                            <p>
                                Approved residents may use the platform to
                                submit requests for available municipal and
                                barangay documents.
                            </p>

                            <p>
                                The documents available through the system may
                                include:
                            </p>
                        </div>

                        <div class="mt-6 grid gap-3 sm:grid-cols-2">
                            <div class="rounded-xl border border-border p-4">
                                <FileCheck2 class="size-4 text-accent" />

                                <p class="mt-3 text-xs font-semibold">
                                    Barangay Clearance
                                </p>
                            </div>

                            <div class="rounded-xl border border-border p-4">
                                <FileCheck2 class="size-4 text-accent" />

                                <p class="mt-3 text-xs font-semibold">
                                    Certificate of Residency
                                </p>
                            </div>

                            <div class="rounded-xl border border-border p-4">
                                <FileText class="size-4 text-accent" />

                                <p class="mt-3 text-xs font-semibold">
                                    Business Clearance
                                </p>
                            </div>

                            <div class="rounded-xl border border-border p-4">
                                <FileText class="size-4 text-accent" />

                                <p class="mt-3 text-xs font-semibold">
                                    Certificate of Indigency
                                </p>
                            </div>
                        </div>

                        <div
                            class="mt-7 space-y-4 text-sm leading-7 text-muted-foreground"
                        >
                            <p>
                                Available services, requirements, processing
                                times, and approval procedures may vary
                                depending on the responsible office and the type
                                of document requested.
                            </p>

                            <p>
                                Submitting a request does not guarantee approval
                                or issuance of a document. The responsible
                                municipal or barangay office will review the
                                request according to the applicable requirements
                                and procedures.
                            </p>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- 6 -->
                    <!-- ================================================= -->
                    <section
                        id="documents"
                        class="scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <FileCheck2 class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    06
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Digital Documents
                                </h2>
                            </div>
                        </div>

                        <div
                            class="mt-5 space-y-4 text-sm leading-7 text-muted-foreground"
                        >
                            <p>
                                When a document is approved and digital issuance
                                is supported, the system may make a generated
                                document available through the resident account.
                            </p>

                            <p>
                                Digital documents may contain a QR code or other
                                verification information that can be used to
                                confirm document authenticity through the
                                system.
                            </p>
                        </div>

                        <div
                            class="mt-7 flex gap-4 rounded-2xl border border-accent/20 bg-accent/5 p-5"
                        >
                            <LockKeyhole
                                class="mt-0.5 size-5 shrink-0 text-accent"
                            />

                            <div>
                                <h3 class="text-sm font-semibold">
                                    Protect your documents
                                </h3>

                                <p
                                    class="mt-2 text-xs leading-6 text-muted-foreground"
                                >
                                    Residents should take reasonable care when
                                    downloading, storing, printing, or sharing
                                    documents obtained through the system.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- 7 -->
                    <!-- ================================================= -->
                    <section
                        id="appointments"
                        class="scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <CalendarDays class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    07
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Appointments
                                </h2>
                            </div>
                        </div>

                        <div
                            class="mt-5 space-y-4 text-sm leading-7 text-muted-foreground"
                        >
                            <p>
                                The system may allow residents to schedule
                                appointments for services that require or
                                support in-person transactions.
                            </p>

                            <p>
                                Residents are expected to provide accurate
                                appointment information and attend their
                                scheduled appointments when applicable.
                            </p>

                            <p>
                                Appointment availability is subject to the
                                schedules and capacity configured by the
                                responsible office.
                            </p>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- 8 -->
                    <!-- ================================================= -->
                    <section
                        id="acceptable-use"
                        class="scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <Scale class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    08
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Acceptable Use
                                </h2>
                            </div>
                        </div>

                        <p class="mt-5 text-sm leading-7 text-muted-foreground">
                            The eCapas Municipal System must only be used for
                            legitimate government-service purposes.
                        </p>

                        <div class="mt-7 space-y-3">
                            <div
                                class="flex gap-3 rounded-xl border border-border p-4"
                            >
                                <CheckCircle2
                                    class="mt-0.5 size-4 shrink-0 text-accent"
                                />

                                <p
                                    class="text-xs leading-5 text-muted-foreground"
                                >
                                    Do not submit false, misleading, or
                                    intentionally incomplete information.
                                </p>
                            </div>

                            <div
                                class="flex gap-3 rounded-xl border border-border p-4"
                            >
                                <CheckCircle2
                                    class="mt-0.5 size-4 shrink-0 text-accent"
                                />

                                <p
                                    class="text-xs leading-5 text-muted-foreground"
                                >
                                    Do not create accounts using another
                                    person's identity or information.
                                </p>
                            </div>

                            <div
                                class="flex gap-3 rounded-xl border border-border p-4"
                            >
                                <CheckCircle2
                                    class="mt-0.5 size-4 shrink-0 text-accent"
                                />

                                <p
                                    class="text-xs leading-5 text-muted-foreground"
                                >
                                    Do not upload documents that are fraudulent,
                                    altered, or unrelated to the request.
                                </p>
                            </div>

                            <div
                                class="flex gap-3 rounded-xl border border-border p-4"
                            >
                                <CheckCircle2
                                    class="mt-0.5 size-4 shrink-0 text-accent"
                                />

                                <p
                                    class="text-xs leading-5 text-muted-foreground"
                                >
                                    Do not attempt to bypass security,
                                    authentication, authorization, or access
                                    controls.
                                </p>
                            </div>

                            <div
                                class="flex gap-3 rounded-xl border border-border p-4"
                            >
                                <CheckCircle2
                                    class="mt-0.5 size-4 shrink-0 text-accent"
                                />

                                <p
                                    class="text-xs leading-5 text-muted-foreground"
                                >
                                    Do not interfere with the operation,
                                    availability, or security of the platform.
                                </p>
                            </div>

                            <div
                                class="flex gap-3 rounded-xl border border-border p-4"
                            >
                                <CheckCircle2
                                    class="mt-0.5 size-4 shrink-0 text-accent"
                                />

                                <p
                                    class="text-xs leading-5 text-muted-foreground"
                                >
                                    Do not use the platform to access, modify,
                                    or disclose information that you are not
                                    authorized to access.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- 9 -->
                    <!-- ================================================= -->
                    <section
                        id="privacy"
                        class="scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <LockKeyhole class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    09
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Privacy and Personal Information
                                </h2>
                            </div>
                        </div>

                        <div
                            class="mt-5 space-y-4 text-sm leading-7 text-muted-foreground"
                        >
                            <p>
                                The eCapas Municipal System may collect and
                                process personal information necessary for
                                account registration, resident verification,
                                document processing, appointment scheduling, and
                                other legitimate government-service purposes.
                            </p>

                            <p>
                                Personal information is intended to be handled
                                in accordance with applicable Philippine privacy
                                laws and regulations, including Republic Act No.
                                10173, also known as the Data Privacy Act of
                                2012.
                            </p>

                            <p>
                                The system's Privacy Policy provides more
                                information about how personal information is
                                collected, used, stored, protected, and managed.
                            </p>
                        </div>

                        <Link
                            href="/privacy"
                            class="mt-6 inline-flex items-center gap-2 text-xs font-semibold text-accent hover:underline"
                        >
                            Read the Privacy Policy
                            <ArrowRight class="size-3.5" />
                        </Link>
                    </section>

                    <!-- ================================================= -->
                    <!-- 10 -->
                    <!-- ================================================= -->
                    <section
                        id="availability"
                        class="scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <Info class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    10
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    System Availability
                                </h2>
                            </div>
                        </div>

                        <div
                            class="mt-5 space-y-4 text-sm leading-7 text-muted-foreground"
                        >
                            <p>
                                The system is intended to provide convenient
                                access to government services, but online
                                availability may occasionally be affected by
                                maintenance, technical issues, network problems,
                                or circumstances outside the system's control.
                            </p>

                            <p>
                                If an online service is temporarily unavailable,
                                residents may need to wait until the service is
                                restored or follow alternative instructions
                                provided by the responsible government office.
                            </p>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- 11 -->
                    <!-- ================================================= -->
                    <section
                        id="changes"
                        class="scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <FileText class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    11
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Changes to These Terms
                                </h2>
                            </div>
                        </div>

                        <div
                            class="mt-5 space-y-4 text-sm leading-7 text-muted-foreground"
                        >
                            <p>
                                These Terms of Service may be updated when
                                necessary to reflect changes to the platform,
                                government services, applicable policies, or
                                legal requirements.
                            </p>

                            <p>
                                When changes are made, the updated version will
                                be made available through the system with a
                                revised update date.
                            </p>

                            <p>
                                Residents are encouraged to review these terms
                                periodically to remain informed about the rules
                                governing use of the platform.
                            </p>
                        </div>
                    </section>

                    <!-- ================================================= -->
                    <!-- 12 -->
                    <!-- ================================================= -->
                    <section
                        id="contact"
                        class="scroll-mt-28 border-t border-border pt-16"
                    >
                        <div class="flex gap-4">
                            <div
                                class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent"
                            >
                                <HelpCircle class="size-5" />
                            </div>

                            <div>
                                <p
                                    class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                                >
                                    12
                                </p>

                                <h2
                                    class="mt-1 text-2xl font-bold tracking-tight"
                                >
                                    Questions and Concerns
                                </h2>
                            </div>
                        </div>

                        <div
                            class="mt-5 space-y-4 text-sm leading-7 text-muted-foreground"
                        >
                            <p>
                                If you have questions about these Terms of
                                Service, your account, a document request, or
                                the use of the platform, please contact the
                                appropriate office through the available contact
                                channels.
                            </p>
                        </div>

                        <Link
                            href="/contact"
                            class="mt-6 inline-flex items-center gap-2 text-xs font-semibold text-accent hover:underline"
                        >
                            Contact the Municipality
                            <ArrowRight class="size-3.5" />
                        </Link>
                    </section>

                    <!-- ================================================= -->
                    <!-- Legal Notice -->
                    <!-- ================================================= -->
                    <div
                        class="rounded-2xl border border-border bg-muted/20 p-6"
                    >
                        <div class="flex gap-4">
                            <Info class="mt-0.5 size-5 shrink-0 text-accent" />

                            <div>
                                <h3 class="text-sm font-semibold">
                                    Important Notice
                                </h3>

                                <p
                                    class="mt-2 text-xs leading-6 text-muted-foreground"
                                >
                                    These Terms of Service are intended to
                                    describe the general rules for using the
                                    eCapas Municipal System. They should be
                                    reviewed and approved by the Municipality
                                    and its appropriate legal or administrative
                                    representatives before being treated as an
                                    official legal agreement.
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
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
                            eCapas Municipal System
                        </p>

                        <h2
                            class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl"
                        >
                            Have questions about
                            <span class="text-[#57CC99]">
                                using the system?
                            </span>
                        </h2>

                        <p class="mt-4 text-sm leading-6 text-white/70">
                            Read the User Guide or visit the FAQ page for
                            additional information about the platform.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <Link href="/user-guide">
                            <button
                                class="inline-flex h-11 items-center gap-2 rounded-lg bg-[#57CC99] px-5 text-sm font-semibold text-[#032240] transition-colors hover:bg-[#80ED99]"
                            >
                                User Guide
                                <ArrowRight class="size-4" />
                            </button>
                        </Link>

                        <Link
                            href="/faqs"
                            class="inline-flex h-11 items-center gap-2 rounded-lg border border-white/20 px-5 text-sm font-semibold text-white transition-colors hover:bg-white/10"
                        >
                            FAQs
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
