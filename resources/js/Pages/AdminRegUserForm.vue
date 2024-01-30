<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import RegFormLayout from "@/Layouts/RegFormLayout.vue";

//    const roles = ref($page.props.roles);

</script>


<template>
    <Head title="AdminRegUser" />
    <AdminLayout>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-5 text-gray-900">
                <RegFormLayout>
                </RegFormLayout>
            </div>
        </div>
    </AdminLayout>
</template>

