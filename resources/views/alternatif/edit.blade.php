<x-layout>
    <x-slot:title>{{ 'Edit Alternatif' }}</x-slot:title>
    <div class="grid">
        {{-- <x-subtitle>{{ $title }}</x-subtitle> --}}

        <form action="/alternatif/{{ $data->id  }}/edit" method="POST">
            @method('put')
            @csrf
            <div class="flex" x-data="{ isOpen: false }">
                <div class="grow "></div>
                <div class="grow-0 w-2/4 object-center mt-9 rounded-md px-20 bg-slate-100">
                    <div class="object-center text-center mx-auto max-w-4xl px-4 py-6 sm:px-6 lg:px-8">
                        <h4 class="text-2xl font-medium tracking-tight text-gray-900 ">Edit data</h4>
                        <p>{{ $data->id }}</p>
                        <p>{{ $data->name }}</p>
                        <p>{{ $data->data1 }}</p>
                        <p>{{ $data->data2 }}</p>
                        <p>{{ $data->data3 }}</p>
                        <p>{{ $data->data4 }}</p>
                    </div>
                    <div class="mt-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama</label>
                        <input type="text" id="name" name="name" required autofocus
                            value="{{ old('name') ?? $data->name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        @error('name')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-6">
                        <label for="data1" class="block mb-2 text-sm font-medium text-gray-900 ">Kriteria
                            1</label>
                        <input type="text" id="data1" name="data1" required autofocus
                            value="{{ old('data1') ?? $data->data1 }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>
                    <div class="mt-6">
                        <label for="data2" class="block mb-2 text-sm font-medium text-gray-900 ">Kriteria
                            2</label>
                        <input type="text" id="data2" name="data2" required autofocus
                            value="{{ old('data2') ?? $data->data2 }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>
                    <div class="mt-6">
                        <label for="data3" class="block mb-2 text-sm font-medium text-gray-900 ">Kriteria
                            3</label>
                        <input type="text" id="data3" name="data3" required autofocus
                            value="{{ old('data3') ?? $data->data3 }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>
                    <div class="mt-6 ">
                        <label for="data4" class="block mb-2 text-md font-medium p-3 text-gray-900">Kriteria
                            4</label>
                        <select id="data4" name="data4" class="block form-select w-5">
                            @foreach ($values as $value)
                                <option class="px-96" value="{{ $value->value_name }}"
                                    {{ old('data4', $data->data4) == $value->value_name ? 'selected' : '' }} >
                                    {{ $value->value_name }}
                                </option>
                            @endforeach
                        </select>
                        {{-- <input type="text" id="data4" name="data4" required autofocus value="{{ old('data4')?? $data->data4 }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "> --}}
                    </div>

                    <div class="mt-14 mb-20">
                        <button type="submit"
                            class="px-4 py-2 w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                            Perbarui
                        </button>
                    </div>
                </div>
                <div class="grow"></div>
            </div>
        </form>
    </div>
    <script>
        < script >
            function showcategory() {
                var selectBox = document.getElementById('category');
                var userInput = selectBox.options[selectBox.selectedIndex].value;
                if (userInput == $sel - > id) {
                    document.getElementById('description').style.visibility = 'visible';
                } else {
                    document.getElementById('description').style.visibility = 'hidden';
                }
                return false;
            }
    </script>


</x-layout>
