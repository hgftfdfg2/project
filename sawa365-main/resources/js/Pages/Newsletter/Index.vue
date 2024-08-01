<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Card from '@/Components/Card.vue';

export default {
    components: {
        AuthenticatedLayout,
        Head,
        Card
    },

}

</script>

<template>

    <Head title="Newsletters" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
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
                                    <div class="flex flex-col md:flex-row justify-between gap-2 w-full">
                                        <div class="w-full">
                                            <label class="block">From</label>
                                            <input type="date"
                                            class="border-1 border-neutral-300 px-4 rounded-lg w-full focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                        </div>
                                        <div class="w-full">
                                            <label class="block">To</label>
                                            <input type="date"
                                                class="border-1 border-neutral-300 px-4 rounded-lg w-full focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                        </div>
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

                        <!-- content -->

                        <div class="my-5 mx-auto sm:px-6 lg:px-4">
                            <button type="button"
                                class="p-2 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                All
                            </button>
                            <button type="button"
                                class="p-2 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                Acquisition
                            </button>
                            <button type="button"
                                class="p-2 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                Artificial Intelligence
                            </button>
                            <button type="button"
                                class="p-2 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                Business
                            </button>
                            <button type="button"
                                class="p-2 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                Ecology
                            </button>
                            <button type="button"
                                class="p-2 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                Economy
                            </button>
                            <button type="button"
                                class="p-2 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                Education
                            </button>
                            <button type="button"
                                class="p-2 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                Health
                            </button>
                            <button type="button"
                                class="p-2 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                Ecology
                            </button>
                            <button type="button"
                                class="p-2 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                Economy
                            </button>
                            <button type="button"
                                class="p-2 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                Education
                            </button>
                            <button type="button"
                                class="p-2 m-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                Health
                            </button>
                        </div>

                        <div>
                            <h2 class="mb-3 mt-6 px-4 text-2xl font-semibold">
                                News
                            </h2>
                            <div class="px-4 py-5 sm:px-6 lg:px-4 lg:py-4 mx-auto">

                                <!-- Grid -->
                                <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-6">
                                    <!-- card -->
                                    <Card
                                        :imageSrc="`https://www.arabnews.com/sites/default/files/styles/n_670_395/public/2021/04/04/2557156-1089593101.jpg?itok=XZksFlBJ`"
                                        :goTo="route('forum.show')">
                                        <template #header>Rising Interest: Saudi Arabia's Healthcare Sector Attracts
                                            Global Attention with New Projects
                                        </template>
                                        <template #content>
                                            Published on May 29, 2023
                                        </template>
                                    </Card>
                                    <!-- end card -->
                                    
                                    <!-- card -->
                                    <Card
                                        :imageSrc="`https://assets.bizclikmedia.net/320/5a6092da0c065a3359347e6b13b70732:e4af08d812aa4606e0f927fad5a90610/cybersecurity-jpeg.jpg`"
                                        :goTo="route('forum.show')">
                                        <template #header>
                                            Hospitals and healthcare businesses must face security threats
                                        </template>
                                        <template #content>
                                            Published on May 29, 2023
                                        </template>
                                    </Card>
                                    <!-- end card -->

                                    <!-- card -->
                                    <Card
                                        :imageSrc="`https://i.iranintl.com/images/rdk9umy0/production/dcdd299b63aaa5c572b4c13d3080292f6544f7ec-1280x720.jpg?rect=160,0,960,720&w=800&h=600&fm=webp&q=70`"
                                        :goTo="route('forum.show')">
                                        <template #header>
                                            Healthcare Headed For Manpower Crisis As 10k Practitioners Left Iran In Two Years
                                        </template>
                                        <template #content>
                                            Published on May 29, 2023
                                        </template>
                                    </Card>
                                    <!-- end card -->
                                    
                                    <!-- card -->
                                    <Card
                                        :imageSrc="`https://www.arabnews.com/sites/default/files/styles/n_670_395/public/2021/04/04/2557156-1089593101.jpg?itok=XZksFlBJ`"
                                        :goTo="route('forum.show')">
                                        <template #header>Rising Interest: Saudi Arabia's Healthcare Sector Attracts
                                            Global Attention with New Projects
                                        </template>
                                        <template #content>
                                            Published on May 29, 2023
                                        </template>
                                    </Card>
                                    <!-- end card -->
                                    
                                    <!-- card -->
                                    <Card
                                        :imageSrc="`https://assets.bizclikmedia.net/320/5a6092da0c065a3359347e6b13b70732:e4af08d812aa4606e0f927fad5a90610/cybersecurity-jpeg.jpg`"
                                        :goTo="route('forum.show')">
                                        <template #header>
                                            Hospitals and healthcare businesses must face security threats
                                        </template>
                                        <template #content>
                                            Published on May 29, 2023
                                        </template>
                                    </Card>
                                    <!-- end card -->

                                    <!-- card -->
                                    <Card
                                        :imageSrc="`https://i.iranintl.com/images/rdk9umy0/production/dcdd299b63aaa5c572b4c13d3080292f6544f7ec-1280x720.jpg?rect=160,0,960,720&w=800&h=600&fm=webp&q=70`"
                                        :goTo="route('forum.show')">
                                        <template #header>
                                            Healthcare Headed For Manpower Crisis As 10k Practitioners Left Iran In Two Years
                                        </template>
                                        <template #content>
                                            Published on May 29, 2023
                                        </template>
                                    </Card>
                                    <!-- end card -->

                                </div>
                                <!-- End Grid -->

                            </div>
                        </div>

                        <!-- end content -->

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>