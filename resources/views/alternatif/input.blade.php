<x-layout >
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="grid">
        {{-- <x-subtitle>{{ $title }}</x-subtitle> --}}
 
        <form action="/alternatif" method="POST">
            @csrf
        <div class="flex" x-data="{ isOpen: false }">
            <div class="grow "></div>
            <div class="grow-0 w-2/4 object-center mt-9 rounded-md px-20 bg-slate-100">
                <div class="object-center text-center mx-auto max-w-4xl px-4 py-6 sm:px-6 lg:px-8">
                    <h4 class="text-2xl font-medium tracking-tight text-gray-900 ">Input data</h4>
                </div>
                <div class="mt-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama</label>
                    <input type="text" id="name" name="name" required autofocus
                        value="{{ old('name')  }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    @error('name')
                        <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-6">
                    <label for="UMUR" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Umur
                    </label>
                    <input type="text" id="UMUR" name="UMUR" required autofocus
                        value="{{ old('UMUR')  }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        @error('UMUR')
                        <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-6">
                    <label for="LAMA_HONOR" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Lama Honor
                    </label>
                    <input type="text" id="LAMA_HONOR" name="LAMA_HONOR" required autofocus
                        value="{{ old('LAMA_HONOR')  }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        @error('LAMA_HONOR')
                        <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-6">
                    <label for="JABATAN" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Jabatan
                    </label>
                    <select id="JABATAN" name="JABATAN" class="container rounded-md px-9 py-2">
                        @foreach ($positions as $value)
                            <option class="px-6 py-96" value="{{ $value->name }}"
                                {{ old('JABATAN') == $value->name ? 'selected' : '' }}>
                                {{ $value->name }}
                            </option>
                        @endforeach
                    </select>
                    {{-- <input type="text" id="JABATAN" name="JABATAN" required autofocus
                        value="{{ old('JABATAN')  }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "> --}}
                        @error('JABATAN')
                        <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-6">
                    <label for="PENDIDIKAN" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Pendidikan
                    </label>
                    <select id="PENDIDIKAN" name="PENDIDIKAN" class="container rounded-md px-9 py-2">
                        @foreach ($educations as $value)
                            <option class="px-6 py-96" value="{{ $value->name }}"
                                {{ old('JABATAN') == $value->name ? 'selected' : '' }}>
                                {{ $value->name }}
                            </option>
                        @endforeach
                    </select>
                    {{-- <input type="text" id="PENDIDIKAN" name="PENDIDIKAN" required autofocus
                        value="{{ old('PENDIDIKAN') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "> --}}
                        @error('PENDIDIKAN')
                        <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-6">
                    <label for="JURUSAN" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Jurusan
                    </label>
                    <input type="text" id="JURUSAN" name="JURUSAN" required autofocus
                        value="{{ old('JURUSAN') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        @error('JURUSAN')
                        <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-6 ">
                    <label for="criteria_value" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Keseuaian
                    </label>
                    <select id="criteria_value" name="criteria_value" class="container rounded-md px-9 py-2">
                        @foreach ($values as $value)
                            <option class="px-6 py-96" value="{{ $value->value_name }}"
                                {{ old('criteriavalue') == $value->value_name ? 'selected' : '' }}>
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
                        Simpan
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
