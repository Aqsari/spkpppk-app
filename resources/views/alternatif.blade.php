<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
        <div class="grid place-items-end  rounded-md">
        <form action="{{ route('alternatif.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            {{-- <input type="submit" value="Import"> --}}
            <input type="file" name="file" accept=".xlsx, .xls" class="mb-4">
            <div>
            <button type="submit"
                class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                Import Data Excel
            </button>
            <a href="/alternatif.input" 
                class="px-5 py-2   mr-3 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                Input Data
        </a>
    </div>
        </form>
    </div>
    <div class="container col-span-3 bg-violet-500"> <x-subtitle>{{ $title }}</x-subtitle></div>

    <div class="relative overflow-y-auto rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right  text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Umur
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Lama Honor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jabatan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pendidikan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jurusan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kesesuaian
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Delete</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr
                        class="bg-white border-b  hover:bg-gray-50 ">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data['name'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data['UMUR'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data['LAMA_HONOR'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data['JABATAN'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data['PENDIDIKAN'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data['JURUSAN'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data['criteria_value'] }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="/datapeserta/{{ $data['id'] }}/edit"
                                class="font-medium text-blue-600  hover:underline">Edit</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                           <form action="/datapeserta/{{ $data->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Apakah anda yakin?')"  type="submit" class="font-medium text-blue-600 hover:underline">Delete</button>
                    </td></form>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</x-layout>
