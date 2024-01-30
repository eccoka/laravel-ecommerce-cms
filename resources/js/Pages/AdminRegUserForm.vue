<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import RegFormLayout from "@/Layouts/RegFormLayout.vue";

//    const roles = ref($page.props.roles);

</script>


<template>
    <Head title="AdminRegUser" />
    <AdminLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Registration</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <RegFormLayout>

                        </RegFormLayout>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>

