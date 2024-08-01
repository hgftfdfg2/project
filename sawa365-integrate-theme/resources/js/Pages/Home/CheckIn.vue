<template>
    <Modal :show="isShow" @close="cancelDlg()">

        <template #title>
            Share Your Check-in
        </template>

        <template #content>
            <!-- Form -->
            <form>
                <div class="px-2 sm:px-4">
                    <!-- Form Group -->
                    <div>
                        <div class="size-full my-2 bg-white dark:bg-neutral-900 ">
                            <div class="flex flex-col sm:flex-row justify-center sm:justify-start gap-5">
                                <div class="block sm:inline">
                                    <div class="flex justify-center">
                                        <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                            class="rounded-full w-fit  size-14" />
                                    </div>
                                </div>
                                <form class="w-full h-full">
                                    <textarea placeholder="Write a message about your check in..."
                                        class="w-full h-fullborder-solid border-1 border-neutral-300 rounded-lg"></textarea>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- form group -->
                    <div class="grid sm:grid-cols-1 sm:gap-2">
                        <div class="flex flex-col">
                            <div class="flex flex-col my-3">
                                <label class="">Location</label>
                                <div>
                                    <i class="fa-solid fa-location-dot absolute m-2 text-lg text-neutral-400"></i>
                                    <input type="text" class="border-1 border-neutral-300 px-8 rounded-lg w-full" />
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <!-- <div class="flex flex-col my-3">
                                <label class="">Location</label>
                                <div>
                                    <i class="fa-solid fa-location-dot absolute m-2 text-lg text-neutral-400"></i>
                                    <input type="text" class="border-1 border-neutral-300 px-8 rounded-lg w-full" />
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- end form group -->

                    <div class="flex justify-center items-center gap-x-2 text-sm font-semibold ">
                        <button type="submit"
                            class="py-3 px-4 rounded-lg border border-transparent
                             bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Submit
                        </button>

                    </div>
                </div>
            </form>
            <!-- End Form -->

        </template>



    </Modal>
</template>

<script>
import Modal from '@/Components/Modal.vue';
export default {
    components: {
        Modal,
    },
    data() {
        return {
            isShow: false
        }
    },
    props: {

    },
    methods: {
        showDlg() {
            this.isShow = true
        },
        cancelDlg() {
            this.isShow = false
        }
    }

}
</script>

<style></style>