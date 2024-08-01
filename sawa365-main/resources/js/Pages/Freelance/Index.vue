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

    <Head title="Freelnce Directory" />

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
                            Popular Services
                        </h2>

                        <!-- Card Blog -->
                        <div class="px-4 py-6 sm:px-6 lg:px-4  mx-auto">

                            <!-- Grid -->
                            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                <!-- card -->
                                <Card :imageSrc="`https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmAoNa5VHEdNdgb16tBpZmyM5zP7yidqnI1n45MHt_fg&s`"
                                    :goTo="route('freelance.show')">
                                    <template #content> Nancy Farid</template>
                                    <template #header>UI/UX Designer </template>
                                </Card>
                                <!-- end card -->
                                <!-- card -->
                                <Card
                                    :imageSrc="`https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJFR_28nPANEjhlgbqDXZWz_y6cxpjlw9N7LjFGO07Nw&s`"
                                    :goTo="route('freelance.show')">
                                    <template #content> Nancy Farid</template>
                                    <template #header>Product Photogragphy </template>
                                </Card>
                                <!-- end card -->
                                <!-- card -->
                                <Card
                                    :imageSrc="`https://99designs-blog.imgix.net/blog/wp-content/uploads/2022/01/104228210.jpg?auto=format&q=60&fit=max&w=930`"
                                    :goTo="route('freelance.show')">
                                    <template #content> Nancy Farid</template>
                                    <template #header>Web Design</template>
                                </Card>
                                <!-- end card -->
                                <!-- card -->
                                <Card
                                    :imageSrc="`https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJFR_28nPANEjhlgbqDXZWz_y6cxpjlw9N7LjFGO07Nw&s`"
                                    :goTo="route('freelance.show')">
                                    <template #content> Nancy Farid</template>
                                    <template #header>Product Photogragphy </template>
                                </Card>
                                <!-- end card -->
                                <!-- card -->
                                <Card
                                    :imageSrc="`https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJFR_28nPANEjhlgbqDXZWz_y6cxpjlw9N7LjFGO07Nw&s`"
                                    :goTo="route('freelance.show')">
                                    <template #content> Nancy Farid</template>
                                    <template #header>Product Photogragphy </template>
                                </Card>
                                <!-- end card -->
                                <!-- card -->
                                <Card
                                    :imageSrc="`https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJFR_28nPANEjhlgbqDXZWz_y6cxpjlw9N7LjFGO07Nw&s`"
                                    :goTo="route('freelance.show')">
                                    <template #content> Nancy Farid</template>
                                    <template #header>Product Photogragphy </template>
                                </Card>
                                <!-- end card -->
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