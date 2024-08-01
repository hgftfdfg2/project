<template>
    <!-- card -->
    <div
        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <img class="w-full h-52 rounded-t-xl" :src="imageSrc" alt="Image Description">
        <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                <slot name="header"></slot>
            </h3>
            <p class="mt-1 text-gray-500 dark:text-neutral-400">
                <slot name="content"></slot>
            </p>
            <div>
                <slot name="links"></slot>
            </div>

            <!-- <a class="mt-2 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                :href="goTo">
                <slot name="link"></slot>
            </a> -->
        </div>
    </div>
    <!-- end card -->
</template>

<script>
export default {
    props: ['imageSrc', 'goTo']
}
</script>

<style></style>