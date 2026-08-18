<script setup lang="ts">
defineOptions({
    inheritAttrs: false,
})
</script>

<template>
    <button
        v-bind="$attrs"
        class="
            inline-flex h-10 
            items-center gap-2 
            rounded-lg bg-accent 
            px-5 
            text-sm font-semibold text-foreground
            transition-colors hover:bg-accent/80 
            cursor-pointer
        "
    >
        <slot />
    </button>
</template>