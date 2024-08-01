<template>

  <Head title="Groups" />

  <AuthenticatedLayout>
    <div class="pt-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            <div
              class="relative h-40 rounded-t-xl bg-[url('https://preline.co/assets/svg/examples/abstract-bg-1.svg')] bg-no-repeat bg-cover bg-center">
            </div>
            <!-- Grid -->
            <div class="space-y-4 sm:space-y-6">
              <div class="mt-3 mx-4 grid sm:flex sm:items-center sm:gap-x-5">
                <img class="-mt-8 relative z-10 inline-block size-24 sm:mx-0  dark:ring-neutral-900"
                  src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/255px-Flag_of_France.svg.png"
                  alt="Image Description">

                <div class="sm:mt-auto sm:mb-1.5 flex flex-col justify-center sm:justify-start gap-2">
                  <div>
                    <h2 class="text-xl font-bold">{{group_info.name}}
                    </h2>
                  </div>
                  <div>
                    <p>10,000 member</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="max-w-7xl sm:mx-auto mx-3 sm:px-6 lg:px-8 py-6 flex justify-end">
      <button class="p-2 my-2 rounded-lg border border-transparent
                             bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
        <a href="#">Joined
          <!-- <svg xmlns="http://www.w3.org/2000/svg"
          class="size-4 inline"
            viewBox="0 0 320 512"><path
              d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
          </svg> -->
        </a>
      </button>
    </div>


    <div>
      <div class="sm:max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">

            <!-- Icon Blocks -->
            <div class="mx-auto grid grid-cols-1 md:grid-cols-3 items-start content-start justify-start gap-4 md:gap-4">
              <!-- second col -->
              <div class="col-span-1 md:hidden block">
                <!--About Card -->
                <div
                  class="size-full my-2 bg-white shadow-sm border-solid border-2 border-neutral-100 rounded-lg p-5 dark:bg-neutral-900">
                  <div class="flex items-center gap-x-4 mb-3">
                    <div class="flex-shrink-0">
                      <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">About</h3>
                    </div>
                  </div>
                  <p class="text-gray-600 dark:text-neutral-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugit ad libero incidunt labore ipsum
                    voluptatem qui quaerat repudiandae, ut id veritatis totam enim nesciunt unde aliquam, consectetur
                    sunt? Hic.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, sint! Dolore sed hic doloribus,
                    officia delectus voluptatum, quo aperiam soluta porro reprehenderit saepe? Quae recusandae
                    accusantium eveniet quas, nisi eius?
                  </p>
                </div>
                <!-- End Card -->
              </div>

              <!-- first col -->
              <div class="md:col-span-2">
                <!-- Portofolio Card -->
                <div
                  class="size-full my-2 bg-white shadow-sm border-solid border-2 border-neutral-100 rounded-lg p-5 dark:bg-neutral-900">
                  <div class="flex flex-col sm:flex-row justify-center sm:justify-start gap-5">
                    <div class="block sm:inline">
                      <div class="flex justify-center">
                        <img
                          src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                          class="rounded-full w-fit  size-14" />
                      </div>
                    </div>
                    <form class="w-full h-full">
                      <textarea type="text" placeholder="write a post"
                        class="w-full h-fullborder-solid border-1 border-neutral-300 rounded-lg">
                                            </textarea>
                      <div class="text-center sm:text-end">
                        <button class="p-2 my-2 rounded-lg border border-transparent
                             bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Publish</button>
                      </div>
                    </form>
                  </div>

                </div>
                <!-- End Card -->

                <!-- links -->
                <div class="flex flex-wrap justify-center sm:justify-start gap-4 text-xl mt-4 mb-2 px-2 py-4">
                  <button type="button"
                    class="underline underline-offset-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">
                    Live feed
                  </button>
                  <button type="button"
                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg text-gray-500 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:text-white/70">
                    News
                  </button>
                  <button type="button"
                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg text-gray-500 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white">
                    Events
                  </button>
                  <button type="button"
                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg text-gray-500 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white">
                    Members
                  </button>
                  <button type="button"
                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg text-gray-500 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white">
                    Media center
                  </button>
                  <button type="button"
                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg text-gray-500 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white">
                    Forums
                  </button>
                </div>
                <!-- end links -->

                <!-- Edu Card -->
                <div
                  class="size-full my-2 bg-white shadow-sm border-solid border-2 border-neutral-100 rounded-lg p-5 dark:bg-neutral-900">

                  <!-- posts -->
                  <div class="d divide-y-2">
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
                <!-- End Card -->
              </div>

              <!-- second col -->
              <div class="md:col-span-1 md:block hidden">
                <!--About Card -->
                <div
                  class="size-full my-2 bg-white shadow-sm border-solid border-2 border-neutral-100 rounded-lg p-5 dark:bg-neutral-900">
                  <div class="flex items-center gap-x-4 mb-3">
                    <div class="flex-shrink-0">
                      <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">About</h3>
                    </div>
                  </div>
                  <p class="text-gray-600 dark:text-neutral-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugit ad libero incidunt labore ipsum
                    voluptatem qui quaerat repudiandae, ut id veritatis totam enim nesciunt unde aliquam, consectetur
                    sunt? Hic.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, sint! Dolore sed hic doloribus,
                    officia delectus voluptatum, quo aperiam soluta porro reprehenderit saepe? Quae recusandae
                    accusantium eveniet quas, nisi eius?
                  </p>
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
import Post from '@/Components/Post.vue';
export default {
  components: {
    AuthenticatedLayout,
    Head,
    Modal,
    Post
  },
  props:['group_info'],
  data() {
    return {

    }
  },
  methods: {

  },
  created() {
    console.log(this.group_info)
  }

}
</script>

<style></style>