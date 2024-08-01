<template>
    <!--start post -->
    <div class="size-full my-2 py-4 bg-white dark:bg-neutral-900">
        <div class="flex items-center gap-x-4 mb-3">
            <div
                class="inline-flex justify-center items-center rounded-full border-2 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                <img :src="imageSrc" class="rounded-full w-fit size-10" />
            </div>
            <div class="flex-shrink-0">
                <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">
                    <slot name="userName"></slot>
                </h3>
            </div>
        </div>
        <p class="text-gray-600 dark:text-neutral-400">
        <slot name="content"></slot>
        </p>
        <div class="flex justify-center pt-5 sm:justify-end items-center gap-x-1.5">
            <!-- Like Button -->
            <div class="hs-tooltip inline-block">
                <button type="button"
                    class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                    </svg>
                    875
                    <span
                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-black"
                        role="tooltip">
                        Like
                    </span>
                </button>
            </div>
            <!-- separation -->
            <div class="block h-3 border-e border-gray-300 mx-3 dark:border-neutral-600">
            </div>
            <!-- Comment Button -->
            <div class="hs-tooltip inline-block">
                <button type="button"
                    class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z" />
                    </svg>
                    16
                    <span
                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-black"
                        role="tooltip">
                        Comment
                    </span>
                </button>
            </div>
            <!-- separation -->
            <div class="block h-3 border-e border-gray-300 mx-3 dark:border-neutral-600">
            </div>
            <!-- Share Button -->
            <div class="hs-dropdown relative inline-flex">
                <button type="button" id="blog-article-share-dropdown"
                    class="hs-dropdown-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                        <polyline points="16 6 12 2 8 6" />
                        <line x1="12" x2="12" y1="2" y2="15" />
                    </svg>
                    Share
                </button>
            </div>
        </div>
    </div>
    <!-- end post -->
</template>

<script>
export default {
    props: ['imageSrc'],

}
</script>

<style></style>