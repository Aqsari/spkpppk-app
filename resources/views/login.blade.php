<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg flex w-3/4">
        <div class="w-1/2 flex flex-col items-center justify-center border-r">
            <img src="{{ asset('path/to/logo.png') }}" alt="Logo" class="w-32 h-32">
            <h1 class="text-xl font-bold mt-4 text-center">SISTEM PENDUKUNG KEPUTUSAN PENENTUAN PPPK</h1>
            <p class="text-center mt-2">KEMENTERIAN AGAMA KAB. TANAH DATAR</p>
        </div>
        <div class="w-1/2 p-6">
            <h2 class="text-2xl font-bold mb-4">Selamat Datang</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Username</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required class="w-full p-2 border rounded">
                </div>
                <div class="mb-4 flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember" class="text-gray-700">Remember me</label>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
