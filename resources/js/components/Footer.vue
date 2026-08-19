<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Phone, Mail, MapPin, Clock3, ArrowUpRight } from '@lucide/vue';
import landing from '@/routes/landing/index.js';

const quickLinks = [
    { label: 'Home', href: landing.home() },
    { label: 'About', href: landing.about() },
    { label: 'Services', href: landing.services() },
    { label: 'Announcements', href: landing.announcement() },
    { label: 'Contact', href: landing.contact() },
];

const resources = [
    { label: 'FAQs', href: '/faqs' },
    { label: 'User Guide', href: '/user-guide' },
    { label: 'Privacy Policy', href: '/privacy-policy' },
    { label: 'Terms of Service', href: '/terms' },
];
</script>

<template>
    <footer
        class="relative overflow-hidden border-t border-white/10 bg-[#040349]/70 text-white"
    >
        <!-- Decorative glow -->
        <div
            class="pointer-events-none absolute -top-40 -left-40 h-96 w-96 rounded-full bg-[#22577A]/20 blur-3xl"
        ></div>

        <div
            class="pointer-events-none absolute right-0 -bottom-48 h-96 w-96 rounded-full bg-[#38A3A5]/10 blur-3xl"
        ></div>

        <div class="relative mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <!-- Main Footer -->
            <div class="grid gap-10 lg:grid-cols-[1.65fr_0.85fr_0.85fr_1.15fr]">
                <!-- Brand -->
                <div>
                    <Link
                        :href="landing.home()"
                        class="inline-flex items-center gap-3"
                    >
                        <img
                            src="/images/logo.png"
                            alt="Capas Municipal System"
                            class="h-24 w-24 shrink-0 object-contain"
                        />

                        <div>
                            <p
                                class="text-sm leading-tight font-bold tracking-wide text-white"
                            >
                                eCapas
                            </p>

                            <p class="mt-1 text-sm leading-tight text-white/50">
                                Municipality of Capas, Tarlac
                            </p>
                        </div>
                    </Link>

                    <p
                        class="mt-5 max-w-[260px] text-sm leading-5 text-white/60"
                    >
                        A digital platform connecting the Municipality of Capas
                        and its barangays to provide faster, easier, and more
                        transparent public services.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3
                        class="text-sm font-bold tracking-wide text-foreground uppercase"
                    >
                        Quick Links
                    </h3>

                    <ul class="mt-5 space-y-2.5">
                        <li v-for="link in quickLinks" :key="link.label">
                            <Link
                                :href="link.href"
                                class="text-sm text-foreground/55 transition-colors hover:text-accent"
                            >
                                {{ link.label }}
                            </Link>
                        </li>
                    </ul>
                </div>

                <!-- Resources -->
                <div>
                    <h3
                        class="text-sm font-bold tracking-wide text-foreground uppercase"
                    >
                        Resources
                    </h3>

                    <ul class="mt-5 space-y-2.5">
                        <li v-for="link in resources" :key="link.label">
                            <Link
                                :href="link.href"
                                class="text-sm text-foreground/55 transition-colors hover:text-accent"
                            >
                                {{ link.label }}
                            </Link>
                        </li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3
                        class="text-sm font-bold tracking-wide text-foreground uppercase"
                    >
                        Contact Us
                    </h3>

                    <div class="mt-5 space-y-3.5">
                        <!-- Phone -->
                        <a
                            href="tel:+63451234567"
                            class="group flex items-start gap-2.5"
                        >
                            <Phone class="mt-0.5 size-4 shrink-0 text-accent" />

                            <span
                                class="text-sm leading-4.5 text-foreground/55 transition-colors group-hover:text-foreground/80"
                            >
                                +63 925 015 4000
                            </span>
                        </a>

                        <!-- Email -->
                        <a
                            href="mailto:info@capas.gov.ph"
                            class="group flex items-start gap-2.5"
                        >
                            <Mail class="mt-0.5 size-4 shrink-0 text-accent" />

                            <span
                                class="text-sm leading-4.5 text-foreground/55 transition-colors group-hover:text-foreground/80"
                            >
                                info@capas.gov.ph
                            </span>
                        </a>

                        <!-- Address -->
                        <div class="flex items-start gap-2.5">
                            <MapPin
                                class="mt-0.5 size-4 shrink-0 text-accent"
                            />

                            <span
                                class="text-sm leading-4.5 text-foreground/55"
                            >
                                Capas Municipal Hall,<br />
                                Capas, Tarlac 2315
                            </span>
                        </div>

                        <!-- Office Hours -->
                        <div class="flex items-start gap-2.5">
                            <Clock3
                                class="mt-0.5 size-4 shrink-0 text-accent"
                            />

                            <span
                                class="text-sm leading-4.5 text-foreground/55"
                            >
                                Monday - Friday<br />
                                8:00 AM - 5:00 PM
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Better Capas CTA -->
            <div
                class="relative mt-10 min-h-[150px] overflow-hidden rounded-xl border border-[#38A3A5]/20 bg-[#032240] px-6 py-5"
            >
                <!-- Building decoration -->
                <div
                    class="pointer-events-none absolute inset-y-0 left-0 w-[45%]"
                >
                    <img
                        src="/images/footer-image.png"
                        alt=""
                        class="h-full w-full object-cover object-left opacity-[0.18]"
                    />
                </div>

                <!-- Gradient -->
                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-r from-transparent via-[#032240]/20 to-[#032240]"
                ></div>

                <!-- Content -->
                <div class="relative z-10 ml-auto w-full max-w-md lg:w-[50%]">
                    <h3
                        class="text-base leading-tight font-bold text-foreground"
                    >
                        Together for a
                        <span class="text-accent"> Better Capas </span>
                    </h3>

                    <p class="mt-2 text-sm leading-5 text-foreground/55">
                        Building a progressive, transparent, and digitally
                        empowered community.
                    </p>

                    <Link
                        :href="landing.about()"
                        class="mt-4 inline-flex items-center gap-1.5 text-sm font-semibold text-accent transition-colors hover:text-foreground"
                    >
                        Learn More
                        <ArrowUpRight class="size-4" />
                    </Link>
                </div>
            </div>

            <!-- Bottom -->
            <div
                class="mt-10 flex flex-col items-center justify-between gap-3 border-t border-foreground/10 pt-5 sm:flex-row"
            >
                <p class="text-sm text-foreground/40">
                    © {{ new Date().getFullYear() }} Municipality of Capas. All
                    rights reserved.
                </p>

                <p class="text-sm text-foreground/30">
                    Capas, Tarlac, Philippines
                </p>
            </div>
        </div>
    </footer>
</template>
