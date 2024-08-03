<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $slot }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="w-fit">
    <div class="min-h-fit">
        <x-header></x-header>
        <main>
            <div class="grid grid-cols-6 mt-12">
                <div class="h-full  my-12 pb-2">
                    <x-sidebar></x-sidebar>
                </div>
                <div class="col-span-5 bg-green-200 py-10">

                  {{ $slot }}

                </div>
            </div>
        </main>
    </div>
    <x-footer></x-footer>
</body>

</html>
