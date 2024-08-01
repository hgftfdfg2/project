<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">

            <!-- Page Heading -->
            <header class="bg-white shadow ">
                <!-- Logo -->
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between relative">
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

                        <!-- nav -->
                        <!-- Navigation Links -->
                        <div class="hidden space-x-6 lg:-my-px lg:ms-10 lg:flex">
                            <!-- <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                Dashboard
                            </NavLink> -->
                            <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                Home
                            </NavLink>
                            <NavLink :href="route('business.index')" :active="route().current('business.index')">
                                Business
                            </NavLink>
                            <NavLink :href="route('freelance.index')" :active="route().current('freelance.index')">
                                Freelance
                            </NavLink>
                            <NavLink :href="route('forum.index')" :active="route().current('forum.index')">
                                Forums
                            </NavLink>
                            <NavLink :href="route('resources.index')" :active="route().current('resources.index')">
                                Resources
                            </NavLink>
                            <NavLink :href="route('newsletter.index')" :active="route().current('newsletter.index')">
                                Newsletters
                            </NavLink>
                            <NavLink :href="route('groups.index')" :active="route().current('groups.index')">
                                Groups
                            </NavLink>
                            <NavLink :href="route('community.index')" :active="route().current('community.index')">
                                My Community
                            </NavLink>
                        </div>

                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center lg:hidden">
                            <button @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{
                                    hidden: showingNavigationDropdown,
                                    'inline-flex': !showingNavigationDropdown,
                                }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{
                                    hidden: !showingNavigationDropdown,
                                    'inline-flex': showingNavigationDropdown,
                                }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div :class="!showingNavigationDropdown ? 'hidden' : 'inline'"
                            class="transition-all absolute top-full z-50 border border-slate-200 rounded-md bg-white w-full left-0 py-4 duration-[0.1ms] overflow-hidden basis-full grow">
                            <div class="flex flex-col gap-5">
                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    Home
                                </NavLink>
                                <NavLink :href="route('business.index')" :active="route().current('business.index')">
                                    Business
                                </NavLink>
                                <NavLink :href="route('freelance.index')" :active="route().current('freelance.index')">
                                    Freelance
                                </NavLink>
                                <NavLink :href="route('forum.index')" :active="route().current('forum.index')">
                                    Forums
                                </NavLink>
                                <NavLink :href="route('resources.index')" :active="route().current('resources.index')">
                                    Resources
                                </NavLink>
                                <NavLink :href="route('newsletter.index')"
                                    :active="route().current('newsletter.index')">
                                    Newsletters
                                </NavLink>
                                <NavLink :href="route('groups.index')" :active="route().current('groups.index')">
                                    Groups
                                </NavLink>
                                <NavLink :href="route('community.index')" :active="route().current('community.index')">
                                    My Community
                                </NavLink>
                                <hr />
                                <NavLink :href="route('my-profile.index')"> My Profile </NavLink>
                                <NavLink :href="route('profile.edit')"> Settings </NavLink>
                                <NavLink :href="route('logout')" method="post" as="button">
                                    Log Out
                                </NavLink>
                            </div>
                        </div>

                        <!-- endnav -->


                        <div class="hidden lg:flex lg:items-center lg:ms-6">
                            <!-- Settings Dropdown -->
                            <div class="ms-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.fname }}

                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('my-profile.index')"> My Profile </DropdownLink>
                                        <DropdownLink :href="route('profile.edit')"> Settings </DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
