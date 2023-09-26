<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    @include('shared.head')
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >

     @include('shared.sidebar')
      <div class="flex flex-col flex-1 w-full">
        @include('shared.navbar')
        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
            @yield('title')
            </h2>
            @yield('content')
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
