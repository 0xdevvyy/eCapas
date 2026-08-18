<script setup lang="ts">
import type { HTMLAttributes } from 'vue'
import { cn } from '@/lib/utils'

const props = defineProps<{
    class?: HTMLAttributes['class']
}>()
</script>

<template>
    <section
        data-slot="section"
        :class="cn('border-b border-border/50', props.class)"
    >
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">
            <slot />
        </div>
    </section>
</template>