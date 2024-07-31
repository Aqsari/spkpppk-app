<x-layout>
    

<div class="flex flex-row place-items-end  rounded-md "  ">

    <div class="basis-3/4"> <x-subtitle>{{ $title }}</x-subtitle></div>
   <div class="basis-1/4 inline-flex mx-4 mb-12"> 
    <button type="button" class="px-4 py-2  text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
    Input Data
  </button>
    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
      Inport Data Excel
    </button>
</div>
  </div>
  
<div class="relative overflow-x-auto rounded-lg mx-16">
    <table class="w-full text-sm text-left rtl:text-right  text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
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
                    <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Delete</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $datas as $data)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $data['id'] }}
                </th>
                <td class="px-6 py-4">
                    {{ $data['name'] }}
                </td>
                <td class="px-6 py-4">
                    {{ $data['data1'] }}
                </td>
                <td class="px-6 py-4">
                    {{ $data['data2'] }}
                </td>
                <td class="px-6 py-4">
                    {{ $data['data3'] }}
                </td>
                <td class="px-6 py-4">
                    {{ $data['data4'] }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                </td>
            </tr>
            @endforeach
          
        </tbody>
    </table>
</div>

</x-layout>