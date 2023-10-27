<script setup>
import { ref, computed } from 'vue'

import Layout from './Layout.vue'
import HoursIndex from './Hours/Index.vue'
import ServicesIndex from './Services/Index.vue'
import SubscriptionsIndex from './Subscriptions/Index.vue'
import UsersIndex from './Users/Index.vue'
import UsersCreate from './Users/Create.vue'

const routes = {
  '/hours'        : HoursIndex,
  '/services'     : ServicesIndex,
  '/subscriptions': SubscriptionsIndex,
  '/users'        : UsersIndex,
  '/users/create' : UsersCreate,
  '/'             : UsersIndex
}


const currentPath = ref(window.location.hash)

window.addEventListener('hashchange', () => {
  currentPath.value = window.location.hash
})

const currentView = computed(() => {
  return routes[currentPath.value.slice(1) || '/'] || NotFound
})
</script>

<template>
  <layout>
    <component :is="currentView" />
  </layout>
</template>

<style scoped>
button {
  font-weight: bold;
}
</style>