<!--Regular Datatables CSS-->
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<!--Responsive Extension Datatables CSS-->
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

<!--Container-->
<div class="bg-slate-300 ml-16 pt-6 transition-all duration-500 min-h-[100dvh] overflow-y-auto">
    <div id="Dashboardlogo" class="w-full px-10 grid grid-cols-2 mt-24">
        <div class="col-span-2 md:col-span-1 flex justify-start">
            <div class="h-20 w-20 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Document Attach</title><path d="M208 64h66.75a32 32 0 0122.62 9.37l141.26 141.26a32 32 0 019.37 22.62V432a48 48 0 01-48 48H192a48 48 0 01-48-48V304" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M288 72v120a32 32 0 0032 32h120" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M160 80v152a23.69 23.69 0 01-24 24c-12 0-24-9.1-24-24V88c0-30.59 16.57-56 48-56s48 24.8 48 55.38v138.75c0 43-27.82 77.87-72 77.87s-72-34.86-72-77.87V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/></svg>
            </div>
            <div class="w-full">
                <p class="h-10 font-bold text-lg md:text-2xl ml-4 flex items-center">Dokumen Pendukung</p>
                <p class="h-10 ml-4 text-xs md:text-base"><span class="text-sky-700 hover:text-sky-900 transition-all duration-300"><a href="{{ route('dosenDashboard') }}">Dashboard</a></span> &nbsp; / Dokumen Pendukung</p>
            </div>
        </div>
    </div>
    <div class="p-8 mt-6">
        <div id='recipients' class="bg-white shadow-sm shadow-gray-600 rounded-3xl px-6 pt-6 pb-16 md:px-16 md:pt-16 md:pb-16 w-full">
            {{-- <p class="text-3xl mb-10"><b>Dokumen Pendukung</b></p> --}}
            <table id="example" class="stripe border hover" style="width:100%;">
                <thead class="text-sm md:text-lg">
                    <tr class="border"></tr>
                        <th data-priority="1" class="border text-left">#</th>
                        <th data-priority="2" class="border text-left">TITLE</th>
                    </tr>
                </thead>
                <tbody class="text-xs md:text-base">
                    <tr class="border">
                        <td class="border">1.</td>
                        <td class="border">
                            <!-- <a href="{{asset('document/Panduan.pdf')}}" download="Panduan">Panduan Penulisan Proposal dan Pertanggungjawaban</a> -->
                            <a href="https://rcos.umn.ac.id/files/dokumen-pendukung/1. Panduan Penulisan Proposal dan Pertanggungjawaban.pdf" download="Panduan" style="color:#0866c6">Panduan Penulisan Proposal dan Pertanggung jawaban</a>
                        </td>
                    </tr>
                    <tr class="border">
                        <td class="border">2.</td>
                        <td class="border">
                            <a href="https://rcos.umn.ac.id/files/dokumen-pendukung/2.1 Roadmap UMN.pdf" download="" style="color:#0866c6">Roadmap UMN</a>                    
                        </td>
                    </tr>
                    <tr class="border">
                        <td class="border">3.</td>
                        <td class="border">
                            <a href="https://rcos.umn.ac.id/files/dokumen-pendukung/2.2 Unggulan dan Tema Penelitian (RENSTRA Penelitian).pdf" style="color:#0866c6" download="">Unggulan dan Tema Penelitian (RENSTRA Penelitian)</a>
                        </td>
                    </tr>
                    <tr class="border">
                        <td class="border">4.</td>
                        <td class="border">
                        <a href="https://rcos.umn.ac.id/files/dokumen-pendukung/3. Update - Template Usulan Proposal Penelitian Internal - Industri.docx" style="color:#0866c6" download="">Update - Template Usulan Proposal Penelitian Internal - Industri</a>                    </td>                </tr>
                    <tr class="border">
                        <td class="border">5.</td>
                        <td class="border">
                        <a href="https://rcos.umn.ac.id/files/dokumen-pendukung/4. Template Laporan Penelitian.docx" download="" style="color:#0866c6">Template Laporan Penelitian</a>                    </td>                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {

        var table = $('#example').DataTable({
                responsive: true
            })
            .columns.adjust()
            .responsive.recalc();
    });
</script>