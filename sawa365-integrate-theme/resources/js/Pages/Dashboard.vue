<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import TripDialog from '@/Pages/Home/Trip.vue';
import EventDialog from '@/Pages/Home/Event.vue';
import CheckInDialog from '@/Pages/Home/CheckIn.vue';
import Post from '@/Components/Post.vue';
export default {
    components: {
        AuthenticatedLayout,
        Head,
        TripDialog,
        Post,
        EventDialog,
        CheckInDialog
    },
    methods: {
        showTripDlg() {
            this.$refs.dlg1.showDlg();
        },
        showEventDlg() {
            this.$refs.dlg2.showDlg();
        },
        showCheckInDlg() {
            this.$refs.dlg3.showDlg();
        },
    },



}
</script>

<template>

    <Head title="Home" />

    <AuthenticatedLayout>

        <trip-dialog ref="dlg1" />
        <event-dialog ref="dlg2" />
        <check-in-dialog ref="dlg3" />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-bold text-2xl mb-4">
                        {{ $page.props.auth.user.fname }} , here's what's new !
                    </h2>
                    <div class="mx-auto grid sm:grid-cols-3 items-start content-start justify-start gap-4 md:gap-4">

                        <div class="sm:col-span-2">
                            <div
                                class="size-full my-2 bg-white shadow-sm border-solid border-2 border-neutral-100 rounded-lg p-5 dark:bg-neutral-900">
                                <div class="flex flex-col sm:flex-row justify-center sm:justify-start gap-5">
                                    <div class="block sm:inline">
                                        <div class="flex justify-center">
                                            <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                                class="rounded-full w-fit  size-14" />
                                        </div>
                                    </div>
                                    <form class="w-full h-full">
                                        <textarea type="text" placeholder="write a post"
                                            class="w-full h-fullborder-solid border-1 border-neutral-300 rounded-lg"></textarea>
                                        <div class="text-center sm:text-end">
                                            <button
                                                class="p-2 my-2 rounded-lg border border-transparent
                             bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Publish</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <div>
                                <h2>
                                    Share a new ...
                                </h2>
                                <div>
                                    <button @click="showTripDlg()"
                                        class="py-2 px-4 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                        <i class="fa-solid fa-plane-departure"></i>
                                        trip
                                    </button>
                                    <button @click="showEventDlg()"
                                        class="py-2 px-4 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                        <i class="fa-regular fa-calendar-days"></i>
                                        event
                                    </button>
                                    <button @click="showCheckInDlg()"
                                        class="py-2 px-4 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                        <i class="fa-solid fa-location-dot"></i>
                                        check-in
                                    </button>
                                </div>
                            </div>

                            <!-- posts -->
                            <div class="size-full my-2 bg-white divide-y-2 shadow-sm border-solid
                                border-2 border-neutral-100 rounded-lg p-5 dark:bg-neutral-900">
                                <!--start post -->
                                <Post
                                    :imageSrc="`https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80`">

                                    <template #userName>David Frod</template>
                                    <template #content>
                                        consectetur adipisicing elit. Magnam optio dolores ex eaque harum tempora illo
                                        voluptatem
                                        quidem eligendi pariatur magni hic, provident aliquid, natus reprehenderit
                                        laudantium quibusdam minus voluptate?
                                    </template>
                                </Post>
                                <!-- end post -->
                                <!--start post -->
                                <Post
                                    :imageSrc="`https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80`">

                                    <template #userName>David Frod</template>
                                    <template #content>
                                        consectetur adipisicing elit. Magnam optio dolores ex eaque harum tempora illo
                                        voluptatem
                                        quidem eligendi pariatur magni hic, provident aliquid, natus reprehenderit
                                        laudantium quibusdam minus voluptate?
                                    </template>
                                </Post>
                                <!-- end post -->
                                <!--start post -->
                                <Post
                                    :imageSrc="`https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80`">

                                    <template #userName>David Frod</template>
                                    <template #content>
                                        consectetur adipisicing elit. Magnam optio dolores ex eaque harum tempora illo
                                        voluptatem
                                        quidem eligendi pariatur magni hic, provident aliquid, natus reprehenderit
                                        laudantium quibusdam minus voluptate?
                                    </template>
                                </Post>
                                <!-- end post -->
                                <!--start post -->
                                <Post
                                    :imageSrc="`https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80`">

                                    <template #userName>David Frod</template>
                                    <template #content>
                                        consectetur adipisicing elit. Magnam optio dolores ex eaque harum tempora illo
                                        voluptatem
                                        quidem eligendi pariatur magni hic, provident aliquid, natus reprehenderit
                                        laudantium quibusdam minus voluptate?
                                    </template>
                                </Post>
                                <!-- end post -->
                                <!--start post -->
                                <Post
                                    :imageSrc="`https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80`">

                                    <template #userName>David Frod</template>
                                    <template #content>
                                        consectetur adipisicing elit. Magnam optio dolores ex eaque harum tempora illo
                                        voluptatem
                                        quidem eligendi pariatur magni hic, provident aliquid, natus reprehenderit
                                        laudantium quibusdam minus voluptate?
                                    </template>
                                </Post>
                                <!-- end post -->

                            </div>

                        </div>

                        <!-- up coming events -->
                        <div class="col-span-1">
                            <div
                                class="size-full my-2 bg-white shadow-sm border-solid border-2 border-neutral-100 rounded-lg p-2 lg:p-5 dark:bg-neutral-900">
                                <div class="flex-shrink-0 mb-3 text-center lg:text-start">
                                    <h3 class="block  py-2 text-xl font-semibold text-gray-800 dark:text-white">Upcoming
                                        events</h3>
                                </div>
                                <div class="my-2 sm:my-4 ">
                                    <!-- Icon Block -->
                                    <div class="flex flex-col justify-center items-center lg:flex-row lg:justify-start my-2 sm:my-6">
                                        <i class="fa-solid fa-calendar-days text-5xl"></i>
                                        <div class="ms-5 sm:ms-8">
                                            <h3 class="text-base font-semibold text-gray-800 dark:text-neutral-200">
                                                Strong empathy
                                            </h3>
                                            <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                                We've user tested our own process by shipping over 1k products for
                                                clients.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Icon Block -->

                                    <!-- Icon Block -->
                                    <div class="flex flex-col justify-center items-center lg:flex-row lg:justify-start my-2 sm:my-6">
                                        <i class="fa-solid fa-calendar-days text-5xl"></i>
                                        <div class="ms-5 sm:ms-8">
                                            <h3 class="text-base font-semibold text-gray-800 dark:text-neutral-200">
                                                Strong empathy
                                            </h3>
                                            <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                                We've user tested our own process by shipping over 1k products for
                                                clients.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Icon Block -->

                                    <!-- Icon Block -->
                                    <div class="flex flex-col justify-center items-center lg:flex-row lg:justify-start my-2 sm:my-6">
                                        <i class="fa-solid fa-calendar-days text-5xl"></i>
                                        <div class="ms-5 sm:ms-8">
                                            <h3 class="text-base font-semibold text-gray-800 dark:text-neutral-200">
                                                Strong empathy
                                            </h3>
                                            <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                                We've user tested our own process by shipping over 1k products for
                                                clients.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Icon Block -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
