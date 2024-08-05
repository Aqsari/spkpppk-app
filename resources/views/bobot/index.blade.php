<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="grow-0  object-center mt-9 rounded-md px-20 bg-slate-100">
        <div class="object-center text-center mx-auto max-w-4xl px-4 py-6 sm:px-6 lg:px-8">
            <h4 class="text-2xl font-medium tracking-tight text-gray-900 ">
                Input nilai data perbandingan</h4>
        </div>
        <form action="/bobot.index" method="POST">
            @method('put')
            @csrf
            <div class="relative overflow-y-auto rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right  text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Kriteria</span>
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
                                    {{ $criteria['criteria_name'] }} - {{ $name_criteria[$loop->iteration] }}
                                </th>
                                <td class="px-6 py-4">
                                    <select id="costbenefit" name="costbenefi[{{  $loop->iteration}}]" class="container rounded-md px-9 py-2">
                                        <option class="px-6 py-96" value="benefit"
                                            {{ old('costbenefit', $criteria['costbenefit']) == 'benefit' ? 'selected' : '' }}>
                                            benefit
                                        </option>
                                        <option class="px-6 py-96" value="cost"
                                            {{ old('costbenefit', $criteria['costbenefit']) == 'cost' ? 'selected' : '' }}>
                                            cost
                                        </option>
                                    </select>
                                </td>


                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="grid mt-4 pb-7 justify-center">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
            </div>
        </form>
    </div>
    </div>


</x-layout>
