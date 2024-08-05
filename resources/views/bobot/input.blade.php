<x-layout >
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="grow-0  object-center mt-9 rounded-md px-20 bg-slate-100">
        <div class="object-center text-center mx-auto max-w-4xl px-4 py-6 sm:px-6 lg:px-8">
            <h4 class="text-2xl font-medium tracking-tight text-gray-900 ">
                Input nilai data perbandingan</h4>
        </div>
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
                      @for ($i=0;$i<6;$i++)
                       <tr>
                        <td class="px-4 py-2 border-b">Kriteria {{ $dataMap[$i][0] }} - {{ $criteria[$dataMap[$i][0]] }}</td>
                        <td class="px-4 py-2 border-b">
                            <select name="dataStore[{{ $i }}]" class="form-control">
                                
                        @foreach ($compair as $value => $label)
                        <option value="{{ $value }}"
                        
                        
                        @if ($showData[$i]==$value)
                        selected
                        
                        @endif
                        >{{ $value }} - {{ $label  }}</option>
                        
                    @endforeach
                            </select>
                            </td>
                        <td class="px-4 py-2 border-b">Kriteria {{ $dataMap[$i][1] }} - {{ $criteria[$dataMap[$i][1]] }}</td>
                    </tr>
                    @endfor
                     
                    </tbody>
                </table>
            </div>
            <div class="grid mt-4 pb-7 justify-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>


</x-layout>
