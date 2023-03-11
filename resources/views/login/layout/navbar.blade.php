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
    <div class="h-16 w-full pl-4 overflow-hidden cursor-pointer transition-all duration-300 bg-slate-600 active:bg-slate-600">
        <div class="w-52 h-full flex justify-start items-center">
            <div class="h-10 w-7">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-7 text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
            </div>
            <span id="descnav" class="text-sm text-white px-5 opacity-0 transition-all duration-500 font-[400]">Dashboard</span>
        </div>
    </div>
    <div class="w-full pl-4 overflow-hidden cursor-pointer transition-all duration-300 active:bg-slate-600 hover:bg-slate-700">
        <div class="w-52 h-16 flex justify-start items-center" onclick="toggleSideDropdown()">
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
        <div id="sideDropdown" class="max-h-0 overflow-hidden transition-all duration-500">
            <div class="w-52 h-8 flex justify-start items-center pl-3">
                <div class="h-full w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-5 text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="text-xs text-white px-5 font-[300]">
                    Proposal Penelitian
                </div>
            </div>
            <div class="w-52 h-8 flex justify-start items-center pl-3">
                <div class="h-full w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-5 text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="text-xs text-white px-5 font-[300]">
                    Penelitian
                </div>
            </div>
        </div>
    </div>
    <div class="h-16 w-full pl-4 overflow-hidden cursor-pointer transition-all duration-300 active:bg-slate-600 hover:bg-slate-700">
        <div class="w-52 h-full flex justify-start items-center">
            <div class="h-10 w-7">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-7 text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <span id="descnav" class="text-sm text-white px-5 opacity-0 transition-all duration-500 font-[400]">Penelitian Mandiri</span>
        </div>
    </div>
    <div class="h-16 w-full pl-4 overflow-hidden cursor-pointer transition-all duration-300 active:bg-slate-600 hover:bg-slate-700">
        <div class="w-52 h-full flex justify-start items-center">
            <div class="h-10 w-7">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-full text-slate-300" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <span id="descnav" class="text-sm text-white px-5 opacity-0 transition-all duration-500 font-[400]">Review</span>
        </div>
    </div>
    <div class="h-16 w-full pl-4 overflow-hidden cursor-pointer transition-all duration-300 active:bg-slate-600 hover:bg-slate-700">
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



