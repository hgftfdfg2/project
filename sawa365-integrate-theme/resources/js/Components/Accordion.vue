<template>
    <div class="bg-gray-100 rounded-xl p-6 dark:bg-white/10">
        <button @click="isOpen = !isOpen" class="pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition
             hover:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400">
            {{title}}
            <!-- down icon -->
            <svg :class="isOpen ? 'hidden' : 'block'" class="flex-shrink-0 size-5 text-gray-600 dark:text-neutral-400"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m6 9 6 6 6-6" />
            </svg>
            <!-- up icon -->
            <svg :class="isOpen ? 'block' : 'hidden'" class="flex-shrink-0 size-5 text-gray-600 dark:text-neutral-400"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m18 15-6-6-6 6" />
            </svg>
        </button>
        <div :class="isOpen ? 'block' : 'hidden'" class="w-full overflow-hidden transition-[height] duration-300">
            <p class="text-gray-800 dark:text-neutral-200">
                <slot></slot>
            </p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isOpen: false
        }
    },
    methods: {

    },
    props:['title']
}
</script>

<style></style>