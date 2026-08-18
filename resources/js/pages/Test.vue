<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import {
    CalendarDays,
    CheckCircle2,
    FileCheck2,
    FileText,
    MessageSquareText,
    QrCode,
    SearchCheck,
    ShieldCheck,
    Sparkles,
} from '@lucide/vue';

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
        icon: MessageSquareText,
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
    <div class="min-h-screen bg-background text-foreground">
        <!-- Navigation -->
        <header
            class="sticky top-0 z-50 border-b border-border/60 bg-background/95 backdrop-blur"
        >
            <div
                class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6 lg:px-8"
            >
                <!-- Brand -->
                <Link href="/" class="flex items-center gap-3">
                    <div
                        class="flex size-11 items-center justify-center rounded-xl bg-primary text-primary-foreground shadow-lg shadow-primary/20"
                    >
                        <FileText class="size-5" />
                    </div>

                    <div class="leading-tight">
                        <p class="font-semibold tracking-tight">
                            Barangay San Isidro
                        </p>

                        <p class="text-xs text-muted-foreground">
                            Document Request System
                        </p>
                    </div>
                </Link>

                <!-- Desktop Navigation -->
                <nav class="hidden items-center gap-8 md:flex">
                    <Link
                        href="/"
                        class="text-sm font-medium text-foreground transition-colors hover:text-accent"
                    >
                        Home
                    </Link>

                    <Link
                        href="/about"
                        class="text-sm font-medium text-muted-foreground transition-colors hover:text-accent"
                    >
                        About
                    </Link>

                    <Link
                        href="/services"
                        class="text-sm font-medium text-muted-foreground transition-colors hover:text-accent"
                    >
                        Services
                    </Link>

                    <Link
                        href="/announcement"
                        class="text-sm font-medium text-muted-foreground transition-colors hover:text-accent"
                    >
                        Announcements
                    </Link>

                    <Link
                        href="/contact"
                        class="text-sm font-medium text-muted-foreground transition-colors hover:text-accent"
                    >
                        Contact
                    </Link>
                </nav>

                <!-- Actions -->
                <div class="flex items-center gap-2">
                    <Link
                        href="/login"
                        class="hidden rounded-lg border border-border px-5 py-2.5 text-sm font-medium transition-colors hover:bg-muted sm:inline-flex"
                    >
                        Login
                    </Link>

                    <Link
                        href="/register"
                        class="inline-flex items-center rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-primary-foreground shadow-md shadow-primary/20 transition-all hover:-translate-y-0.5 hover:bg-primary/90"
                    >
                        Register
                    </Link>
                </div>
            </div>
        </header>

        <main>
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
                        <div
                            class="mb-6 inline-flex items-center gap-2 rounded-full border border-secondary/30 bg-secondary/10 px-3 py-1.5 text-xs font-medium text-accent"
                        >
                            <Sparkles class="size-3.5" />
                            Convenient Barangay Services
                        </div>

                        <h1
                            class="text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl"
                        >
                            Request Barangay
                            <span class="text-accent">Documents Online</span>
                        </h1>

                        <p
                            class="mt-6 max-w-lg text-base leading-7 text-muted-foreground sm:text-lg"
                        >
                            Fast, easy, and secure. Request your barangay
                            documents anytime, anywhere without the hassle of
                            long queues.
                        </p>

                        <div class="mt-8 flex flex-wrap gap-3">
                            <Link
                                href="/request"
                                class="inline-flex items-center gap-2 rounded-lg bg-primary px-6 py-3 text-sm font-semibold text-primary-foreground shadow-lg shadow-primary/20 transition-all hover:-translate-y-0.5 hover:bg-primary/90"
                            >
                                Request Now
                                <span aria-hidden="true">→</span>
                            </Link>

                            <Link
                                href="/services"
                                class="inline-flex items-center rounded-lg border border-border px-6 py-3 text-sm font-semibold transition-colors hover:bg-muted"
                            >
                                Learn More
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
                                Online Tracking
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
                            <!-- Decorative lines -->
                            <div
                                class="absolute top-1/2 right-0 left-0 h-px bg-border"
                            />

                            <div
                                class="absolute top-0 bottom-0 left-1/2 w-px bg-border"
                            />

                            <div
                                class="absolute inset-8 rounded-2xl border border-dashed border-secondary/30"
                            />

                            <!-- Document illustration -->
                            <div
                                class="absolute top-1/2 left-1/2 flex w-44 -translate-x-1/2 -translate-y-1/2 flex-col items-center"
                            >
                                <div
                                    class="flex size-20 items-center justify-center rounded-2xl border border-secondary/30 bg-muted shadow-xl"
                                >
                                    <FileText
                                        class="size-10 text-accent"
                                        stroke-width="1.5"
                                    />
                                </div>

                                <div
                                    class="mt-5 h-2 w-28 rounded-full bg-muted"
                                />

                                <div
                                    class="mt-2 h-2 w-20 rounded-full bg-muted/70"
                                />
                            </div>

                            <!-- Floating elements -->
                            <div
                                class="absolute top-8 left-8 flex size-12 items-center justify-center rounded-xl border border-border bg-card shadow-lg"
                            >
                                <ShieldCheck class="size-5 text-accent" />
                            </div>

                            <div
                                class="absolute right-8 bottom-8 flex size-12 items-center justify-center rounded-xl border border-border bg-card shadow-lg"
                            >
                                <QrCode class="size-5 text-secondary" />
                            </div>
                        </div>

                        <!-- Carousel indicators -->
                        <div class="mt-6 flex justify-center gap-2">
                            <span class="size-2 rounded-full bg-accent" />
                            <span
                                class="size-2 rounded-full bg-muted-foreground/30"
                            />
                            <span
                                class="size-2 rounded-full bg-muted-foreground/30"
                            />
                            <span
                                class="size-2 rounded-full bg-muted-foreground/30"
                            />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services -->
            <section class="border-b border-border/50">
                <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">
                    <div class="mb-8">
                        <p
                            class="text-sm font-semibold tracking-wider text-accent uppercase"
                        >
                            Our Services
                        </p>

                        <h2 class="mt-2 text-2xl font-bold tracking-tight">
                            Services We Offer
                        </h2>

                        <p
                            class="mt-2 max-w-2xl text-sm leading-6 text-muted-foreground"
                        >
                            Access commonly requested barangay documents without
                            having to visit the barangay hall.
                        </p>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                        <Link
                            v-for="service in services"
                            :key="service.title"
                            href="/services"
                            class="group rounded-2xl border border-border bg-card p-6 text-center transition-all duration-200 hover:-translate-y-1 hover:border-secondary/50 hover:shadow-xl hover:shadow-secondary/5"
                        >
                            <div
                                class="mx-auto flex size-14 items-center justify-center rounded-xl border border-secondary/30 bg-secondary/10 text-accent transition-colors group-hover:bg-secondary/20"
                            >
                                <component
                                    :is="service.icon"
                                    class="size-7"
                                    stroke-width="1.7"
                                />
                            </div>

                            <h3 class="mt-5 text-sm font-semibold">
                                {{ service.title }}
                            </h3>

                            <p
                                class="mx-auto mt-2 max-w-[200px] text-xs leading-5 text-muted-foreground"
                            >
                                {{ service.description }}
                            </p>
                        </Link>
                    </div>
                </div>
            </section>

            <!-- Features -->
            <section>
                <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">
                    <div
                        class="overflow-hidden rounded-3xl border border-border bg-card"
                    >
                        <div
                            class="grid divide-y divide-border sm:grid-cols-2 sm:divide-x sm:divide-y-0 lg:grid-cols-5 lg:divide-x"
                        >
                            <div
                                v-for="feature in features"
                                :key="feature.title"
                                class="group p-6 text-center"
                            >
                                <div
                                    class="mx-auto flex size-12 items-center justify-center rounded-xl bg-muted text-accent transition-all group-hover:bg-secondary/20"
                                >
                                    <component
                                        :is="feature.icon"
                                        class="size-6"
                                        stroke-width="1.7"
                                    />
                                </div>

                                <h3 class="mt-4 text-sm font-semibold">
                                    {{ feature.title }}
                                </h3>

                                <p
                                    class="mt-2 text-xs leading-5 text-muted-foreground"
                                >
                                    {{ feature.description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA -->
            <section class="pb-20">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div
                        class="relative overflow-hidden rounded-3xl bg-primary px-8 py-12 text-primary-foreground sm:px-12 lg:px-16"
                    >
                        <div
                            class="absolute -top-20 -right-20 size-64 rounded-full bg-secondary/20 blur-3xl"
                        />

                        <div
                            class="absolute -bottom-32 -left-20 size-72 rounded-full bg-accent/10 blur-3xl"
                        />

                        <div
                            class="relative flex flex-col justify-between gap-8 md:flex-row md:items-center"
                        >
                            <div class="max-w-xl">
                                <h2
                                    class="text-2xl font-bold tracking-tight sm:text-3xl"
                                >
                                    Need a barangay document?
                                </h2>

                                <p
                                    class="mt-3 text-sm leading-6 text-primary-foreground/70"
                                >
                                    Submit your request online and track its
                                    progress from start to finish.
                                </p>
                            </div>

                            <Link
                                href="/request"
                                class="inline-flex shrink-0 items-center justify-center rounded-lg bg-accent px-6 py-3 text-sm font-semibold text-accent-foreground shadow-lg transition-all hover:-translate-y-0.5 hover:bg-accent/90"
                            >
                                Start a Request
                            </Link>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="border-t border-border/60">
            <div
                class="mx-auto flex max-w-7xl flex-col gap-3 px-6 py-8 text-sm text-muted-foreground sm:flex-row sm:items-center sm:justify-between lg:px-8"
            >
                <p>
                    © {{ new Date().getFullYear() }} Barangay San Isidro. All
                    rights reserved.
                </p>

                <div class="flex gap-5">
                    <Link
                        href="/privacy"
                        class="transition-colors hover:text-accent"
                    >
                        Privacy
                    </Link>

                    <Link
                        href="/terms"
                        class="transition-colors hover:text-accent"
                    >
                        Terms
                    </Link>

                    <Link
                        href="/contact"
                        class="transition-colors hover:text-accent"
                    >
                        Contact
                    </Link>
                </div>
            </div>
        </footer>
    </div>
</template>
