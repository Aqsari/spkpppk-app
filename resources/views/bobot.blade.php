<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="grid grid-cols-4  place-items-end  rounded-md">
        <div class="container col-span-3 "> <x-subtitle>{{ $title }}</x-subtitle></div>
        <div class="grid grid-flow-col mx-4 mb-12 gap-3">
        <a href="/bobot.index" class="px-4 py-2  text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
        Edit Cost / Benefit
        </a>
        <a href="/comparisons" class="px-4 py-2  text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
            Input Nilai
            </a>
    </div>
      </div>
    
      <div class="relative overflow-y-auto rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right  text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
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
                 @foreach ($criterias as $criteria)
        <tr class="bg-white border-b ">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dar">
                {{ $criteria['criteria_name'] }}
            </th>
            <td class="px-6 py-4">
                {{ $criteria['criteria1'] }}
            </td>
            <td class="px-6 py-4">
                {{ $criteria['criteria2'] }}
            </td>
            <td class="px-6 py-4">
                {{ $criteria['criteria3'] }}
            </td>
            <td class="px-6 py-4">
                {{ $criteria['criteria4'] }}
            </td>
            <td class="px-6 py-4">
                {{ $criteria['costbenefit'] }}
            </td>
            
        </tr>
        @endforeach

        </tbody>
        </table>
    </div>
</x-layout>
