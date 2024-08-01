<template>

    <Head title="Community" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden sm:px-10 lg:px-20 shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="pt-4 pb-4">
                            <h2 class="font-bold text-3xl mb-4 text-center">
                                {{ user.state.name }} community
                            </h2>
                        </div>

                        <!-- start slider images -->
                        <div class="px-4 py-5 sm:px-6 lg:px-4 lg:py-4 mx-auto">
                            <div v-if="state_imgs.length == 0"
                                class="min-h-32 w-full shadow-md rounded-lg border p-3 flex justify-center items-center">
                                <h2 class="w-full text-center font-semibold">
                                    there is no uploaded images for {{ user.state.name }} state.
                                </h2>
                            </div>
                            <vueper-slides v-else :slide-ratio="1 / 2"
                                :breakpoints="{ 800: { visibleSlides: 1, slideMultiple: 1 } }" 
                                autoplay
                                fixed-height="400px"
                                :arrows="false">
                                <vueper-slide v-for="(img) in state_imgs" :key="img.id" :image="img.img" />
                            </vueper-slides>

                        </div>
                        <!-- end slider images -->

                        <hr class="w-2/3 mx-auto my-8" />

                        <!--  Events -->
                        <div>
                            <h2 class="mb-3 mt-6 text-center px-4 text-2xl font-semibold">
                                Upcoming Events
                            </h2>
                            <div class="px-4 py-5 sm:px-6 lg:px-4 lg:py-4 mx-auto">

                                <!-- Grid -->
                                <div>
                                    <!-- start card -->
                                    <div v-if="state_events.length == 0"
                                        class="min-h-32 w-full shadow-md rounded-lg border p-3 flex justify-center items-center">
                                        <h2 class="w-full text-center font-semibold">
                                            there is no upcoming events in {{ user.state.name }} state.
                                        </h2>
                                    </div>

                                    <vueper-slides v-else class="no-shadow" :visible-slides="3" slide-multiple
                                        fixed-height="500px" :gap="3" :slide-ratio="1 / 4" :dragging-distance="200"
                                        :breakpoints="{ 800: { visibleSlides: 1, slideMultiple: 1 } }" arrows-outside
                                        bullets-outside>

                                        <vueper-slide v-for="event in state_events" :key="event.id" class="">
                                            <template #content>
                                                <div>
                                                    <Card :imageSrc="event.img" class="">
                                                        <template #header>
                                                            <p>{{ event.title }}</p>
                                                        </template>
                                                        <template #content>
                                                            <p>{{ event.discreption }}</p>
                                                            <p><span
                                                                    class="underline decoration-solid underline-offset-2">Date:</span>
                                                                {{ new Date(event.date).toLocaleString() }}</p>
                                                            <p> <span
                                                                    class="underline decoration-solid underline-offset-2">Location:</span>
                                                                {{ event.location }}</p>
                                                        </template>
                                                        <template #links>
                                                            <div
                                                                class="w-full flex flex-col justify-center items-center gap-2 text-sm font-semibold rounded-lg border border-transparent">
                                                                <a :href="route('groups.my-group.index', { name: 'Healthcare' })"
                                                                    class="bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 
                                                        disabled:pointer-events-none w-full py-2 px-3 text-center rounded-md">Join
                                                                    event</a>
                                                                <a :href="route('groups.my-group.index', { name: 'Healthcare' })"
                                                                    class=" bg-gray-200 shadow-md text-gray-600 hover:bg-blue-700 
                                                        disabled:opacity-50 disabled:pointer-events-none w-full py-2 px-3 text-center rounded-md">Show
                                                                    event</a>

                                                            </div>
                                                        </template>
                                                    </Card>
                                                </div>

                                            </template>
                                        </vueper-slide>
                                    </vueper-slides>
                                    <!-- end card -->

                                </div>
                                <!-- End Grid -->

                            </div>
                        </div>
                        <!-- end Events -->

                        <hr class="w-2/3 mx-auto my-8" />

                        <!--  News -->
                        <div>
                            <h2 class="mb-3 mt-6 text-center px-4 text-2xl font-semibold">
                                News
                            </h2>
                            <div class="px-4 py-5 sm:px-6 lg:px-4 lg:py-4 mx-auto">

                                <!-- Grid -->
                                <div>
                                    <!-- start card -->
                                    <div v-if="state_events.length == 0"
                                        class="min-h-32 w-full shadow-md rounded-lg border p-3 flex justify-center items-center">
                                        <h2 class="w-full text-center font-semibold">
                                            there is no news
                                        </h2>
                                    </div>

                                    <vueper-slides v-else class="no-shadow" :visible-slides="3" slide-multiple
                                        fixed-height="500px" :gap="3" :slide-ratio="1 / 4" :dragging-distance="200"
                                        :breakpoints="{ 800: { visibleSlides: 1, slideMultiple: 1 } }" arrows-outside
                                        bullets-outside>

                                        <vueper-slide v-for="event in state_events" :key="event.id" class="">
                                            <template #content>
                                                <div>
                                                    <Card
                                                        :imageSrc="`https://www.arabnews.com/sites/default/files/styles/n_670_395/public/2021/04/04/2557156-1089593101.jpg?itok=XZksFlBJ`">
                                                        <template #header>
                                                            <p>Rising Interest: Saudi Arabia's Healthcare Sector
                                                                Attracts
                                                                Global Attention with New Projects</p>
                                                        </template>
                                                        <template #content>
                                                            <p>Published on May 29, 2023</p>
                                                        </template>
                                                        <template #links>
                                                            <div
                                                                class="mt-3 w-full flex justify-start items-center gap-2 text-sm font-semibold rounded-lg border border-transparent">
                                                                <a :href="route('forum.show')"
                                                                    class="text-blue-500">Read more</a>
                                                            </div>
                                                        </template>
                                                    </Card>
                                                </div>

                                            </template>
                                        </vueper-slide>
                                    </vueper-slides>
                                    <!-- end card -->

                                </div>
                                <!-- End Grid -->

                            </div>
                        </div>
                        <!-- end News -->

                        <hr class="w-2/3 mx-auto my-8" />

                        <!-- community group -->
                        <div>
                            <h2 class="mb-3 mt-6 px-4 text-center  text-2xl font-semibold">
                                Community Groups
                            </h2>
                            <div class="px-4 py-5 sm:px-6 lg:px-4 lg:py-4 mx-auto">

                                <!-- Grid -->
                                <div>
                                    <!-- start card -->

                                    <div v-if="state_groups.length == 0"
                                        class="min-h-32 w-full shadow-md rounded-lg border p-3 flex justify-center items-center">
                                        <h2 class="w-full text-center font-semibold">
                                            there is no groups for {{ user.state.name }} state.
                                        </h2>
                                    </div>
                                    <vueper-slides v-else class="no-shadow" :visible-slides="3" fixed-height="400px"
                                        slide-multiple :gap="3" :slide-ratio="1 / 4" :dragging-distance="200"
                                        :breakpoints="{ 800: { visibleSlides: 1, slideMultiple: 1 } }" arrows-outside
                                        bullets-outside>
                                        <vueper-slide v-for="group in state_groups" :key="group.id" class="">
                                            <template #content>
                                                <div>
                                                    <Card :imageSrc="group.profile_img">
                                                        <template #header>
                                                            <p>{{ group.name }}</p>
                                                        </template>
                                                        <template #content>
                                                            <p>{{ group.description }}</p>
                                                        </template>
                                                        <template #links>
                                                            <div
                                                                class="w-full flex flex-col justify-center items-center gap-2 text-sm font-semibold rounded-lg border border-transparent">
                                                                <a :href="route('groups.my-group.index', { name: 'Healthcare' })"
                                                                    class="bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 
                                                        disabled:pointer-events-none w-full py-2 px-3 text-center rounded-md">Join
                                                                    Group</a>
                                                                <a :href="route('groups.my-group.index', { name: 'Healthcare' })"
                                                                    class=" bg-gray-200 shadow-md text-gray-600 hover:bg-blue-700 
                                                        disabled:opacity-50 disabled:pointer-events-none w-full py-2 px-3 text-center rounded-md">Gro
                                                                    To
                                                                    Group</a>

                                                            </div>
                                                        </template>
                                                    </Card>
                                                </div>

                                            </template>
                                        </vueper-slide>
                                    </vueper-slides>

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
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
import { VueperSlides, VueperSlide } from 'vueperslides';
import 'vueperslides/dist/vueperslides.css'

export default {
    components: {
        AuthenticatedLayout,
        Head,
        Card,
        axios,
        Carousel,
        Slide,
        Pagination,
        Navigation,
        VueperSlides,
        VueperSlide
    },
    data() {
        return {

        }

    },
    props: ['user', 'state_imgs', 'state_events', 'state_groups'],
    methods: {
    },
    created() {
        // console.log(this.user, this.state_imgs, this.state_events, this.state_groups);
    },


}

</script>

<style scoped></style>