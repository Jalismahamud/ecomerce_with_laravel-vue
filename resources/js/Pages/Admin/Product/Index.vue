<template>
    <AdminLayout>
      <ProductList />
    </AdminLayout>
</template>

<script setup>
import AdminLayout from '../Components/AdminLayout.vue';
import { Link } from '@inertiajs/vue3';
import ProductList from './ProductList.vue';
</script>
