<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { Menu, X } from '@lucide/vue';
import { ref } from 'vue';
import landing from '@/routes/landing/index.js';
import GhostButton from '../ui/button/GhostButton.vue';
import PrimaryButton from '../ui/button/PrimaryButton.vue';

const page = usePage();

const isMenuOpen = ref(false);

const navItems = [
    { name: 'Home', href: landing.home() },
    { name: 'About', href: landing.about() },
    { name: 'Services', href: landing.services() },
    { name: 'Announcements', href: landing.announcement() },
    { name: 'Contact', href: landing.contact() },
];

const isActive = (href: (typeof navItems)[number]['href']) => {
    return page.url === href.url;
};

const closeMenu = () => {
    isMenuOpen.value = false;
};
</script>

<template>
    <header
        class="sticky top-0 z-50 border-b border-border/60 bg-background/95 backdrop-blur"
    >
        <div
            class="mx-auto flex min-h-20 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8"
        >
            <!-- Brand -->
            <Link href="/" class="shrink-0" @click="closeMenu">
                <img
                    src="/images/logo.png"
                    alt="Barangay San Isidro Logo"
                    class="h-14 w-auto object-contain sm:h-16 md:h-20"
                />
            </Link>

            <!-- Desktop Navigation -->
            <nav class="hidden items-center gap-6 lg:flex xl:gap-8">
                <Link
                    v-for="item in navItems"
                    :key="item.name"
                    :href="item.href"
                    :class="[
                        'relative text-sm font-medium whitespace-nowrap transition-colors hover:text-accent',
                        isActive(item.href)
                            ? 'text-foreground after:absolute after:-bottom-2 after:left-0 after:h-0.5 after:w-full after:bg-primary'
                            : 'text-muted-foreground',
                    ]"
                >
                    {{ item.name }}
                </Link>
            </nav>

            <!-- Desktop Actions -->
            <div class="hidden items-center gap-3 lg:flex">
                <Link href="/login">
                    <PrimaryButton> Login </PrimaryButton>
                </Link>

                <Link href="/register">
                    <GhostButton> Register </GhostButton>
                </Link>
            </div>

            <!-- Mobile Menu Button -->
            <button
                type="button"
                class="inline-flex size-10 items-center justify-center rounded-lg border border-border text-foreground transition-colors hover:bg-muted lg:hidden"
                :aria-expanded="isMenuOpen"
                aria-label="Toggle navigation menu"
                @click="isMenuOpen = !isMenuOpen"
            >
                <X v-if="isMenuOpen" class="size-5" />
                <Menu v-else class="size-5" />
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div
            v-if="isMenuOpen"
            class="border-t border-border/60 bg-background lg:hidden"
        >
            <nav class="mx-auto max-w-7xl px-4 py-4 sm:px-6">
                <div class="flex flex-col">
                    <Link
                        v-for="item in navItems"
                        :key="item.name"
                        :href="item.href"
                        :class="[
                            'w-fit border-b border-border/40 py-3.5 text-sm font-medium transition-colors last:border-b-0',
                            isActive(item.href)
                                ? 'text-foreground'
                                : 'text-muted-foreground hover:text-accent',
                        ]"
                        @click="closeMenu"
                    >
                        <span
                            :class="[
                                'relative inline-block',
                                isActive(item.href)
                                    ? 'after:absolute after:-bottom-1 after:left-0 after:h-0.5 after:w-full after:bg-primary'
                                    : '',
                            ]"
                        >
                            {{ item.name }}
                        </span>
                    </Link>

                    <!-- Mobile Actions -->
                    <div
                        class="mt-4 flex flex-col gap-2 border-t border-border/60 pt-4 sm:flex-row"
                    >
                        <Link
                            href="/login"
                            class="inline-flex w-full items-center justify-center rounded-lg border border-border px-5 py-2.5 text-sm font-medium transition-colors hover:bg-muted sm:flex-1"
                            @click="closeMenu"
                        >
                            Login
                        </Link>

                        <Link
                            href="/register"
                            class="inline-flex w-full items-center justify-center rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-primary-foreground shadow-md shadow-primary/20 transition-all hover:bg-primary/90 sm:flex-1"
                            @click="closeMenu"
                        >
                            Register
                        </Link>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</template>
