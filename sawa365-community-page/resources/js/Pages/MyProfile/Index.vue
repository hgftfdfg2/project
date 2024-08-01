<template>

  <Head title="My Profile" />

  <AuthenticatedLayout>
    <div class="pt-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            <div
              class="relative h-40 rounded-t-xl bg-[url('https://preline.co/assets/svg/examples/abstract-bg-1.svg')] bg-no-repeat bg-cover bg-center">
              <div class="absolute top-0 end-0 p-4">
                <button type="button"
                  class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                    <polyline points="17 8 12 3 7 8" />
                    <line x1="12" x2="12" y1="3" y2="15" />
                  </svg>
                  Upload header
                </button>
              </div>
            </div>
            <!-- Grid -->
            <div class="space-y-4 sm:space-y-6">
              <div class="mt-3 grid sm:flex sm:items-center sm:gap-x-5">
                <img
                  class="-mt-8 relative z-10 inline-block size-24 mx-auto sm:mx-0 rounded-full ring-4 ring-white dark:ring-neutral-900"
                  src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                  alt="Image Description">

                <div class="sm:mt-auto sm:mb-1.5 flex flex-col justify-center sm:justify-start gap-2">
                  <div>
                    <h2 class="text-xl font-bold">{{ $page.props.auth.user.fname + " " + $page.props.auth.user.lname
                      }}
                    </h2>
                  </div>
                  <div>
                    <p>city,country</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6 flex justify-end">
      <button class="bg-blue-700 rounded-lg p-2 text-white">
        <a href="#">Recent Activity</a>
      </button>
    </div>


    <div>
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">

            <!-- Icon Blocks -->
            <div class="mx-auto grid sm:grid-cols-2 items-start content-start justify-start gap-4 md:gap-4">
              <!-- first col -->
              <div>
                <!-- Portofolio Card -->
                <div
                  class="size-full my-2 bg-white shadow-sm border-solid border-2 border-neutral-100 rounded-lg p-5 dark:bg-neutral-900">
                  <div class="flex items-center gap-x-4 mb-3">
                    <div
                      class="inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                      <svg class="flex-shrink-0 size-6 text-blue-600 dark:text-blue-400"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="13.5" cy="6.5" r=".5" />
                        <circle cx="17.5" cy="10.5" r=".5" />
                        <circle cx="8.5" cy="7.5" r=".5" />
                        <circle cx="6.5" cy="12.5" r=".5" />
                        <path
                          d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z" />
                      </svg>
                    </div>
                    <div class="flex-shrink-0">
                      <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">Portfolio</h3>
                    </div>
                  </div>
                  <p class="text-gray-600 dark:text-neutral-400">Your portfolio is empty!
                    Start sharing your content/work with others.</p>
                  <div class="flex justify-end">
                    <button class="bg-blue-700 rounded-lg p-2 mt-1 text-white">
                      <a> Portofolio </a>
                    </button>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Edu Card -->
                <div
                  class="size-full my-2 bg-white shadow-sm border-solid border-2 border-neutral-100 rounded-lg p-5 dark:bg-neutral-900">
                  <div class="flex items-center gap-x-4 mb-3">
                    <div
                      class="inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                      <svg class="flex-shrink-0 size-6 text-blue-600 dark:text-blue-400"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path
                          d="M16.466 7.5C15.643 4.237 13.952 2 12 2 9.239 2 7 6.477 7 12s2.239 10 5 10c.342 0 .677-.069 1-.2" />
                        <path d="m15.194 13.707 3.814 1.86-1.86 3.814" />
                        <path
                          d="M19 15.57c-1.804.885-4.274 1.43-7 1.43-5.523 0-10-2.239-10-5s4.477-5 10-5c4.838 0 8.873 1.718 9.8 4" />
                      </svg>
                    </div>
                    <div class="flex-shrink-0">
                      <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">Education</h3>
                    </div>
                  </div>
                  <p class="text-gray-600 dark:text-neutral-400">
                    This section is empty
                    Add an education to your profile
                  </p>
                  <div class="flex justify-end">
                    <button class="text-blue-400  rounded-lg p-2 mt-1">
                      <a class="underline decoration-2 decoration-blue-400"> Edit </a>
                    </button>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Experience Card -->
                <div
                  class="size-full my-2 bg-white shadow-sm border-solid border-2 border-neutral-100 rounded-lg p-5 dark:bg-neutral-900">
                  <div class="flex items-center gap-x-4 mb-3">
                    <div
                      class="inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                      <svg class="flex-shrink-0 size-6 text-blue-600 dark:text-blue-400"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path
                          d="M8.3 10a.7.7 0 0 1-.626-1.079L11.4 3a.7.7 0 0 1 1.198-.043L16.3 8.9a.7.7 0 0 1-.572 1.1Z" />
                        <rect x="3" y="14" width="7" height="7" rx="1" />
                        <circle cx="17.5" cy="17.5" r="3.5" />
                      </svg>
                    </div>
                    <div class="flex-shrink-0">
                      <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">Experience</h3>
                    </div>
                  </div>
                  <p class="text-gray-600 dark:text-neutral-400">
                    This section is empty
                    Add an experience to your profile
                  </p>
                  <div class="flex justify-end">
                    <button class="text-blue-400  rounded-lg p-2 mt-1">
                      <a class="underline decoration-2 decoration-blue-400"> Edit </a>
                    </button>
                  </div>
                </div>
                <!-- End Card -->
              </div>

              <!-- second col -->
              <div>
                <!--About Card -->
                <div
                  class="size-full my-2 bg-white shadow-sm border-solid border-2 border-neutral-100 rounded-lg p-5 dark:bg-neutral-900">
                  <div class="flex items-center gap-x-4 mb-3">
                    <div
                      class="inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                      <svg class="flex-shrink-0 size-6 text-blue-600 dark:text-blue-400"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5.5 8.5 9 12l-3.5 3.5L2 12l3.5-3.5Z" />
                        <path d="m12 2 3.5 3.5L12 9 8.5 5.5 12 2Z" />
                        <path d="M18.5 8.5 22 12l-3.5 3.5L15 12l3.5-3.5Z" />
                        <path d="m12 15 3.5 3.5L12 22l-3.5-3.5L12 15Z" />
                      </svg>
                    </div>
                    <div class="flex-shrink-0">
                      <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">About</h3>
                    </div>
                  </div>
                  <p class="text-gray-600 dark:text-neutral-400">
                    feel free to talk about your self !
                  </p>
                  <div class="flex justify-end">
                    <button class="text-blue-400  rounded-lg p-2 mt-1">
                      <a class="underline decoration-2 decoration-blue-400"> Edit </a>
                    </button>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Contact Card -->
                <div
                  class="size-full my-2 bg-white shadow-sm border-solid border-2 border-neutral-100 rounded-lg p-5 dark:bg-neutral-900">
                  <div class="flex items-center gap-x-4 mb-3">
                    <div
                      class="inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                      <svg class="flex-shrink-0 size-6 text-blue-600 dark:text-blue-400"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2 3h20" />
                        <path d="M21 3v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3" />
                        <path d="m7 21 5-5 5 5" />
                      </svg>
                    </div>
                    <div class="flex-shrink-0">
                      <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">Contact</h3>
                    </div>
                  </div>
                  <div class="divide-y-2 flex flex-col justify-start gap-3">
                    <div>
                      <h3 class="font-bold">Email</h3>
                      <p class="text-gray-600 dark:text-neutral-400">Nour@email.com</p>
                    </div>
                    <div>
                      <h3 class="font-bold">Phone</h3>
                      <p class="text-gray-600 dark:text-neutral-400">010233445</p>
                    </div>
                    <div>
                      <h3 class="font-bold">Address</h3>
                      <p class="text-gray-600 dark:text-neutral-400">city,country</p>
                    </div>
                  </div>
                  <div class="flex justify-end">
                    <button class="text-blue-400  rounded-lg p-2 mt-1">
                      <a class="underline decoration-2 decoration-blue-400"> Edit </a>
                    </button>
                  </div>
                </div>
                <!-- End Card -->

                <!--Grop Card -->
                <div
                  class="size-full my-2 bg-white shadow-sm border-solid border-2 border-neutral-100 rounded-lg p-5 dark:bg-neutral-900">
                  <div class="flex items-center gap-x-4 mb-3">
                    <div
                      class="inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                      <svg class="flex-shrink-0 size-6 text-blue-600 dark:text-blue-400"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7" />
                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                        <path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4" />
                        <path d="M2 7h20" />
                        <path
                          d="M22 7v3a2 2 0 0 1-2 2v0a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 12v0a2 2 0 0 1-2-2V7" />
                      </svg>
                    </div>
                    <div class="flex-shrink-0">
                      <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">Groups</h3>
                    </div>
                  </div>

                  <a class="group rounded-xl overflow-hidden" href="#">
                    <div class="sm:flex">
                      <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-40 h-40">
                        <img
                          class="group-hover:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover rounded-xl"
                          src="https://images.unsplash.com/photo-1668906093328-99601a1aa584?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=986&q=80"
                          alt="Image Description">
                      </div>

                      <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0">
                        <h3
                          class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                          France
                        </h3>
                        <p class="mt-3 text-gray-600 dark:text-neutral-400">
                          129 members · France
                        </p>
                        <p
                          class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium">
                          go to group
                          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Card -->
              </div>
            </div>
            <!-- End Icon Blocks -->

          </div>
        </div>
      </div>
    </div>

  </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Modal from '@/Components/Modal.vue';
export default {
  components: {
    AuthenticatedLayout,
    Head,
    Modal
  },
  data() {
    return {
      
    }
  },
  methods: {
    
  }

}
</script>

<style></style>