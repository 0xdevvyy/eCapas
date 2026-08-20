<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { onBeforeUnmount, onMounted, ref } from 'vue';

import {
    ArrowRight,
    CheckCircle2,
    ChevronDown,
    FileCheck2,
    FileText,
    HelpCircle,
    QrCode,
    ShieldCheck,
    UserCheck,
} from '@lucide/vue';

const faqs = [
    {
        id: 'account-registration',
        category: 'Account & Registration',
        questions: [
            {
                question: 'Who can create an account?',
                answer: 'Residents who live within the Municipality of Capas can register for an account. During registration, applicants provide their personal information, address details, select their barangay, and submit proof of residency for verification.',
            },
            {
                question: 'Why does my registration need to be verified?',
                answer: 'Registration verification helps the Municipality confirm that an applicant belongs to the barangay they selected. This helps ensure that resident services and barangay-level requests are handled by the appropriate office.',
            },
            {
                question: 'What happens after I submit my registration?',
                answer: 'Your registration is submitted for municipal verification. Once approved, your resident account becomes available for use. If your registration is rejected, you may review the reason provided and resubmit the required information.',
            },
            {
                question: 'Can I change my barangay after registering?',
                answer: 'Changes to your registered barangay may require verification by the Municipality. If your address or barangay information changes, contact the appropriate municipal office for assistance before submitting requests under a different barangay.',
            },
        ],
    },

    {
        id: 'document-requests',
        category: 'Document Requests',
        questions: [
            {
                question: 'What documents can I request online?',
                answer: 'The system can provide available municipal and barangay document services, including Barangay Clearance, Certificate of Residency, Business Clearance, and Certificate of Indigency. Additional services may be added by the Municipality in the future.',
            },
            {
                question:
                    'Do I need to upload proof of residency every time I request a document?',
                answer: 'No. Proof of residency is primarily used during resident registration and verification. Once your resident account has been approved, you do not need to repeatedly submit proof of residency for every request unless the responsible office specifically requires additional documentation.',
            },
            {
                question: 'Do I need to provide a valid ID for every request?',
                answer: 'Not necessarily. Requirements depend on the specific service and the responsible office. Your verified resident account already contains your registered information, while additional requirements may be requested when necessary for a particular document.',
            },
            {
                question: 'Can I request a document from another barangay?',
                answer: 'Barangay-level services are generally handled by the barangay associated with your verified resident account. Municipal services may be available at the municipal level depending on the type of document being requested.',
            },
        ],
    },

    {
        id: 'request-status',
        category: 'Request Status & Processing',
        questions: [
            {
                question: 'How can I track my request?',
                answer: 'After submitting a document request, you can view its status through your resident account. The system allows you to monitor the progress of your request as it moves through the appropriate processing stages.',
            },
            {
                question: 'How long will my request take?',
                answer: 'Processing time depends on the type of document, the responsible office, the completeness of the submitted information, and any required verification. The estimated processing time can be displayed with the service information.',
            },
            {
                question: 'What do the different request statuses mean?',
                answer: 'Statuses indicate where your request currently is in the processing workflow. For example, a request may be pending review, assigned to an administrator, in progress, resolved, or closed.',
            },
            {
                question: 'What happens if my request is rejected?',
                answer: 'If a request cannot be approved, the responsible administrator may provide a reason or indicate what information or requirements need attention. Depending on the situation, you may be able to correct the issue and submit another request.',
            },
        ],
    },

    {
        id: 'appointments',
        category: 'Appointments',
        questions: [
            {
                question: 'Can I schedule an appointment online?',
                answer: 'Yes. The system supports appointment scheduling for services that require or allow an in-person visit. Available schedules depend on the office and service.',
            },
            {
                question: 'Do all document requests require an appointment?',
                answer: 'No. An appointment is not necessarily required for every service. Some requests may be processed digitally, while others may require you to visit the appropriate municipal or barangay office.',
            },
            {
                question: 'Can I reschedule my appointment?',
                answer: 'If rescheduling is enabled for the service, you can manage your appointment through your account. Otherwise, you may need to contact the responsible office for assistance.',
            },
        ],
    },

    {
        id: 'digital-documents',
        category: 'Digital Documents & Verification',
        questions: [
            {
                question: 'Can I download my approved document?',
                answer: 'If the service supports digital document generation, an approved document can be generated as a PDF and made available through your resident account.',
            },
            {
                question: 'How can I verify a digital document?',
                answer: 'Approved digital documents may contain a QR code that can be scanned to access the document verification information provided by the Capas Municipal System.',
            },
            {
                question: 'Are digitally generated documents official?',
                answer: 'The validity of a document depends on its approval and issuance by the responsible municipal or barangay office. A generated PDF should only be considered an official document when it has been properly approved and issued through the system.',
            },
        ],
    },

    {
        id: 'privacy-security',
        category: 'Privacy & Security',
        questions: [
            {
                question: 'Is my personal information secure?',
                answer: 'The system is designed to limit access to resident information according to the responsibilities of each administrative level. Municipal administrators can manage municipal-level information, while barangay administrators are limited to residents and requests belonging to their barangay.',
            },
            {
                question: 'Who can see my information?',
                answer: 'Access depends on the users role and the information required to perform their responsibilities. Residents can access their own account and requests, while authorized municipal and barangay administrators can access information relevant to their office.',
            },
            {
                question: 'Why is my information collected?',
                answer: 'Resident information is collected to create and verify resident accounts, process government document requests, maintain accurate records, and provide municipal and barangay services through the platform.',
            },
        ],
    },
];

const quickLinks = [
    {
        title: 'Resident Registration',
        description:
            'Learn how registration and municipal verification work.',
        icon: UserCheck,
        href: '/register',
    },
    {
        title: 'Available Services',
        description:
            'Browse the municipal and barangay services available online.',
        icon: FileText,
        href: '/services',
    },
    {
        title: 'Request a Document',
        description:
            'Start a request after your resident account has been approved.',
        icon: FileCheck2,
        href: '/request',
    },
];

const categories = [

    ...faqs.map((section) => ({
        label: section.category,
        id: section.id,
    })),
];

/*
|--------------------------------------------------------------------------
| Active Category
|--------------------------------------------------------------------------
*/

const activeCategory = ref('all-questions');

let observer: IntersectionObserver | null = null;

onMounted(() => {
    const sections = document.querySelectorAll<HTMLElement>(
        '#all-questions > [data-faq-section]',
    );

    observer = new IntersectionObserver(
        (entries) => {
            const visibleSections = entries
                .filter((entry) => entry.isIntersecting)
                .sort(
                    (a, b) =>
                        a.boundingClientRect.top -
                        b.boundingClientRect.top,
                );

            if (visibleSections.length > 0) {
                activeCategory.value =
                    visibleSections[0].target.id;
            }
        },
        {
            rootMargin: '-120px 0px -60% 0px',
            threshold: 0,
        },
    );

    sections.forEach((section) => {
        observer?.observe(section);
    });
});

onBeforeUnmount(() => {
    observer?.disconnect();
});
</script>

<template>
    <Head title="Frequently Asked Questions" />

    <!-- ========================================================= -->
    <!-- Hero -->
    <!-- ========================================================= -->

    <section class="relative overflow-hidden border-b border-border/60">
        <!-- Decorative background -->
        <div
            class="pointer-events-none absolute -top-40 -left-40 size-96 rounded-full bg-secondary/10 blur-3xl"
        />

        <div
            class="pointer-events-none absolute top-20 -right-40 size-96 rounded-full bg-accent/10 blur-3xl"
        />

        <div
            class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24"
        >
            <div class="mx-auto max-w-3xl text-center">
                <div
                    class="mx-auto flex size-12 items-center justify-center rounded-xl border border-secondary/30 bg-secondary/10 text-accent"
                >
                    <HelpCircle class="size-6" />
                </div>

                <p
                    class="mt-6 text-sm font-semibold tracking-[0.18em] text-accent uppercase"
                >
                    Help Center
                </p>

                <h1
                    class="mt-3 text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl"
                >
                    Frequently Asked
                    <span class="text-accent"> Questions. </span>
                </h1>

                <p
                    class="mx-auto mt-6 max-w-2xl text-base leading-7 text-muted-foreground sm:text-lg"
                >
                    Find answers about resident registration, document
                    requests, appointments, digital documents, and other
                    services provided through the Capas Municipal System.
                </p>
            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- Quick Links -->
    <!-- ========================================================= -->

    <section class="border-b border-border/60 bg-muted/20">
        <div
            class="mx-auto grid max-w-7xl divide-y divide-border px-6 sm:grid-cols-3 sm:divide-x sm:divide-y-0 lg:px-8"
        >
            <Link
                v-for="link in quickLinks"
                :key="link.title"
                :href="link.href"
                class="group flex items-center gap-4 px-0 py-6 sm:px-6"
            >
                <div
                    class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-secondary/10 text-accent transition-colors group-hover:bg-secondary/20"
                >
                    <component :is="link.icon" class="size-5" />
                </div>

                <div>
                    <p class="text-sm font-semibold">
                        {{ link.title }}
                    </p>

                    <p
                        class="mt-1 text-xs leading-5 text-muted-foreground"
                    >
                        {{ link.description }}
                    </p>
                </div>

                <ArrowRight
                    class="ml-auto size-4 text-muted-foreground transition-transform group-hover:translate-x-1 group-hover:text-accent"
                />
            </Link>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- FAQ Content -->
    <!-- ========================================================= -->

    <section>
        <div
            class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24"
        >
            <div class="grid gap-12 lg:grid-cols-[260px_1fr]">
                <!-- ================================================= -->
                <!-- Sidebar -->
                <!-- ================================================= -->

                <aside class="lg:sticky lg:top-24 lg:self-start">
                    <p
                        class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                    >
                        Categories
                    </p>

                    <nav class="mt-4 space-y-1">
                        <a
                            v-for="category in categories"
                            :key="category.id"
                            :href="`#${category.id}`"
                            class="group relative block rounded-lg px-3 py-2.5 text-xs font-medium transition-all duration-200"
                            :class="
                                activeCategory === category.id
                                    ? 'bg-accent/10 text-accent'
                                    : 'text-muted-foreground hover:bg-muted hover:text-foreground'
                            "
                        >
                            <!-- Active indicator -->
                            <span
                                v-if="
                                    activeCategory ===
                                    category.id
                                "
                                class="absolute top-1/2 left-0 h-5 w-0.5 -translate-y-1/2 rounded-full bg-accent"
                            />

                            {{ category.label }}
                        </a>
                    </nav>

                    <!-- Help Card -->
                    <div
                        class="mt-8 rounded-2xl border border-border bg-muted/20 p-5"
                    >
                        <div
                            class="flex size-10 items-center justify-center rounded-lg bg-secondary/10 text-accent"
                        >
                            <HelpCircle class="size-5" />
                        </div>

                        <h3 class="mt-4 text-sm font-semibold">
                            Still need help?
                        </h3>

                        <p
                            class="mt-2 text-xs leading-5 text-muted-foreground"
                        >
                            If you cannot find the answer you need, contact the
                            appropriate municipal or barangay office.
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

                <!-- ================================================= -->
                <!-- Questions -->
                <!-- ================================================= -->

                <div
                    id="all-questions"
                    class="space-y-12"
                >
                    <div
                        v-for="section in faqs"
                        :id="section.id"
                        :key="section.category"
                        data-faq-section
                        class="scroll-mt-28"
                    >
                        <div class="mb-5">
                            <p
                                class="text-xs font-semibold tracking-[0.16em] text-accent uppercase"
                            >
                                Frequently Asked Questions
                            </p>

                            <h2
                                class="mt-2 text-2xl font-bold tracking-tight"
                            >
                                {{ section.category }}
                            </h2>
                        </div>

                        <div class="space-y-3">
                            <details
                                v-for="faq in section.questions"
                                :key="faq.question"
                                class="group rounded-xl border border-border bg-card transition-colors open:border-accent/30"
                            >
                                <summary
                                    class="flex cursor-pointer list-none items-center justify-between gap-5 px-5 py-4 text-sm font-semibold"
                                >
                                    <span>
                                        {{ faq.question }}
                                    </span>

                                    <span
                                        class="flex size-7 shrink-0 items-center justify-center rounded-full bg-muted text-muted-foreground transition-transform duration-200 group-open:rotate-180 group-open:bg-accent/10 group-open:text-accent"
                                    >
                                        <ChevronDown class="size-4" />
                                    </span>
                                </summary>

                                <div
                                    class="border-t border-border px-5 py-4"
                                >
                                    <p
                                        class="text-sm leading-6 text-muted-foreground"
                                    >
                                        {{ faq.answer }}
                                    </p>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- How It Works -->
    <!-- ========================================================= -->

    <section class="border-y border-border/60 bg-muted/20">
        <div
            class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24"
        >
            <div class="text-center">
                <p
                    class="text-sm font-semibold tracking-[0.18em] text-accent uppercase"
                >
                    Quick Overview
                </p>

                <h2
                    class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl"
                >
                    How the system
                    <span class="text-accent"> works. </span>
                </h2>

                <p
                    class="mx-auto mt-4 max-w-2xl text-sm leading-6 text-muted-foreground"
                >
                    The Capas Municipal System connects residents with the
                    appropriate municipal and barangay offices through a
                    centralized digital platform.
                </p>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Register -->
                <div class="relative text-center">
                    <div
                        class="mx-auto flex size-12 items-center justify-center rounded-full border border-border bg-card text-accent shadow-sm"
                    >
                        <UserCheck class="size-5" />
                    </div>

                    <h3 class="mt-5 text-sm font-semibold">
                        Register
                    </h3>

                    <p
                        class="mx-auto mt-2 max-w-[220px] text-xs leading-5 text-muted-foreground"
                    >
                        Create your resident account and submit your
                        information for verification.
                    </p>
                </div>

                <!-- Get Verified -->
                <div class="relative text-center">
                    <div
                        class="mx-auto flex size-12 items-center justify-center rounded-full border border-border bg-card text-accent shadow-sm"
                    >
                        <ShieldCheck class="size-5" />
                    </div>

                    <h3 class="mt-5 text-sm font-semibold">
                        Get Verified
                    </h3>

                    <p
                        class="mx-auto mt-2 max-w-[220px] text-xs leading-5 text-muted-foreground"
                    >
                        The Municipality reviews your registration before
                        granting resident access.
                    </p>
                </div>

                <!-- Request -->
                <div class="relative text-center">
                    <div
                        class="mx-auto flex size-12 items-center justify-center rounded-full border border-border bg-card text-accent shadow-sm"
                    >
                        <FileText class="size-5" />
                    </div>

                    <h3 class="mt-5 text-sm font-semibold">
                        Request
                    </h3>

                    <p
                        class="mx-auto mt-2 max-w-[220px] text-xs leading-5 text-muted-foreground"
                    >
                        Select a service and submit your document request
                        online.
                    </p>
                </div>

                <!-- Receive -->
                <div class="relative text-center">
                    <div
                        class="mx-auto flex size-12 items-center justify-center rounded-full border border-border bg-card text-accent shadow-sm"
                    >
                        <QrCode class="size-5" />
                    </div>

                    <h3 class="mt-5 text-sm font-semibold">
                        Receive
                    </h3>

                    <p
                        class="mx-auto mt-2 max-w-[220px] text-xs leading-5 text-muted-foreground"
                    >
                        Receive your approved document digitally when the
                        service supports digital issuance.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- Important Information -->
    <!-- ========================================================= -->

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
                    <CheckCircle2 class="size-5" />
                </div>

                <div>
                    <h3 class="text-sm font-semibold">
                        Information may vary by service
                    </h3>

                    <p
                        class="mt-2 text-xs leading-6 text-muted-foreground"
                    >
                        The requirements, processing time, approval procedure,
                        and availability of digital issuance may differ
                        depending on the document and the responsible municipal
                        or barangay office. Always review the requirements shown
                        for the specific service before submitting a request.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- CTA -->
    <!-- ========================================================= -->

    <section class="pb-20 lg:pb-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="relative overflow-hidden rounded-3xl bg-primary px-7 py-12 text-foreground sm:px-10 lg:px-14"
            >
                <!-- Decorative background -->
                <div
                    class="pointer-events-none absolute -top-32 -right-20 size-80 rounded-full bg-accent/10 blur-3xl"
                />

                <div
                    class="pointer-events-none absolute -bottom-40 left-1/3 size-80 rounded-full bg-accent/10 blur-3xl"
                />

                <div
                    class="relative flex flex-col justify-between gap-8 lg:flex-row lg:items-center"
                >
                    <div class="max-w-2xl">
                        <p
                            class="text-xs font-semibold tracking-[0.18em] text-accent uppercase"
                        >
                            Need Assistance?
                        </p>

                        <h2
                            class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl"
                        >
                            Didn't find your
                            <span class="text-accent"> answer? </span>
                        </h2>

                        <p
                            class="mt-4 text-sm leading-6 text-foreground/70"
                        >
                            Contact the appropriate municipal or barangay
                            office for assistance with your concern.
                        </p>
                    </div>

                    <Link
                        href="/contact"
                        class="inline-flex h-11 shrink-0 items-center gap-2 rounded-lg bg-accent px-5 text-sm font-semibold text-primary transition-colors hover:bg-[#80ED99]"
                    >
                        Contact Us
                        <ArrowRight class="size-4" />
                    </Link>
                </div>
            </div>
        </div>
    </section>
</template>
