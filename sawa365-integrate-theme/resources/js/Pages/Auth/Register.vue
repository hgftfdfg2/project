<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';
import axios from 'axios';

const countries = ref([]);
const states = ref([]);
const nationalities = ref([]);

const form = useForm({
    fname: '',
    lname: '',
    email: '',
    password: '',
    password_confirmation: '',
    phone_number: '',
    birth_date: '',
    nationality: '',
    state_id: '',
    address: ''
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
const fetchNationalitiy = async () => {
    axios.get(route('json.nationalities')).then((response) => {
        nationalities.value = response.data.nationalities;
        // console.log(nationalities)
    })
}
const fetchCountries = async () => {
    axios.get(route('json.countries')).then((response) => {
        countries.value = response.data;
        // console.log(countries)
    })
}
const fetchStates = async () => {
    axios.get(route('json.countries.states')).then((response) => {
        states.value = response.data;
        console.log(states)
    })
}

onMounted(fetchNationalitiy);
onMounted(fetchCountries);
onMounted(fetchStates);

</script>

<template>
    <GuestLayout>

        <Head title="Register" />

        <form @submit.prevent="submit">
            <!-- first name -->
            <div>
                <InputLabel for="fname" value="First Name" />

                <TextInput id="fname" type="text" class="mt-1 block w-full" v-model="form.fname" required autofocus />

                <InputError class="mt-2" :message="form.errors.fname" />
            </div>

            <!-- last name -->
            <div class="mt-4">
                <InputLabel for="lname" value="Last Name" />

                <TextInput id="lname" type="text" class="mt-1 block w-full" v-model="form.lname" required autofocus />

                <InputError class="mt-2" :message="form.errors.lname" />
            </div>

            <!-- email -->
            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required
                    autocomplete="username" />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <!-- password -->
            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required
                    autocomplete="new-password" />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <!-- comfirm password -->
            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput id="password_confirmation" type="password" class="mt-1 block w-full"
                    v-model="form.password_confirmation" required autocomplete="new-password" />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <!-- phone_number -->
            <div class="mt-4">
                <InputLabel for="phone" value="Phone Number" />

                <TextInput id="phone" type="text" class="mt-1 block w-full" v-model="form.phone_number" required
                    autofocus />

                <InputError class="mt-2" :message="form.errors.phone_number" />
            </div>

            <!-- birth_date -->
            <div class="mt-4">
                <InputLabel for="BD" value="Birth Date" />

                <TextInput id="BD" type="date" class="mt-1 block w-full" v-model="form.birth_date" required autofocus />

                <InputError class="mt-2" :message="form.errors.birth_date" />
            </div>

            <!-- nationality -->
            <div class="mt-4">
                <InputLabel for="nationality" value="Nationality" />

                <select v-model="form.nationality" id="nationality"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                    <option v-for="(nationality, index) in nationalities" :key="index" :value="nationality">
                        {{ nationality }}
                    </option>
                </select>

                <InputError class="mt-2" :message="form.errors.nationality" />
            </div>

            <!-- country_of_residence -->
            <!-- <div class="mt-4">
                <InputLabel for="country_of_residence" value="Country of Residence" />

                <select v-model="form.country_of_residence" id="country_of_residence"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                    <option v-for="country in countries" :key="country.code" :value="country.name">
                        {{ country.name + " (" + country.code + ")" }}
                    </option>
                </select>

                <InputError class="mt-2" :message="form.errors.country_of_residence" />
            </div> -->

            <!-- country_of_residence -->
            <div class="mt-4">
                <InputLabel for="state" value="State of residence" />

                <select v-model="form.state_id" id="state"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                    <option v-for="state in states" :key="state.id" :value="state.id">
                        {{ state.name  }}
                    </option>
                </select>

                <InputError class="mt-2" :message="form.errors.state_id" />
            </div>

            <!-- address -->
            <div class="mt-4">
                <InputLabel for="address" value="Address" />

                <TextInput id="address" type="text" class="mt-1 block w-full" v-model="form.address" required
                    autofocus />

                <InputError class="mt-2" :message="form.errors.address" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Already registered?
                </Link>

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
