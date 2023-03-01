<!DOCTYPE html>
<html class="h-full" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>
  <body class="h-full">
    <header class="bg-red-800 text-white items-center justify-center flex flex-col h-20 md:h-40 px-2 py-2">
      <h1 class="text-lg sm:text-2xl md:text-3xl ">Gestionnaire clients - factures</h1>
    </header>
    <main>
      @yield('content')
    </main>
  </body>
</html>
