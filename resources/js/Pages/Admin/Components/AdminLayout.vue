<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <!-- Navbar Start -->
        <Navbar />
        <!-- Navbar End -->
        <!-- Sidebar -->
        <Sidebar />
        <!-- Sidebar End -->

        <slot></slot>
    </div>
</template>

<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Sidebar from './Sidebar.vue'
import Navbar from './Navbar.vue'


onMounted(() => {
    initFlowbite();
})
</script>
