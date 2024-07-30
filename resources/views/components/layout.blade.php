<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">
<div class="min-h-full">
       <x-header></x-header>
    <main>
      <div class="flex">
      <x-sidebar></x-sidebar>
      <div class="flex-grow mt-12 bg-green-200">
        <div class="p-4">
          
          {{ $slot }}
        </div>
     </div>
      </div>
    </main>
  </div>
  <x-footer></x-footer>
</body>
</html>