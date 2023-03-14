<div id="formIndependentResearches" class="absolute top-0 left-0 w-full h-0 shadow-2xl bg-slate-300 pl-16 pt-6 transition-all duration-500 overflow-y-scroll">
    <div id="Dashboardlogo" class="w-full px-10 grid grid-cols-2 mt-24">
        <div class="col-span-2 md:col-span-1 flex justify-start">
            <div class="h-20 w-20 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Cloud Upload</title><path d="M320 367.79h76c55 0 100-29.21 100-83.6s-53-81.47-96-83.6c-8.89-85.06-71-136.8-144-136.8-69 0-113.44 45.79-128 91.2-60 5.7-112 43.88-112 106.4s54 106.4 120 106.4h56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M320 255.79l-64-64-64 64M256 448.21V207.79"/></svg>
            </div>
            <div class="w-full"> 
                <p class="h-10 font-bold text-lg md:text-2xl ml-4 flex items-center">Penelitian Mandiri - Tambah Baru</p> 
                <p class="h-10 ml-4 text-xs md:text-base"><span class="text-sky-700 hover:text-sky-900 transition-all duration-300"><a href="{{ route('dosenDashboard') }}">Dashboard</a></span> &nbsp; / Penelitian Mandiri / Tambah</p>
            </div>
        </div>
        <div class="col-span-2 md:col-span-1 flex justify-center md:justify-end mt-8 md:mt-0">
            <button
                type="button"
                class="w-full md:w-40 h-14 rounded bg-sky-400 text-xs 
                font-medium uppercase leading-normal 
                text-white shadow-[0_4px_9px_-4px_#3b71ca] w-50" onclick="toggleFormIndependentResearches()">
                <div class="flex flex-row justify-between items-center h-full
                transition duration-150 ease-in-out
                hover:bg-primary-600 
                hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
                focus:bg-primary-600 
                focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
                focus:outline-none 
                focus:ring-0 
                active:bg-primary-700 
                active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                    <span class="text-lg px-3 py-1 w-full text-center">Close</span>
                    <span class="px-3 text-2xl py-2 font-bold bg-sky-600 h-full">-</span>
                </div>
            </button>
        </div>
    </div>
    <div class="p-8 mt-6">
        <div id='recipients' class="bg-white shadow-sm shadow-gray-600 rounded-3xl px-6 pt-6 pb-16 md:px-16 md:pt-16 md:pb-16 w-full">
            <div>
                <form class="w-full">
                    <div class="items-start mb-6">
                        <label class="block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Judul Penelitian</label>
                        <p class="italic pb-2">Jika Luaran dari Penelitian Bersama Mahasiswa (Tugas Akhir), maka Judul Penelitian tidak dapat sama dengan judul tugas Akhir Mahasiswa.</p>
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="text" value="">
                    </div>
                    <div class="items-start mb-6">
                        <label class="block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Apakah topik penelitian Bapak/Ibu termasuk dalam konsep environmental sustainability?</label>
                        <p class="italic mb-2">Penjelasan :Konsep environmental sustainability terdiri dari 3 element, yaitu environmental, ekonomi, dan sosial. Aspek environmental meliputi natural resources uses, environmental management, dan pollution prevention. Aspek ekonomi meliputi profit & cost saving. Aspek sosial meliputi education, community, dan social involvement. (UI GreenMetric Guideline, 2020)</p>
                        <fieldset id="group1">
                            <div class="mb-2">
                                <input id="default-radio-1" type="radio" value="" name="group1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ml-2 text-sm font-medium">Ya</label>
                            </div>
                            <div class="mb-2">
                                <input checked id="default-radio-2" type="radio" value="" name="group1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-2" class="ml-2 text-sm font-medium">Tidak</label>
                            </div>
                        </fieldset>
                    </div>
                    <div id="fileInputWraper" class="lg:flex items-start mb-6">
                        <div class="lg:w-2/12 block text-xl font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-full-name">Laporan Hasil Penelitian</div>
                        <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-1 md:mb-0 p-4 border border-dashed border-4 hover:bg-slate-100 transition-all duration-" for="file_input" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Cloud Upload</title><path d="M320 367.79h76c55 0 100-29.21 100-83.6s-53-81.47-96-83.6c-8.89-85.06-71-136.8-144-136.8-69 0-113.44 45.79-128 91.2-60 5.7-112 43.88-112 106.4s54 106.4 120 106.4h56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M320 255.79l-64-64-64 64M256 448.21V207.79"/></svg>
                            <div id="fileName" class="text-center text-base text-slate-500">Upload</div>
                        </label>
                        <input class="hidden" id="file_input" type="file">
                    </div>
                    <div class="lg:flex items-start mb-6">
                        <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-full-name">Kerjasama</label>
                        <div class="lg:w-10/12">
                            <fieldset id="group2">
                                <div class="mb-2">
                                    <input id="default-radio-1" type="radio" value="" name="group2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-radio-1" class="ml-2 text-sm font-medium">Kerjasama</label>
                                </div>
                                <div class="mb-2">
                                    <input checked id="default-radio-2" type="radio" value="" name="group2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-radio-2" class="ml-2 text-sm font-medium">Perguruan Tinggi Lainnya</label>
                                </div>
                                <div class="mb-2">
                                    <input checked id="default-radio-2" type="radio" value="" name="group2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-radio-2" class="ml-2 text-sm font-medium">Tidak ada kerjasama</label>
                                </div>
                            </fieldset>
                            
                        </div>
                    </div>
                    <hr>
                    <div class="lg:flex items-start my-6">
                        <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Bidang Penelitian</label>
                        <select id="countries" class="lg:w-4/12 mb-2 bg-gray-200 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option selected>Choose Lab</option>
                            <option value="">Mobile Development</option>
                            <option value="">Control System & Industrial Automation</option>
                            <option value="">Game Development</option>
                            <option value="">Artificial Intelligence</option>
                            <option value="">Computer Security</option>
                            <option value="">Big Data</option>
                            <option value="">Sistem Tertanam & Automasi</option>
                            <option value="">Infrastruktur & Layanan</option>
                            <option value="">Manajemen Energi</option>
                        </select>
                        <label class="lg:w-2/12 xs:mt-5 lg:ml-10 block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Anggaran</label>
                        <div class="flex lg:w-4/12 mb-2">
                            <span class="inline-flex items-center px-3 text-sm bg-gray-100 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-200 dark:border-gray-600">Rp</span>
                            <input type="number" id="website-admin" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="1000000000">
                        </div>
                    </div>
                    <hr>
                    <div class="lg:flex items-start my-6">
                        <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Bidang Penelitian</label>
                        <div class="lg:w-10/12">
                            <select id="countries" class="mb-2 bg-gray-200 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option selected>Pilih Kataegori Bidang Penelitian</option>
                                <option value="">Mobile Development</option>
                                <option value="">Control System & Industrial Automation</option>
                            </select>
                            <select id="countries" class="mb-2 bg-gray-200 lg:mt-4 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option selected>Pilih Bidang Penelitian</option>
                                <option value="">Mobile Development</option>
                                <option value="">Control System & Industrial Automation</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="lg:flex items-start my-6">
                        <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Tujuan Sosial Ekonomi</label>
                        <div class="lg:w-10/12">
                            <select id="countries" class="mb-2 bg-gray-200 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option selected>Pilih Kataegori Tujuan Sosial Ekonomi</option>
                                <option value="">Mobile Development</option>
                                <option value="">Control System & Industrial Automation</option>
                            </select>
                            <select id="countries" class="mb-2 bg-gray-200 lg:mt-4 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option selected>Pilih Bidang Tujuan Sosial Ekonomi</option>
                                <option value="">Mobile Development</option>
                                <option value="">Control System & Industrial Automation</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="my-6">
                        <label class="block text-3xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Luaran Penelitian</label>
                        <p class="text-lg pb-2">Menghasilkan Luaran <b>Prototype : </b></p>
                        <fieldset id="group3">
                            <div class="mb-2">
                                <input id="default-radio-1" type="radio" value="" name="group3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ml-2 text-sm font-medium">Ya</label>
                            </div>
                            <div class="mb-2">
                                <input checked id="default-radio-2" type="radio" value="" name="group3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-2" class="ml-2 text-sm font-medium">Tidak</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="my-6 lg:flex">
                        <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Judul Luaran</label>
                        <input class="lg:w-10/12 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="text" value="">
                    </div>
                    <div class="my-6 lg:flex">
                        <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Deskripsi Singkat</label>
                        <textarea id="message" rows="3" class="lg:w-10/12 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Deskripsi Singkat"></textarea>
                    </div>
                    <div class="my-6">
                        <div id="fileInputWraper" class="lg:flex items-start mb-6">
                            <div class="lg:w-2/12 block text-xl font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-full-name">Lampiran Luaran Lain yang dihasilkan (PDF)</div>
                            <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-1 md:mb-0 p-4 border border-dashed border-4 hover:bg-slate-100 transition-all duration-" for="file_input" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Cloud Upload</title><path d="M320 367.79h76c55 0 100-29.21 100-83.6s-53-81.47-96-83.6c-8.89-85.06-71-136.8-144-136.8-69 0-113.44 45.79-128 91.2-60 5.7-112 43.88-112 106.4s54 106.4 120 106.4h56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M320 255.79l-64-64-64 64M256 448.21V207.79"/></svg>
                                <div id="fileName" class="text-center text-base text-slate-500">Upload</div>
                            </label>
                            <input class="hidden" id="file_input" type="file">
                        </div>
                        {{-- <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Lampiran Luaran Lain yang dihasilkan (PDF)</label>
                        <input class="lg:w-10/12 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="file_input" type="file"> --}}
                    </div>
                    <hr>
                    <div class="my-6">
                        <p class="text-lg pb-2">Menghasilkan Luaran <b>Naskah Kebijakan : </b></p>
                        <fieldset id="group4">
                            <div class="mb-2">
                                <input id="default-radio-1" type="radio" value="" name="group4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ml-2 text-sm font-medium">Ya</label>
                            </div>
                            <div class="mb-2">
                                <input checked id="default-radio-2" type="radio" value="" name="group4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-2" class="ml-2 text-sm font-medium">Tidak</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="my-6 lg:flex">
                        <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Judul Luaran</label>
                        <input class="lg:w-10/12 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="text" value="">
                    </div>
                    <div class="my-6 lg:flex">
                        <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Deskripsi Singkat</label>
                        <textarea id="message" rows="3" class="lg:w-10/12 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Deskripsi Singkat"></textarea>
                    </div>
                    <div class="my-6">
                        <div id="fileInputWraper" class="lg:flex items-start mb-6">
                            <div class="lg:w-2/12 block text-xl font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-full-name">Lampiran Luaran Lain yang dihasilkan (PDF)</div>
                            <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-1 md:mb-0 p-4 border border-dashed border-4 hover:bg-slate-100 transition-all duration-" for="file_input" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Cloud Upload</title><path d="M320 367.79h76c55 0 100-29.21 100-83.6s-53-81.47-96-83.6c-8.89-85.06-71-136.8-144-136.8-69 0-113.44 45.79-128 91.2-60 5.7-112 43.88-112 106.4s54 106.4 120 106.4h56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M320 255.79l-64-64-64 64M256 448.21V207.79"/></svg>
                                <div id="fileName" class="text-center text-base text-slate-500">Upload</div>
                            </label>
                            <input class="hidden" id="file_input" type="file">
                        </div>
                        {{-- <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Lampiran Luaran Lain yang dihasilkan (PDF)</label>
                        <input class="lg:w-10/12 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="file_input" type="file"> --}}
                    </div>
                    <hr>
                    <div class="my-6">
                        <p class="text-lg pb-2">Menghasilkan Luaran <b>Karya Monumental : </b></p>
                        <fieldset id="group4">
                            <div class="mb-2">
                                <input id="default-radio-1" type="radio" value="" name="group4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ml-2 text-sm font-medium">Ya</label>
                            </div>
                            <div class="mb-2">
                                <input checked id="default-radio-2" type="radio" value="" name="group4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-2" class="ml-2 text-sm font-medium">Tidak</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="my-6 lg:flex">
                        <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Judul Luaran</label>
                        <input class="lg:w-10/12 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inline-full-name" type="text" value="">
                    </div>
                    <div class="my-6 lg:flex">
                        <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Deskripsi Singkat</label>
                        <textarea id="message" rows="3" class="lg:w-10/12 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Deskripsi Singkat"></textarea>
                    </div>
                    <div class="my-6">
                        <div id="fileInputWraper" class="lg:flex items-start mb-6">
                            <div class="lg:w-2/12 block text-xl font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-full-name">Lampiran Luaran Lain yang dihasilkan (PDF)</div>
                            <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-1 md:mb-0 p-4 border border-dashed border-4 hover:bg-slate-100 transition-all duration-" for="file_input" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Cloud Upload</title><path d="M320 367.79h76c55 0 100-29.21 100-83.6s-53-81.47-96-83.6c-8.89-85.06-71-136.8-144-136.8-69 0-113.44 45.79-128 91.2-60 5.7-112 43.88-112 106.4s54 106.4 120 106.4h56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M320 255.79l-64-64-64 64M256 448.21V207.79"/></svg>
                                <div id="fileName" class="text-center text-base text-slate-500">Upload</div>
                            </label>
                            <input class="hidden" id="file_input" type="file">
                        </div>
                        {{-- <label class="lg:w-2/12 block text-xl font-bold md:text-left mb-2 pr-4" for="inline-full-name">Lampiran Luaran Lain yang dihasilkan (PDF)</label>
                        <input class="lg:w-10/12 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="file_input" type="file"> --}}
                    </div>
                    <div class="w-100 flex justify-center">
                        <div class="my-6 max-w-4/5 flex mt-10 justify-center">
                            <button type="button" class="w-6/12 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save</button>
                            <button type="button" class="w-6/12 text-white bg-gray-300 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>