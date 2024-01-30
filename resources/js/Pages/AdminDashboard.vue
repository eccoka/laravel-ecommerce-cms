<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="AdminDashboard" />
    <AdminLayout>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-5 text-gray-900">You're logged in as Admin!</div>
                </div>

    </AdminLayout>
</template>
