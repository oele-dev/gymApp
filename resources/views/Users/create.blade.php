@extends('shared.layout')
 
@section('title', 'Create user')
 
@section('content')

   <!-- General elements -->
   <form class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" method="POST" action="/users">
      @csrf

      <label class="block text-sm mb-6">
         <span class="text-gray-700 dark:text-gray-400">ID Number</span>
         <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="identification" placeholder="ID Number">
      </label>

      <label class="block text-sm mb-6">
         <span class="text-gray-700 dark:text-gray-400">Firts Name</span>
         <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="first_name" placeholder="First Name">
      </label>

      <label class="block text-sm mb-6">
         <span class="text-gray-700 dark:text-gray-400">Last Name</span>
         <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="last_name" placeholder="Last Name">
      </label>

      <label class="block text-sm mb-6">
         <span class="text-gray-700 dark:text-gray-400">Email</span>
         <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="email" placeholder="Email">
      </label>

      <label class="block text-sm mb-6">
         <span class="text-gray-700 dark:text-gray-400">Mobile</span>
         <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="mobile" placeholder="Mobile Numbe">
      </label>

      <div class="mt-4 text-sm mb-6">
         <span class="text-gray-700 dark:text-gray-400">
            Category
         </span>
         <div class="mt-2">
            <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
               <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="category" value="personal">
               <span class="ml-2">Personal</span>
            </label>
            
            <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
               <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="category" value="business">
               <span class="ml-2">Business</span>
            </label>
         </div>
      </div>
      
      
      <label class="block mt-4 text-sm mb-8">
         <span class="text-gray-700 dark:text-gray-400">Observation</span>
         <textarea class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content." name="observation"></textarea>
      </label>

      <hr>

      <div class="flex items-center justify-between mt-8">
         <div>
            <a href="/users" class="px-4 py-2 text-sm font-medium leading-5 text-gray-100 transition-colors duration-150 border border-purple-400 rounded-lg bg-gray-100 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                  Cancel
            </a>
         </div> 

         <div>
            <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Add User
            </button>
         </div>
      </div>

 </form>
@endsection