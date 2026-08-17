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
            justify-center
            bg-primary
            gap-1
            rounded-lg
            border-border
            px-6
            py-3
            text-sm
            font-semibold
            shadow-lg
            transition-all
            shadow-primary/20 hover:-translate-y-0.5 hover:bg-primary/90
            cursor-pointer
        "

   
    >
        <slot />
    </button>
</template>