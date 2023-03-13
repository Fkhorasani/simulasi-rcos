<div class="w-full h-16 bg-white shadow-gray-500 shadow-sm fixed top-0 z-10">
    <div class="flex justify-end overflow-x-hidden">
        {{-- <div class="h-16 w-16 flex justify-center items-center border-r border-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </div> --}}
        <div class="h-16 w-64 flex justify-center items-center border-r border-gray-300 overflow-x-hidden hover:bg-slate-200 transition-all duration-500 cursor-pointer" onclick="toggleProfileDropdown()">
            <div class="flex justify-center">
                <span class="flex items-center pr-3">Sarimin Yoshua</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-10 h-10" viewBox="0 0 512 512"><title>Person Circle</title><path d="M258.9 48C141.92 46.42 46.42 141.92 48 258.9c1.56 112.19 92.91 203.54 205.1 205.1 117 1.6 212.48-93.9 210.88-210.88C462.44 140.91 371.09 49.56 258.9 48zm126.42 327.25a4 4 0 01-6.14-.32 124.27 124.27 0 00-32.35-29.59C321.37 329 289.11 320 256 320s-65.37 9-90.83 25.34a124.24 124.24 0 00-32.35 29.58 4 4 0 01-6.14.32A175.32 175.32 0 0180 259c-1.63-97.31 78.22-178.76 175.57-179S432 158.81 432 256a175.32 175.32 0 01-46.68 119.25z"/><path d="M256 144c-19.72 0-37.55 7.39-50.22 20.82s-19 32-17.57 51.93C191.11 256 221.52 288 256 288s64.83-32 67.79-71.24c1.48-19.74-4.8-38.14-17.68-51.82C293.39 151.44 275.59 144 256 144z"/></svg>
            </div>
        </div>
        <div id="profileDropdown" class="w-64 h-40 z-[0] transition-all duration-500 absolute bg-white text-sm top-16 -right-64 shadow-gray-500 shadow-sm rounded-bl-xl">
            <div class="py-4">
                <p class="text-base text-center font-semibold">Sarimin Yoshua</p>
                <p class="text-sm text-center">sarimin.yoshua@student.umn.ac.id</p>
            </div> 
            <hr />
            <div class="flex justify-center items-center py-4 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-10 h-10" viewBox="0 0 512 512"><title>Power</title><path d="M378 108a191.41 191.41 0 0170 148c0 106-86 192-192 192S64 362 64 256a192 192 0 0169-148M256 64v192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                <span>Sign Out</span>
            </div>
        </div>
    </div>
</div>
<div id="sideNav" class="h-screen w-16 bg-slate-800 fixed top-0 transition-all duration-500 z-20">
    <div id="title" class="h-16 transition-all duration-500 absolute top-0 -left-40 flex justify-center items-center text-white font-bold text-xl group">
        <div>
            <span class="absolute -left-3 group-hover:-left-5 transition-all duration-500">[</span>
            <span>Dosen RCOS</span>
            <span class="absolute -right-3 group-hover:-right-5 transition-all duration-500">]</span>
        </div>
    </div>
    <div id="burger" class="h-16 w-16 bg-white hover:bg-slate-200 transition-all duration-500 flex justify-center items-center border-r border-gray-300 cursor-pointer" onclick="toggleSideNav()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
    </div>
    <div class="h-16 w-full pl-4 overflow-hidden cursor-pointer transition-all duration-300 bg-slate-600 active:bg-slate-600" onclick="window.location.href='{{ route('dosenDashboard') }}'">
        <div class="w-52 h-full flex justify-start items-center">
            <div class="h-10 w-7">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-7 text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
            </div>
            <span id="descnav" class="text-sm text-white px-5 opacity-0 transition-all duration-500 font-[400]">Dashboard</span>
        </div>
    </div>
    <div class="w-full overflow-hidden cursor-pointer transition-all duration-300">
        <div class="w-56 pl-4 h-16 flex justify-start items-center transition-all duration-500 active:bg-slate-600 hover:bg-slate-700" onclick="toggleSideDropdown()">
            <div class="h-10 w-7">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-7 text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <span id="descnav" class="text-sm text-white px-5 opacity-0 transition-all duration-500 font-[400]">Penelitian Internal</span>
            <span>
                <svg id="dropdownArrow" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-300 transition-all duration-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </span>
        </div>
        <div id="sideDropdown" class="max-h-0 opacity-0 overflow-hidden transition-all duration-500">
            <div class="w-56 h-14 flex justify-start items-center pl-7 transition-all duration-500 active:bg-slate-600 hover:bg-slate-700" onclick="window.location.href='{{ route('dosenProposalPenelitian') }}'">
                <div class="h-full w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-5 text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="text-xs text-white px-5 font-[300] w-full">
                    Proposal Penelitian
                </div>
            </div>
            <div class="w-56 h-14 flex justify-start items-center pl-7 transition-all duration-500 active:bg-slate-600 hover:bg-slate-700">
                <div class="h-full w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-5 text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                    </svg>
                </div>
                <div class="text-xs text-white px-5 font-[300] w-full">
                    Penelitian
                </div>
            </div>
            <div class="w-56 h-14 flex justify-start items-center pl-7 transition-all duration-500 active:bg-slate-600 hover:bg-slate-700">
                <div class="h-full w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-5 text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="text-xs text-white px-5 font-[300] w-full">
                    Pengajuan / Penyelesaian Anggaran
                </div>
            </div>
            <div class="w-56 h-14 flex justify-start items-center pl-7 transition-all duration-500 active:bg-slate-600 hover:bg-slate-700">
                <div class="h-full w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-5 text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                    </svg>
                </div>
                <div class="text-xs text-white px-5 font-[300] w-full">
                    Pengajuan Pembelian Barang untuk Penelitian - Melalui SPMB
                </div>
            </div>
            <div class="w-56 h-14 flex justify-start items-center pl-7 transition-all duration-500 active:bg-slate-600 hover:bg-slate-700">
                <div class="h-full w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-5 text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
                    </svg>
                </div>
                <div class="text-xs text-white px-5 font-[300] w-full">
                    Pengajuan Buku untuk Penelitian - Perpustakaan
                </div>
            </div>
            <div class="w-56 h-14 flex justify-start items-center pl-7 transition-all duration-500 active:bg-slate-600 hover:bg-slate-700">
                <div class="h-full w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-5 text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="text-xs text-white px-5 font-[300] w-full">
                    Laporan Pemantauan dan Evaluasi Penelitian
                </div>
            </div>
        </div>
    </div>
    <div class="h-16 w-full pl-4 overflow-hidden cursor-pointer transition-all duration-300 transition-all duration-500 active:bg-slate-600 hover:bg-slate-700">
        <div class="w-52 h-full flex justify-start items-center">
            <div class="h-10 w-7">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-7 text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <span id="descnav" class="text-sm text-white px-5 opacity-0 transition-all duration-500 font-[400]">Penelitian Mandiri</span>
        </div>
    </div>
    <div class="h-16 w-full pl-4 overflow-hidden cursor-pointer transition-all duration-300 transition-all duration-500 active:bg-slate-600 hover:bg-slate-700" onclick="window.location.href='{{ route('dosenReview') }}'">
        <div class="w-52 h-full flex justify-start items-center">
            <div class="h-10 w-7">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-full text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <span id="descnav" class="text-sm text-white px-5 opacity-0 transition-all duration-500 font-[400]">Review</span>
        </div>
    </div>
    <div class="h-16 w-full pl-4 overflow-hidden cursor-pointer transition-all duration-300 transition-all duration-500 active:bg-slate-600 hover:bg-slate-700" onclick="window.location.href='{{ route('dosenDokumenPendukung') }}'">
        <div class="w-52 h-full flex justify-start items-center">
            <div class="h-10 w-7">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-7 text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z"></path>
                    <path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"></path>
                </svg>
            </div>
            <span id="descnav" class="text-sm text-white px-5 opacity-0 transition-all duration-500 font-[400]">Dokumen Pendukung</span>
        </div>
    </div>
</div>



