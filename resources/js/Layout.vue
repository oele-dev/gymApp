<script setup>
import Sidebar from './Sidebar.vue'
import Navbar from './Navbar.vue'

</script>

<template>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': false }"
    >

      <sidebar />
      <div class="flex flex-col flex-1 w-full">
        <navbar />
        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
            Title
            </h2>
            <slot></slot> <!-- slot outlet -->
          </div>
        </main>
      </div>
    </div>
</template>