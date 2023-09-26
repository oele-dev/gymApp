@extends('shared.layout')
 
@section('title', 'List users')
 
@section('content')
<!-- Actions -->
<div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
    <!-- Search input -->
    <div class="w-1/2 mb-4 md:mb-0">
        <form
        method="GET"
        action="/users"
        class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
        >
        <div class="absolute inset-y-0 flex items-center pl-2">
            <svg
            class="w-4 h-4"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
            >
            <path
                fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"
            ></path>
            </svg>
        </div>
        <input
            class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
            placeholder="Search for users"
            aria-label="Search"
            type="search"
            name="search"
            value="{{ $search }}"
        />
        </form>
    </div>
    <!-- buttons -->
    <div class="flex flex-col flex-wrap mb-8 space-y-4 md:flex-row md:items-end md:space-x-4">              
        <div>
        <a href="/users/create" class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20">
            <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
            <span>Add User</span>
        </a>
        </div>
    </div>
</div>

<!-- New Table -->
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
        <thead>
            <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
            >
                <th class="px-4 py-3">ID Number
                </th>
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">Email</th>
                <th class="px-4 py-3">Mobile</th>
                <th class="px-4 py-3">Category</th>
                <th class="px-4 py-3">Action</th>
            </tr>
        </thead>
        <tbody
        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
        >
        @foreach($users as $user)
            <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">{{ $user->identification }}</td>
                <td class="px-4 py-3">{{ $user->first_name }} {{ $user->last_name }}</td>
                <td class="px-4 py-3">{{ $user->email }}</td>
                <td class="px-4 py-3">{{ $user->mobile }}</td>
                <td class="px-4 py-3">{{ $user->category }}</td>
                <td class="px-4 py-3">
                    <div class="flex">
                        <a href="/users/edit/{{ $user->id }}" class="w-12 flex items-center justify-center px-2 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-full active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple mr-2" aria-label="Edit">
                            @include('shared.icons.edit')
                        </a>
                        <form action="/users/{{ $user->id }}" method="POST"
                        onsubmit="return confirm('Do you really want to delete this user?');">
                            @method('DELETE')
                            @csrf
                            <button 
                                class="w-12 flex items-center justify-center px-2 py-2 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-full active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                                aria-label="Edit"
                                >
                             @include('shared.icons.trash')
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        @if($users->isEmpty())
        <tr>
            <td colspan="6" class="text-center">
                Users dont exists.
            </td>
        </tr>
        @endif
        </tbody>
    </table>
    </div>
</div>
@endsection