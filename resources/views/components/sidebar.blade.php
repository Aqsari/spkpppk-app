<aside id="default-sidebar" class="" aria-label="Sidebar">
    <div class="grid  grid-cols-subgrid col-spam-2 ">
       <div class="col-start-2 ">
         <ul class="space-y-7 font-medium t">
            <li><a href="/" class="{{ request()->is('/') ? 'bg-green-900 text-white' : 'bg-green-200 text-gray-800 hover:bg-green-700 hover:text-white'}} flex items-center rounded-l-3xl px-9 py-4 text-sm font-medium" aria-current="page">Home</a></li>
            <li><a href="/alternatif" class="{{ request()->is('alternatif') ? 'bg-green-900 text-white' : 'bg-green-200 text-gray-800 hover:bg-green-700 hover:text-white'}} flex items-center rounded-l-3xl  px-9 py-4 text-sm font-medium" aria-current="page">Alternatif</a></li>
            <li><a href="/bobot" class="{{ request()->is('bobot') ? 'bg-green-900 text-white' : 'bg-green-200 text-gray-800 hover:bg-green-700 hover:text-white'}} flex items-center rounded-l-3xl px-9 py-4 text-sm font-medium" aria-current="page">Nilai Bobot</a></li>
            <li><a href="/perhitungan" class="{{ request()->is('perhitungan') ? 'bg-green-900 text-white' : 'bg-green-200 text-gray-800 hover:bg-green-700 hover:text-white'}} flex items-center rounded-l-3xl px-9 py-4 text-sm font-medium" aria-current="page">Perhitungan</a></li>
            <li><a href="/hasil" class="{{ request()->is('hasil') ? 'bg-green-900 text-white' : 'bg-green-200 text-gray-800 hover:bg-green-700 hover:text-white'}} flex items-center rounded-l-3xl px-9 py-4 text-sm font-medium" aria-current="page">Hasil</a></li>
           </ul>
       </div>
    </div>
 </aside>