<aside id="default-sidebar" class="top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class=" ml-20 mt-20 overflow-y-visible ">
       <ul class="space-y-8 font-medium t">
        <li><a href="/" class="{{ request()->is('/') ? 'bg-green-900 text-white' : 'bg-green-200 text-gray-800 hover:bg-green-700 hover:text-white'}} flex items-center rounded-l-3xl px-9 py-4 text-sm font-medium" aria-current="page">Home</a></li>
        <li><a href="/alternatif" class="{{ request()->is('alternatif') ? 'bg-green-900 text-white' : 'bg-green-200 text-gray-800 hover:bg-green-700 hover:text-white'}} flex items-center rounded-l-3xl  px-9 py-4 text-sm font-medium" aria-current="page">Alternatif</a></li>
        <li><a href="/bobot" class="{{ request()->is('bobot') ? 'bg-green-900 text-white' : 'bg-green-200 text-gray-800 hover:bg-green-700 hover:text-white'}} flex items-center rounded-l-3xl px-9 py-4 text-sm font-medium" aria-current="page">Nilai Bobot</a></li>
        <li><a href="/perhitungan" class="{{ request()->is('perhitungan') ? 'bg-green-900 text-white' : 'bg-green-200 text-gray-800 hover:bg-green-700 hover:text-white'}} flex items-center rounded-l-3xl px-9 py-4 text-sm font-medium" aria-current="page">Perhitungan</a></li>
        <li><a href="/hasil" class="{{ request()->is('hasil') ? 'bg-green-900 text-white' : 'bg-green-200 text-gray-800 hover:bg-green-700 hover:text-white'}} flex items-center rounded-l-3xl px-9 py-4 text-sm font-medium" aria-current="page">Hasil</a></li>
       </ul>
    </div>
 </aside>