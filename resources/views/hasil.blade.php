<x-layout>

    {{-- subtitle dan buttom atas --}}
    <div class="flex flex-row place-items-end">
        <div class="basis-3/4"> <x-subtitle>{{ $title }}</x-subtitle></div>
        <div class="basis-1/4  mx-2 mb-12">
            <button type="button"
                class="px-12 mx-20  items-center py-2  text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                Export
            </button>
        </div>
    </div>


    <div class="flex flex-row " x-data="{ isOpen: false }">
        {{-- table hasil --}}
        <div class="basis-3/4 overflow-x-auto rounded-lg mx-4">
            <table class="w-full text-sm text-left rtl:text-right  text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Rank
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kriteria 1
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kriteria 2
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kriteria 3
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kriteria 4
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $result)
                        <tr class="bg-white border-b  hover:bg-gray-50">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{ $result['id'] }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $result['name'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $result['criteria1'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $result['criteria2'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $result['criteria3'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $result['criteria4'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $result['status'] }}
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        {{-- filter --}}

        <div class="basis-1/4 rounded-md bg-slate-50">


            <div class="bg-white p-6 rounded-lg shadow-lg w-80">
                <h3 class="text-lg font-medium mb-4 text-center">Filter</h3>
                <form action="/filter-results" method="GET">
                    <div class="mb-4">
                        <label for="jumlah-jabatan" class="block text-gray-700">Jumlah Jabatan</label>
                        <input type="number" id="jumlah-jabatan" name="jumlah_jabatan" value="999"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>


                    <div class="mb-4">
                        <label for="jurusan-pendidikan" class="block text-gray-700">Jurusan Pendidikan</label>
                        <select id="jurusan-pendidikan" name="jurusan_pendidikan"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach ($values as $item)
                                <option value="{{ $item->value }}">{{ $item->value_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit"
                        class="w-full py-2 px-4 border border-transparent rounded-full shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Terapkan</button>
                </form>
            </div>
            {{-- drop down 1 --}}


        </div>
    </div>
</x-layout>
