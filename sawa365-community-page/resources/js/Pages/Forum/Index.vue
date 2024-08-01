<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Forums" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 ">

                        <!-- search  -->
                        <div class="sm:px-6 lg:px-4 mx-auto">
                            <form class="w-full flex flex-col sm:flex-row sm:justify-start items-center gap-2">
                                <div class="basis-2/5 w-full">
                                    <label class="block">Search by name </label>
                                    <div class="relative">
                                        <div>
                                            <i
                                                class="fa-solid fa-magnifying-glass absolute m-2 text-md top-1 text-neutral-400"></i>
                                            <input type="text"
                                                class="border-1 border-neutral-300 px-8 rounded-lg w-full" />
                                        </div>
                                    </div>
                                </div>

                                <div class="basis-2/5 w-full">
                                    <label class="block">Search by category</label>
                                    <div class="relative">
                                        <select
                                            class="border-1 border-neutral-300 px-4 rounded-lg w-full focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                            placeholder="Category">
                                            <option>All categories</option>
                                            <option>Programming </option>
                                            <option>Digital marketing</option>
                                            <option>Voice over</option>
                                            <option>Data</option>
                                        </select>
                                    </div>
                                </div>

                                <div class=" basis-1/5 w-full text-end">
                                    <label class="block invisible">search</label>
                                    <button
                                        class="mx-1 p-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Search</button>
                                </div>
                            </form>
                        </div>
                        <!-- end search  -->

                        <h2 class="mt-6 px-4 text-2xl font-semibold">
                            Discussions
                        </h2>

                        <!-- Card Blog -->
                        <div class="px-4 py-6 sm:px-6 lg:px-4  mx-auto">

                            <!-- Grid -->
                            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                <!-- Card -->
                                <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
                                    :href="route('forum.show')">
                                    <div class="my-6">
                                        <h3
                                            class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                                            Discussion about the importance of ethics in business
                                        </h3>
                                        <p class="mt-5 text-gray-600 dark:text-neutral-400">
                                            At Wake, our mission has always been focused on bringing openness.
                                        </p>
                                    </div>
                                    <div class="mt-auto flex items-center gap-x-3">
                                        <img class="size-8 rounded-full"
                                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                            alt="Image Description">
                                        <div>
                                            <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Lauren Waller
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- End Card -->

                                <!-- Card -->
                                <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
                                    :href="route('forum.show')">
                                    <div class="my-6">
                                        <h3
                                            class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                                            How Google Assistant now helps you record stories for kids
                                        </h3>
                                        <p class="mt-5 text-gray-600 dark:text-neutral-400">
                                            Google is constantly updating its consumer AI, Google Assistant, with new
                                            features.
                                        </p>
                                    </div>
                                    <div class="mt-auto flex items-center gap-x-3">
                                        <img class="size-8 rounded-full"
                                            src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                            alt="Image Description">
                                        <div>
                                            <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Aaron Larsson
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- End Card -->

                                <!-- Card -->
                                <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
                                    :href="route('forum.show')">
                                    <div class="my-6">
                                        <h3
                                            class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                                            Front accounts - let's work together
                                        </h3>
                                        <p class="mt-5 text-gray-600 dark:text-neutral-400">
                                            Are you an accountant? Are you a company formation advisor?
                                        </p>
                                    </div>
                                    <div class="mt-auto flex items-center gap-x-3">
                                        <img class="size-8 rounded-full"
                                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                            alt="Image Description">
                                        <div>
                                            <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Lauren Waller
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- End Card -->

                                <!-- Card -->
                                <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
                                    :href="route('forum.show')">
                                    <div class="my-6">
                                        <h3
                                            class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                                            Front accounts - let's work together
                                        </h3>
                                        <p class="mt-5 text-gray-600 dark:text-neutral-400">
                                            Are you an accountant? Are you a company formation advisor?
                                        </p>
                                    </div>
                                    <div class="mt-auto flex items-center gap-x-3">
                                        <img class="size-8 rounded-full"
                                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                            alt="Image Description">
                                        <div>
                                            <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Lauren Waller
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- End Card -->

                                <!-- Card -->
                                <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
                                    :href="route('forum.show')">
                                    <div class="my-6">
                                        <h3
                                            class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                                            Front accounts - let's work together
                                        </h3>
                                        <p class="mt-5 text-gray-600 dark:text-neutral-400">
                                            Are you an accountant? Are you a company formation advisor?
                                        </p>
                                    </div>
                                    <div class="mt-auto flex items-center gap-x-3">
                                        <img class="size-8 rounded-full"
                                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                            alt="Image Description">
                                        <div>
                                            <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Lauren Waller
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- End Card -->

                                <!-- Card -->
                                <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
                                    :href="route('forum.show')">
                                    <div class="my-6">
                                        <h3
                                            class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                                            Front accounts - let's work together
                                        </h3>
                                        <p class="mt-5 text-gray-600 dark:text-neutral-400">
                                            Are you an accountant? Are you a company formation advisor?
                                        </p>
                                    </div>
                                    <div class="mt-auto flex items-center gap-x-3">
                                        <img class="size-8 rounded-full"
                                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                            alt="Image Description">
                                        <div>
                                            <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Lauren Waller
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- End Card -->
                            </div>
                            <!-- End Grid -->

                        </div>
                        <!-- End Card Blog -->
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>