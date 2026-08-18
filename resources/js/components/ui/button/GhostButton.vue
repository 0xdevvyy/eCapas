<script setup lang="ts">
defineOptions({
    inheritAttrs: false,
})
</script>

<template>
    <button
        v-bind="$attrs"
        class="
            inline-flex 
            items-center 
            rounded-lg 
            border 
            border-border px-6 py-3 
            text-sm font-semibold 
            transition-colors 
            cursor-pointer
            hover:bg-muted
        "
    >
        <slot />
    </button>
</template>