<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Accordion from '@/Components/Accordion.vue';

defineProps
    ({
        canLogin: {
            type: Boolean,
        },
        canRegister: {
            type: Boolean,
        },
        laravelVersion: {
            type: String,
            required: true,
        },
        phpVersion: {
            type: String,
            required: true,
        },
    });
</script>

<template>

    <Head title="Welcome" />

    <div class="min-h-screen bg-gray-100">
        <!-- Page Heading -->
        <header class="bg-white shadow">
            <!-- Logo -->
            <div class="max-w-7xl mx-auto py-1 px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between">
                    <div class="flex justify-start gap-4 items-center">
                        <div class="">
                            <Link :href="route('dashboard')">
                            <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800" />
                            </Link>
                        </div>
                        <div>
                            <h1 class="font-bold text-2xl">Sawa</h1>
                        </div>
                    </div>
                    <div class="p-6 text-end">
                        <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        Home</Link>

                        <template v-else>
                            <Link :href="route('login')"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Log in</Link>

                            <Link :href="route('register')"
                                class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Register</Link>
                        </template>
                    </div>
                </div>
            </div>
        </header>

        <!-- page content -->
        <main>

            <!-- Hero -->
            <div class="max-w-[85rem] mx-auto text-center sm:text-start px-4 py-8 sm:py-5 sm:px-6 lg:px-8">
                <!-- Grid -->
                <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
                    <div>
                        <h1
                            class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">
                            Start your journey with <span class="text-blue-600">Preline</span></h1>
                        <p class="mt-3 text-lg text-gray-800 dark:text-neutral-400">Hand-picked professionals and
                            expertly
                            crafted components, designed for any kind of entrepreneur.</p>
                    </div>
                    <!-- End Col -->
                    <div class="relative sm:ms-4 mt-3">
                        <img class="w-full rounded-md"
                            src="https://images.unsplash.com/photo-1665686377065-08ba896d16fd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700&h=800&q=80"
                            alt="Image Description">
                        <div
                            class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-neutral-800 dark:via-neutral-900/0 dark:to-neutral-900/0">
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Hero -->

            <!-- Features -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto bg-gray-200 mt-5">
                <!-- Grid -->
                <div class="grid gap-6 grid-cols-1 sm:gap-12 lg:grid-cols-3 lg:gap-8">
                    <!-- Stats -->
                    <div class="text-center">
                        <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-neutral-200">Accuracy rate
                        </h4>
                        <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-blue-600">99.95%</p>
                        <p class="mt-1 text-gray-500 dark:text-neutral-500">in fulfilling orders</p>
                    </div>
                    <!-- End Stats -->

                    <!-- Stats -->
                    <div class="text-center">
                        <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-neutral-200">Startup
                            businesses</h4>
                        <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-blue-600">2,000+</p>
                        <p class="mt-1 text-gray-500 dark:text-neutral-500">partner with Preline</p>
                    </div>
                    <!-- End Stats -->

                    <!-- Stats -->
                    <div class="text-center">
                        <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-neutral-200">Happy customer
                        </h4>
                        <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-blue-600">85%</p>
                        <p class="mt-1 text-gray-500 dark:text-neutral-500">this year alone</p>
                    </div>
                    <!-- End Stats -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Features -->

            <!-- Card Blog -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto mt-4">
                <!-- Grid -->
                <div class="grid lg:grid-cols-2 lg:gap-y-16 gap-10">
                    <!-- Card -->
                    <a class="group rounded-xl overflow-hidden" href="#">
                        <div class="sm:flex">
                            <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                                <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover rounded-xl"
                                    src="https://images.unsplash.com/photo-1540575861501-7cf05a4b125a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                                    alt="Image Description">
                            </div>

                            <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0">
                                <h3
                                    class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                                    Studio by Preline
                                </h3>
                                <p class="mt-3 text-gray-600 dark:text-neutral-400">
                                    Produce professional, reliable streams easily leveraging Preline's innovative
                                    broadcast
                                    studio
                                </p>
                                <p
                                    class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium">
                                    Read more
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="group rounded-xl overflow-hidden" href="#">
                        <div class="sm:flex">
                            <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                                <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover rounded-xl"
                                    src="https://images.unsplash.com/photo-1668906093328-99601a1aa584?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=986&q=80"
                                    alt="Image Description">
                            </div>

                            <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0">
                                <h3
                                    class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                                    Onsite
                                </h3>
                                <p class="mt-3 text-gray-600 dark:text-neutral-400">
                                    Optimize your in-person experience with best-in-class capabilities like badge
                                    printing and
                                    lead retrieval
                                </p>
                                <p
                                    class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium">
                                    Read more
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="group rounded-xl overflow-hidden" href="#">
                        <div class="sm:flex">
                            <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                                <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover rounded-xl"
                                    src="https://images.unsplash.com/photo-1567016526105-22da7c13161a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80"
                                    alt="Image Description">
                            </div>

                            <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0">
                                <h3
                                    class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                                    The complete guide to OKRs
                                </h3>
                                <p class="mt-3 text-gray-600 dark:text-neutral-400">
                                    How to make objectives and key results work for your company
                                </p>
                                <p
                                    class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium">
                                    Read more
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="group rounded-xl overflow-hidden" href="#">
                        <div class="sm:flex">
                            <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                                <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover rounded-xl"
                                    src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                                    alt="Image Description">
                            </div>

                            <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0">
                                <h3
                                    class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                                    People program models
                                </h3>
                                <p class="mt-3 text-gray-600 dark:text-neutral-400">
                                    Six approaches to bringing your People strategy to life
                                </p>
                                <p
                                    class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium">
                                    Read more
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Card Blog -->

            <!-- Features -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Title -->
                <div class="mx-auto max-w-2xl mb-8 lg:mb-14 text-center">
                    <h2 class="text-3xl lg:text-4xl text-gray-800 font-bold dark:text-neutral-200">
                        Explore tools
                    </h2>
                    <p class="mt-3 text-gray-800 dark:text-neutral-200">
                        The powerful and flexible theme for all kinds of businesses.
                    </p>
                </div>
                <!-- End Title -->

                <!-- Grid -->
                <div class="mx-auto max-w-3xl grid grid-cols-1 sm:grid-cols-12 gap-6 lg:gap-8">
                    <!-- Icon Block -->
                    <div class="col-span-1 my-5 sm:my-0 sm:col-span-4 text-center">
                        <svg class="mx-auto h-auto w-7 md:w-9 text-gray-800 dark:text-neutral-200"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="10" height="14" x="3" y="8" rx="2" />
                            <path d="M5 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2h-2.4" />
                            <path d="M8 18h.01" />
                        </svg>
                        <div class="mt-2 sm:mt-6">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Responsive
                            </h3>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="col-span-1 my-5 sm:my-0 sm:col-span-4 text-center">
                        <svg class="mx-auto h-auto w-7 md:w-9 text-gray-800 dark:text-neutral-200"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 7h-9" />
                            <path d="M14 17H5" />
                            <circle cx="17" cy="17" r="3" />
                            <circle cx="7" cy="7" r="3" />
                        </svg>
                        <div class="mt-2 sm:mt-6">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Customizable
                            </h3>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="col-span-1 my-5 sm:my-0 sm:col-span-4 text-center">
                        <svg class="mx-auto h-auto w-7 md:w-9 text-gray-800 dark:text-neutral-200"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z" />
                            <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
                        </svg>
                        <div class="mt-2 sm:mt-6">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                24/7 Support
                            </h3>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
                <!-- End Grid -->

                <!-- Grid -->
                <div class="mt-20 grid grid-cols-12 items-center gap-x-2 sm:gap-x-6 lg:gap-x-8">
                    <div class="hidden md:block col-span-4 md:col-span-3">
                        <img class="rounded-xl"
                            src="https://images.unsplash.com/photo-1606868306217-dbf5046868d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1981&q=80"
                            alt="Image Description">
                    </div>
                    <!-- End Col -->

                    <div class="col-span-4 md:col-span-3">
                        <img class="rounded-xl"
                            src="https://images.unsplash.com/photo-1587613991119-fbbe8e90531d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1003&q=80"
                            alt="Image Description">
                    </div>
                    <!-- End Col -->

                    <div class="col-span-4 md:col-span-3">
                        <img class="rounded-xl"
                            src="https://images.unsplash.com/photo-1554295405-abb8fd54f153?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=652&q=80"
                            alt="Image Description">
                    </div>
                    <!-- End Col -->

                    <div class="col-span-4 md:col-span-3">
                        <img class="rounded-xl"
                            src="https://images.unsplash.com/photo-1640622300473-977435c38c04?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2072&q=80"
                            alt="Image Description">
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Features -->

            <!-- FAQ -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->
                <div class="grid md:grid-cols-5 gap-10">
                    <div class="md:col-span-2">
                        <div class="max-w-xs text-center sm:text-start">
                            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">
                                Frequently<br>asked
                                questions</h2>
                            <p class="mt-1 hidden md:block text-gray-600 dark:text-neutral-400">Answers to the most
                                frequently
                                asked questions.</p>
                            <p class="mt-1 hidden md:block text-gray-600 dark:text-neutral-400">
                                Ask questions and discuss topics of interest in the Forum.
                                <a href="#" class="rounded-lg w-fit bg-blue-400 text-white block p-2">Form</a>
                            </p>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="md:col-span-3">
                        <!-- Accordion -->
                        <div class="hs-accordion-group divide-y divide-gray-200 dark:divide-neutral-700">

                            <Accordion title="Can I cancel at anytime?">
                                Yes, you can cancel anytime no questions are asked while you cancel but we would
                                highly
                                appreciate if you will give us some feedback.
                            </Accordion>

                            <Accordion title="My team has credits. How do we use them?">
                                Once your team signs up for a subscription plan. This is where we sit down, grab
                                a cup
                                of coffee and dial in the details.
                            </Accordion>

                            <Accordion title="How does Preline's pricing work?">
                                Our subscriptions are tiered. Understanding the task at hand and ironing out the
                                wrinkles is key.
                            </Accordion>

                            <Accordion title="How does Preline's pricing work?">
                                Our subscriptions are tiered. Understanding the task at hand and ironing out the
                                wrinkles is key.
                            </Accordion>

                        </div>
                        <!-- End Accordion -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End FAQ -->

            <!-- ========== FOOTER ========== -->
            <footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
                <!-- Grid -->
                <div class="text-center">
                    <div>
                        <a class="flex-none text-xl font-semibold text-black dark:text-white" href="#"
                            aria-label="Sawa">Sawa</a>
                    </div>
                    <!-- End Col -->

                    <div class="mt-3">
                        <p class="text-gray-500 dark:text-neutral-500">We're part of the <a
                                class="font-semibold text-blue-600 hover:text-blue-700 dark:text-blue-500 dark:hover:text-blue-400"
                                href="#">Htmlstream</a> family.</p>
                        <p class="text-gray-500 dark:text-neutral-500">© Preline. 2022 Htmlstream. All rights reserved.
                        </p>
                    </div>

                    <!-- Social Sawas -->
                    <div class="mt-3 space-x-2">
                        <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700"
                            href="#">
                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                            </svg>
                        </a>
                        <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700"
                            href="#">
                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </a>
                        <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700"
                            href="#">
                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                            </svg>
                        </a>
                        <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700"
                            href="#">
                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
                            </svg>
                        </a>
                    </div>
                    <!-- End Social Sawas -->
                </div>
                <!-- End Grid -->
            </footer>
            <!-- ========== END FOOTER ========== -->

        </main>

    </div>

</template>

<style></style>
