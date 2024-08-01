<x-layoutlogin>
  <!-- Dismissible Alert -->
<!-- Modal -->
@if (session()->has('Sukses') )
<div id="modal" class="modal fixed h-fix inset-0 z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm mx-auto relative">
        <button id="close-modal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <p class="mt-4">{{ session('Sukses') }}</p>
    </div>
</div>
@endif

<script>
    // JavaScript to handle modal visibility
    const closeModalButton = document.getElementById('close-modal');
    const modal = document.getElementById('modal');
  
    closeModalButton.addEventListener('click', () => {
       
        modal.style.display = 'none';
        session()->forget('Sukses');
    });
    
    // Also hide the modal when clicking outside of it
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
        session()->forget('Sukses');
    });
</script>
        <div style="height: 90%" class="items-center  my-9 rounded-md border-2 border-green-900 bg-white lg:grid lg:grid-cols-2 lg:gap-x-10 lg:space-y-1 justify-center">
        {{-- buat logo dan judul --}}
        <div class=" flex flex-col rounded-md  my-6 " >
            <div class="flex flex-col items-center justify-center">
                <div class="flex  rounded-lg justify-center ml-14 group-hover:opacity-75">
                  <img src="{{ asset('img/logo.jpeg') }}" alt="Logo Lembaga" class="h-60 w-fit justify-center object-cover object-center">
                </div>
                <h3 class="flex my-8 ml-14 text-4xl font-bold text-center w-96 justify-center text-black">
                    SISTEM PENDUKUNG KEPUTUSAN  PENENTUAN PPPK
                </h3>
                <p class="flex ml-14 text-1xl font-semibold text-gray-900">KEMENTRIAN AGAMA KAB. TANAH DATAR</p>
              </div>

        </div>

        {{-- buat login tempatnya --}}

        <div style="height: 90%" class="flex flex-col mx-6 my-1 rounded-2xl bg-green-200 justify-center  lg:px-8">
            <div class="mb-10">
                <h1 class="mt-10 text-center text-4xl font-bold leading-9 tracking-tight text-gray-900">
                    Selamat Datang
                </h1>
            </div>

            <div class="mt-10 sm:mx-auto  sm:max-w-sm">
                <form class="space-y-6" action="/login" method="POST">
                    @csrf
                    <div>
                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                        <div class="mt-2 ">
                            <input id="username" name="username" type="text" autocomplete="username" required value="{{ old('username') }}"
                                class="block w-full  px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('username')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password"
                                class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required value="{{ old('password') }}"
                                class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('password')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md border-green-950 bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">
                        Login</button>
                    </div>
                </form>

                <p class="mt-10 text-center text-sm text-gray-500">
                    Belum terdaftar?
                    <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500"> Daftar</a>
                  </p>
            </div>
        </div>

    </div>
    </x-layout>
