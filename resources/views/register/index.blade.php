<x-layoutlogin>
  
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
            <h1 class="mt-7 text-center text-3xl font-medium leading-9 tracking-tight text-gray-900">
                Form Pendaftaran
            </h1>
        </div>

        <div class="sm:mx-auto  sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                    <div class="mt-2 ">
                        <input id="name" name="name" type="name" autocomplete="name" required
                            class="block w-full  px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                    <div class="mt-2 ">
                        <input id="username" name="username" type="username" autocomplete="username" required
                            class="block w-full  px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password"
                            class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password"
                            required
                            class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md border-green-950 bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">
                    Daftar</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Sudah terdaftar?
                <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500"> Login </a>
              </p>
        </div>
    </div>

</div>
</x-layout>
