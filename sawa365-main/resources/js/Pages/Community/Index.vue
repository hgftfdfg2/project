<template>

    <Head title="Community" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="pt-4 pb-4">
                            <h2 class="font-bold text-3xl mb-4 text-center">
                                {{ user.state.name }} community
                            </h2>
                        </div>

                        <div class="px-4 py-5 sm:px-6 lg:px-4 lg:py-4 mx-auto">
                            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 ">
                                <div v-for="img in state_imgs" :key="img">
                                    <img :src="img" />
                                </div>
                            </div>
                        </div>

                        <hr class="w-1/2 mx-auto my-8" />

                        <!--  Events -->
                        <div>
                            <h2 class="mb-3 mt-6 text-center px-4 text-2xl font-semibold">
                                Upcoming Events
                            </h2>
                            <div class="px-4 py-5 sm:px-6 lg:px-4 lg:py-4 mx-auto">

                                <!-- Grid -->
                                <div>
                                    <!-- start card -->
                                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 ">

                                        <Card
                                            :imageSrc="`https://www.arabnews.com/sites/default/files/styles/n_670_395/public/2021/04/04/2557156-1089593101.jpg?itok=XZksFlBJ`"
                                            :goTo="route('groups.my-group.index', { name: 'Healthcare' })">
                                            <template #header>
                                                Healthcare Sector Attracts
                                            </template>
                                            <template #content>
                                                Some quick example text to build on the card title and make up the bulk
                                                of the card's content.
                                            </template>
                                        </Card>
                                        <Card
                                            :imageSrc="`https://www.arabnews.com/sites/default/files/styles/n_670_395/public/2021/04/04/2557156-1089593101.jpg?itok=XZksFlBJ`"
                                            :goTo="route('groups.my-group.index', { name: 'Healthcare' })">
                                            <template #header>
                                                Healthcare Sector Attracts
                                            </template>
                                            <template #content>
                                                Some quick example text to build on the card title and make up the bulk
                                                of the card's content.
                                            </template>
                                        </Card>
                                        <Card
                                            :imageSrc="`https://www.arabnews.com/sites/default/files/styles/n_670_395/public/2021/04/04/2557156-1089593101.jpg?itok=XZksFlBJ`"
                                            :goTo="route('groups.my-group.index', { name: 'Healthcare' })">
                                            <template #header>
                                                Healthcare Sector Attracts
                                            </template>
                                            <template #content>
                                                Some quick example text to build on the card title and make up the bulk
                                                of the card's content.
                                            </template>
                                        </Card>

                                    </div>
                                    <!-- end card -->

                                </div>
                                <!-- End Grid -->

                            </div>
                        </div>
                        <!-- end Events -->

                        <hr class="w-1/2 mx-auto my-8" />

                        <!--  News -->
                        <div>
                            <h2 class="mb-3 mt-6 px-4 text-center  text-2xl font-semibold">
                                News
                            </h2>
                            <div class="px-4 py-5 sm:px-6 lg:px-4 lg:py-4 mx-auto">

                                <!-- Grid -->
                                <div>
                                    <!-- start card -->
                                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                                        <Card
                                            :imageSrc="`https://www.arabnews.com/sites/default/files/styles/n_670_395/public/2021/04/04/2557156-1089593101.jpg?itok=XZksFlBJ`"
                                            :goTo="route('groups.my-group.index', { name: 'Healthcare' })">
                                            <template #header>
                                                Healthcare Sector Attracts
                                            </template>
                                            <template #content>
                                                Some quick example text to build on the card title and make up the bulk
                                                of the card's content.
                                            </template>
                                        </Card>
                                        <Card
                                            :imageSrc="`https://www.arabnews.com/sites/default/files/styles/n_670_395/public/2021/04/04/2557156-1089593101.jpg?itok=XZksFlBJ`"
                                            :goTo="route('groups.my-group.index', { name: 'Healthcare' })">
                                            <template #header>
                                                Healthcare Sector Attracts
                                            </template>
                                            <template #content>
                                                Some quick example text to build on the card title and make up the bulk
                                                of the card's content.
                                            </template>
                                        </Card>
                                        <Card
                                            :imageSrc="`https://www.arabnews.com/sites/default/files/styles/n_670_395/public/2021/04/04/2557156-1089593101.jpg?itok=XZksFlBJ`"
                                            :goTo="route('groups.my-group.index', { name: 'Healthcare' })">
                                            <template #header>
                                                Healthcare Sector Attracts
                                            </template>
                                            <template #content>
                                                Some quick example text to build on the card title and make up the bulk
                                                of the card's content.
                                            </template>
                                        </Card>

                                    </div>
                                    <!-- end card -->

                                </div>
                                <!-- End Grid -->

                            </div>
                        </div>
                        <!-- end News -->

                        <hr class="w-1/2 mx-auto my-8" />

                        <!-- community group -->
                        <div>
                            <h2 class="mb-3 mt-6 px-4 text-center  text-2xl font-semibold">
                                Community Group
                            </h2>
                            <div class="px-4 py-5 sm:px-6 lg:px-4 lg:py-4 mx-auto">

                                <!-- Grid -->
                                <div>
                                    <!-- start card -->
                                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                                        <Card
                                            :imageSrc="`https://www.arabnews.com/sites/default/files/styles/n_670_395/public/2021/04/04/2557156-1089593101.jpg?itok=XZksFlBJ`"
                                            :goTo="route('groups.my-group.index', { name: 'Healthcare' })">
                                            <template #header>
                                                {{ user.state.name }}
                                            </template>
                                            <template #content>
                                                Some quick example text to build on the card title and make up the bulk
                                                of the card's content.
                                            </template>
                                        </Card>

                                        <!-- <i class="fa-solid fa-circle-arrow-right"></i> -->

                                    </div>
                                    <!-- end card -->

                                </div>
                                <!-- End Grid -->

                            </div>
                        </div>
                        <!-- end community group -->


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
    data() {
        return {
            state_imgs: [
                'https://a.cdn-hotels.com/gdcs/production158/d1204/e80fc369-eb55-42a1-bf68-90075c377466.jpg?impolicy=fcrop&w=1600&h=1066&q=medium',
                'https://a.cdn-hotels.com/gdcs/production24/d1047/41f347f1-9f04-48ac-b6ec-32fe88b478c5.jpg?impolicy=fcrop&w=1600&h=1066&q=medium',
                'https://a.cdn-hotels.com/gdcs/production8/d897/8fa33e6b-4c84-489b-92d2-e92ab9f47015.jpg?impolicy=fcrop&w=1600&h=1066&q=medium',
                'https://a.cdn-hotels.com/gdcs/production181/d1710/902626dd-b85b-45b2-86d0-00c82803d7f6.jpg?impolicy=fcrop&w=1600&h=1066&q=medium',
                'https://a.cdn-hotels.com/gdcs/production45/d1664/897c7906-973c-40eb-ae6b-4cd2fafb91e7.jpg?impolicy=fcrop&w=1600&h=1066&q=medium',
                'https://a.cdn-hotels.com/gdcs/production1/d1585/d6665488-bf0b-4193-83c6-6e716c5063d4.jpg?impolicy=fcrop&w=1600&h=1066&q=medium'
            ],
        }

    },
    props: ['user'],
    methods: {
        
    },
    created() {
        
    },
    

}

</script>