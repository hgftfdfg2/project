<template>

    <Head title="Groups" />

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
                                    <label class="block">Search by location </label>
                                    <div class="relative">
                                        <div>
                                            <i
                                                class="fa-solid fa-location-dot  absolute m-2 text-md top-1 text-neutral-400"></i>
                                            <input type="text"
                                                class="border-1 border-neutral-300 px-8 rounded-lg w-full" />
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

                        <!-- my groups -->
                        <div>
                            <h2 class="mb-3 mt-6 px-4 text-2xl font-semibold">
                                My Groups
                            </h2>
                            <div class="px-4 py-5 sm:px-6 lg:px-4 lg:py-4 mx-auto">

                                <!-- Grid -->
                                <div>

                                    <!-- start card -->
                                    <div v-if="user_groups[0].groups.length == 0"
                                        class="min-h-32 w-full shadow-md rounded-lg border p-3 flex justify-center items-center">
                                        <h2 class="w-full text-center font-semibold">
                                            you are not joined to any group
                                        </h2>
                                    </div>

                                    <div v-else class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                                        <!-- <Card v-for="group in user_groups[0].groups" :key="group.id"
                                            :imageSrc="group.img"
                                            :goTo="route('groups.my-group.index', { name: group.name })">
                                            <template #header>
                                                {{ group.name }}
                                            </template>
                                            <template #content>
                                                Some quick example text to build on the card title and make up the bulk
                                                of the card's content.
                                            </template>
                                        </Card> -->
                                        <Card :imageSrc="group.profile_img" v-for="group in user_groups[0].groups" :key="group.id">
                                            <template #header>
                                                <p>{{ group.name }}</p>
                                            </template>
                                            <template #content>
                                                <p>{{ group.description }}</p>
                                            </template>
                                            <template #links>
                                                <div
                                                    class="w-full flex flex-col justify-center items-center gap-2 text-sm font-semibold rounded-lg border border-transparent">
                                                    <a :href="route('groups.my-group.index', { name: group.name })"
                                                        class="bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 
                                                        disabled:pointer-events-none w-full py-2 px-3 text-center rounded-md">Join
                                                        Group</a>
                                                    <a :href="route('groups.my-group.index', { name: group.name })"
                                                        class=" bg-gray-200 shadow-md text-gray-600 hover:bg-blue-700 
                                                        disabled:opacity-50 disabled:pointer-events-none w-full py-2 px-3 text-center rounded-md">Gro To
                                                        Group</a>

                                                </div>
                                            </template>
                                        </Card>

                                    </div>
                                    <!-- end card -->

                                </div>
                                <!-- End Grid -->

                            </div>
                        </div>
                        <!-- end my groups -->

                        <!-- suggested groups -->
                        <div>
                            <h2 class="mb-3 mt-6 px-4 text-2xl font-semibold">
                                Suggested for you
                            </h2>
                            <div class="px-4 py-5 sm:px-6 lg:px-4 lg:py-4 mx-auto">

                                <!-- Grid -->
                                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                    <!-- card -->
                                    <Card v-for="group in all_groups.data" :key="group.id" :imageSrc="group.profile_img">

                                        <template #header>
                                                <p>{{ group.name }}</p>
                                            </template>
                                            <template #content>
                                                <p>{{ group.description }}</p>
                                            </template>
                                            <template #links>
                                                <div
                                                    class="w-full flex flex-col justify-center items-center gap-2 text-sm font-semibold rounded-lg border border-transparent">
                                                    <a :href="route('groups.my-group.index', { name: group.name })"
                                                        class="bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 
                                                        disabled:pointer-events-none w-full py-2 px-3 text-center rounded-md">Join
                                                        Group</a>
                                                    <a :href="route('groups.my-group.index', { name: group.name })"
                                                        class=" bg-gray-200 shadow-md text-gray-600 hover:bg-blue-700 
                                                        disabled:opacity-50 disabled:pointer-events-none w-full py-2 px-3 text-center rounded-md">Gro To
                                                        Group</a>

                                                </div>
                                            </template>
                                    </Card>

                                    <!-- end card -->

                                </div>
                                <!-- End Grid -->

                            </div>
                        </div>
                        <!-- end suggested groups -->
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Card from '@/Components/Card.vue';
import axios from 'axios';

export default {
    components: {
        AuthenticatedLayout,
        Head,
        Card,
        axios
    },
    props: [
        'all_groups',
        'user_groups'
    ],
    data() {
        return {

        }
    },
    methods: {

    },
    created() {
        console.log(this.user_groups)
    }

}
</script>

<style></style>