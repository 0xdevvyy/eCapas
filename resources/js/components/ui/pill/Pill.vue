<script setup lang="ts">
defineOptions({
    inheritAttrs: false,
})
</script>

<template>
    <div
        v-bind="$attrs"
        class="
            mb-6 inline-flex 
            items-center gap-2 
            rounded-full border border-secondary/30 
            text-xs font-medium 
        "
    >
        <slot />
    </div>
</template>