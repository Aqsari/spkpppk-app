<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparisons</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Comparisons</h1>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form action="/comparisons" method="POST">
            @csrf
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b">Nama Kriteria</th>
                            <th class="px-4 py-2 border-b">Nilai Perbandingan</th>
                            <th class="px-4 py-2 border-b">Nama Kriteria</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($criteria as $key1 => $name1)
                            @foreach ($criteria as $key2 => $name2)
                                @if ($key1 !== $key2)
                                    <tr>
                                        <td class="px-4 py-2 border-b">{{ $key1 }} - {{ $name1 }}</td>
                                        <td class="px-4 py-2 border-b">
                                            <select name="comparisons[{{ $key1 }}][{{ $key2 }}]" class="form-control">
                                                @foreach ($comparisons as $value => $label)
                                                    <option value="{{ $value }}">{{ $label }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="px-4 py-2 border-b">{{ $key2 }} - {{ $name2 }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                <button type="reset" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Reset Nilai</button>
            </div>
        </form>
    </div>
</body>
</html>

