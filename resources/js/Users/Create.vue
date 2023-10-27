<script setup>
import { ref } from 'vue'

const form = ref({
   identification: null,
   first_name    : '',
   last_name     : '',
   email         : null,
   mobile        : null,
   category      : null,
   observation   : '',
})

const createUser = async () => {
   const response = await axios.post('http://gymapp.test/users', form.value)
   if(response.status == 200) {
      window.location = '/#/users'
   }
}

</script>



<template>
   <!-- General elements -->
   <form 
      class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
      @submit.prevent="createUser">
      <label class="block text-sm mb-6">
         <span class="text-gray-700 dark:text-gray-400">ID Number</span>
         <input v-model="form.identification"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            name="identification" placeholder="ID Number">
      </label>

      <label class="block text-sm mb-6">
         <span class="text-gray-700 dark:text-gray-400">Firts Name</span>
         <input v-model="form.first_name"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            name="first_name" placeholder="First Name">
      </label>

      <label class="block text-sm mb-6">
         <span class="text-gray-700 dark:text-gray-400">Last Name</span>
         <input v-model="form.last_name"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            name="last_name" placeholder="Last Name">
      </label>

      <label class="block text-sm mb-6">
         <span class="text-gray-700 dark:text-gray-400">Email</span>
         <input v-model="form.email" type="email"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            name="email" placeholder="Email">
      </label>

      <label class="block text-sm mb-6">
         <span class="text-gray-700 dark:text-gray-400">Mobile</span>
         <input v-model="form.mobile"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            name="mobile" placeholder="Mobile">
      </label>

      <div class="mt-4 text-sm mb-6">
         <span class="text-gray-700 dark:text-gray-400">
            Category
         </span>
         <div class="mt-2">
            <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
               <input type="radio"
                  class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  :checked="form.category == 'personal'"
                  name="category">
               <span class="ml-2" @click="form.category = 'personal'">Personal</span>
            </label>

            <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
               <input 
                  type="radio"
                  class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  name="category"
                  :checked="form.category == 'business'"
                  @click="form.category = 'business'">
               <span class="ml-2">Business</span>
            </label>
         </div>
      </div>


      <label class="block mt-4 text-sm mb-8">
         <span class="text-gray-700 dark:text-gray-400">Observation</span>
         <textarea v-model="form.observation"
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="3" placeholder="Enter some long form content." name="observation"></textarea>
      </label>

      <hr>

      <div class="flex items-center justify-between mt-8">
         <div>
            <a href="#/users"
               class="px-4 py-2 text-sm font-medium leading-5 text-purple-700 transition-colors duration-150 border border-purple-400 rounded-lg bg-gray-100 active:bg-purple-600 hover:bg-purple-700 hover:text-white focus:outline-none focus:shadow-outline-purple">
               Cancel
            </a>
         </div>

         <div>
            <button
               type="submit"
               class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
               Add User
            </button>
         </div>
      </div>

   </form>
</template>