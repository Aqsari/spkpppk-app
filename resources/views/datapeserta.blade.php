<x-layout>
    <div class="grid">
        {{-- <x-subtitle>{{ $title }}</x-subtitle> --}}

        <div class="flex" x-data="{ isOpen: false }">
            <div class="grow "></div>
            <div class="grow-0 w-2/4 object-center mt-9 rounded-md px-20 bg-slate-100">
                <div class="object-center text-center mx-auto max-w-4xl px-4 py-6 sm:px-6 lg:px-8">
                    <h4 class="text-2xl font-medium tracking-tight text-gray-900 ">Input data</h4>
                </div>
                <div class="mt-6">
                    <label for="kriteria1-input" class="block mb-2 text-sm font-medium text-gray-900 ">Nama</label>
                    <input type="text" id="kriteria1-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
                <div class="mt-6">
                    <label for="kriteria1-input" class="block mb-2 text-sm font-medium text-gray-900 ">Kriteria
                        1</label>
                    <input type="text" id="kriteria1-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
                <div class="mt-6">
                    <label for="kriteria2-input" class="block mb-2 text-sm font-medium text-gray-900 ">Kriteria
                        2</label>
                    <input type="text" id="kriteria2-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
                <div class="mt-6">
                    <label for="kriteria3-input" class="block mb-2 text-sm font-medium text-gray-900 ">Kriteria
                        3</label>
                    <input type="text" id="kriteria3-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
                <div class="mt-6 h-16 mb-6">
                    <label for="kriteria3-input" class="block mb-2 text-sm font-medium text-gray-900 ">Kriteria 4</label>
                  
                        <!-- Profile dropdown -->
                        <div class="relative inline-block text-left" id="dropdownButton">
                        <div>
                            <button type="button" onclick="toghleDropDown()"
                                class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Pilih
                            </button>
                        </div>
                        <input type="text" name="item">

                        <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75 transform"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="absolute left-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <button type="button" onclick="update_menu(this)"
                                    class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="menu-item-0">Sangat Sesuai</button>
                                <button type="button" @click="isOpen = !isOpen"
                                    class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="menu-item-1">Sesuai</button>
                                <button type="button" @click="isOpen = !isOpen"
                                    class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="menu-item-2">Kurang Sesuai</button>
                                <button type="button" @click="isOpen = !isOpen"
                                    class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="menu-item-3">Tidak Sesuai</button>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="mt-14 mb-20">
                    <button type="button"
                        class="px-4 py-2 w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                        Simpan
                    </button>
                </div>
            </div>
            <div class="grow"></div>
        </div>
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


    </script>
</x-layout>
