<x-layout>
    <x-subtitle>{{ $title }}</x-subtitle>

    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- progress bar --}}
    <div class="flex-col justify-center  my-5">
        <div class="flex bg-gray-200 rounded-full h-2.5 mx-9">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 5%"></div>
        </div>
        <div class="-mt-8">
            <ol class="flex items-center mx-9  sm:mb-5">
                <li class="flex w-full items-center text-teal-800">
                    <div class="flex items-center justify-center w-10 h-10 bg-teal-600 rounded-full lg:h-12 lg:w-12 ">
                        <svg class="w-4 h-4 text-teal-600 lg:w-6 lg:h-6 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 20 16">
                            <path
                                d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z" />
                        </svg>
                    </div>
                </li>
                <li class="flex w-full items-center">
                    <div class="flex w-full justify-between">
                        <div
                            class="flex items-center justify-center w-10 h-10 bg-teal-600 rounded-full lg:h-12 lg:w-12 ">
                            <svg class="w-4 h-4 text-gray-100 lg:w-6 lg:h-6" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                <path
                                    d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM2 12V6h16v6H2Z" />
                                <path d="M6 8H4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Zm8 0H9a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2Z" />
                            </svg>
                        </div>
                        <div
                            class="flex items-center justify-center w-10 h-10 bg-teal-600 rounded-full lg:h-12 lg:w-12 ">
                            <svg class="w-4 h-4 text-gray-100 lg:w-6 lg:h-6" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path
                                    d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z" />
                            </svg>
                        </div>
                    </div>
                </li>

            </ol>
        </div>

    </div>

    {{-- Button untuk pindah --}}
    <div class="grid    rounded-md">

        <div class="grid justify-between grid-flow-col mx-4 mb-10 ">
            <a href="/calculation.hitung"
                class="px-4 py-2  text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg  ">
                Hitung
            </a>
            <a href="/calculation.alternatifvalue"
                class="px-4 py-2  text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg ">
                Selanjutnya
            </a>
        </div>


        <div class="flex flex-grow justify-between">
            {{-- Table  satu --}}
            <div class="container bg-purple-500 w-6/12 overflow-auto border-solid rounded-md my-8">
                <table class="w-full text-sm text-left text-gray-500 ">
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

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tablesatu as $data)
                            <tr class="bg-white border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dar">
                                    {{ $data->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $data->criteria1 }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->criteria2 }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->criteria3 }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->criteria4 }}
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            {{-- Table  tiga --}}
            <div class="flex overflow-auto rounded-lg  h-fit my-8">
                <table class="w-full text-sm text-left rtl:text-right  text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only"></span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nilai
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tabletiga as $data)
                            <tr class="bg-white border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dar">
                                    {{ $data->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $data->value }}
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex items-baseline justify-start lg:w-2/12 ">
                <p
                    class="px-5 py-5  my-7 text-4xl text-center justify-center font-bold text-gray-900 bg-white  rounded-lg ">
                    {{ $konsistensiData }}
                </p>
            </div>
        </div>

        {{-- table dua --}}
        {{-- Table  --}}
        <div class="flex overflow-y-auto rounded-lg my-8">
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
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Prioritas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Eigen Value
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($tabledua as $data)
                        <tr class="bg-white border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dar">
                                {{ $data['name'] }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $data['criteria1'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data['criteria2'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data['criteria3'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data['criteria4'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data['jumlah'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data['prioritas'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data['eigenvalue'] }}
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

</x-layout>
