<script setup xmlns="http://www.w3.org/1999/html">
import { ref } from 'vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";

const form = useForm({
    username: '',
    email: '',
    password: '',
    password_confirmation: '',
    newsletter: 0,
    role: '',
});
const submit = () => {
    form.post(route('admin.userreg'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

</script>
<template>
    <div class="min-h-screen flex flex-col  items-center sm:pt-4 bg-gray-100">
        <Head title="Register" />
        <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form @submit.prevent="submit">
                <div class="mt-4">
                    <InputLabel for="username" value="Username" />

                    <TextInput
                        id="username"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.username"
                        required
                        autofocus
                        autocomplete="username"
                    />

                    <InputError class="mt-2" :message="form.errors.username" />
                </div>

                <div class="mt-4">
                    <InputLabel for="email" value="Email" />

                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full"
                        v-model="form.email"
                        required
                        autocomplete="email"
                    />

                    <InputError class="mt-2" :message="form.errors.email" />
                </div>
    <!--            <Chart points="{!! json_encode($page.props.roles) !!}"></Chart>-->
                <div class="mt-4">
                    <InputLabel for="role" value="Role" />

                    <select
                        id="role"
                        type="text"
                        class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        v-model="form.role"
                        required
                    >
                        <option v-for="role in $page.props.roles" :value="role['role']">{{role['role']}}</option>
                    </select>
                </div>

                <div class="mt-4">
                    <InputLabel for="password" value="Password" />

                    <TextInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password"
                        required
                        autocomplete="new-password"
                    />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="mt-4">
                    <InputLabel for="password_confirmation" value="Confirm Password" />

                    <TextInput
                        id="password_confirmation"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password_confirmation"
                        required
                        autocomplete="new-password"
                    />

                    <InputError class="mt-2" :message="form.errors.password_confirmation" />
                </div>

                <div class="flex items-center justify-end mt-4">


                    <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Register
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </div>
</template>

