<script setup lang="ts">
import type { HTMLAttributes } from 'vue'
import { cn } from '@/lib/utils'

const props = defineProps<{
    class?: HTMLAttributes['class']
}>()
</script>

<template>
    <div
        data-slot="icon-box"
        :class="
            cn(
                'flex size-14 items-center justify-center rounded-xl border border-secondary/30 bg-secondary/10 text-accent transition-colors group-hover:bg-secondary/20',
                props.class,
            )
        "
    >
        <slot />
    </div>
</template>