<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="flex flex-row place-items-end  rounded-md " ">

        <div class="basis-3/4"> <x-subtitle>{{ $title }}</x-subtitle></div>
       <div class="basis-1/4 inline-flex mx-4 mb-12">
        <button type="button" class="px-4 py-2  text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
        Tambah Kriteria
      </button>
    </div>
      </div>
    </div>
    <div class="relative overflow-x-auto rounded-lg mx-16">
        <table class="w-full text-sm text-left rtl:text-right  text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only"></span>
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
                        Cost/Benefit
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $criterias as $criteria)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $criteria['criteria_name'] }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $criteria['criteria1'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $criteria['criteria1'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $criteria['criteria1'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $criteria['criteria1'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $criteria['criteria_type'] }}
                    </td>
                </tr>
                @endforeach
              
            </tbody>
        </table>
    </div>
</x-layout>