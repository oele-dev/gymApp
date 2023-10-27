<!DOCTYPE html>
    <html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GymApp - @yield('title')</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body id="app">
  </body>
</html>
