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
                    <input type="text" id="name" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
                <div class="mt-6">
                    <label for="data1" class="block mb-2 text-sm font-medium text-gray-900 ">Kriteria
                        1</label>
                    <input type="text" id="data1" name="data1"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
                <div class="mt-6">
                    <label for="data2" class="block mb-2 text-sm font-medium text-gray-900 ">Kriteria
                        2</label>
                    <input type="text" id="data2" name="data2"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
                <div class="mt-6">
                    <label for="data3" class="block mb-2 text-sm font-medium text-gray-900 ">Kriteria
                        3</label>
                    <input type="text" id="data3" name="data3"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
                <div class="mt-6">
                    <label for="data4" class="block mb-2 text-sm font-medium text-gray-900 ">Kriteria
                        4</label>
                    <input type="text" id="data4" name="data4"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
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
