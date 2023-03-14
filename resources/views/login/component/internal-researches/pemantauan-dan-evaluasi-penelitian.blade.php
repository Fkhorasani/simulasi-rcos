<!--Regular Datatables CSS-->
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<!--Responsive Extension Datatables CSS-->
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

<div id="content" class="bg-slate-300 ml-16 pt-6 transition-all duration-500 min-h-[100dvh] overflow-y-auto">
    <div id="Dashboardlogo" class="w-full px-10 grid grid-cols-2 mt-24">
        <div class="col-span-2 md:col-span-1 flex justify-start">
            <div class="h-20 w-20 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Document Text</title><path d="M416 221.25V416a48 48 0 01-48 48H144a48 48 0 01-48-48V96a48 48 0 0148-48h98.75a32 32 0 0122.62 9.37l141.26 141.26a32 32 0 019.37 22.62z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M256 56v120a32 32 0 0032 32h120M176 288h160M176 368h160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
            </div>
            <div class="w-full"> 
                <p class="h-10 font-bold text-sm md:text-2xl ml-4 flex items-center">Pemantauan dan Evaluasi Penelitian</p> 
                <p class="h-10 ml-4 min-width: 1536px text-xs md:sm"><span class="text-sky-700 hover:text-sky-900 transition-all duration-300"><a href="{{ route('dosenDashboard') }}">Dashboard</a></span> &nbsp; / Penelitian Internal / Proposal Penelitian</p>
            </div>
        </div>
        <div class="col-span-2 md:col-span-1 flex justify-center md:justify-end mt-8 md:mt-0">
            <button
                type="button"
                class="w-full md:w-40 h-14 rounded bg-sky-400 text-xs 
                font-medium uppercase leading-normal 
                text-white shadow-[0_4px_9px_-4px_#3b71ca] w-50">
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
                    <span class="text-lg px-3 py-1 w-full text-center">Add</span>
                    <span class="px-3 text-2xl py-2 font-bold bg-sky-600 h-full">+</span>
                </div>
            </button>
        </div>
    </div>
    <div class="p-8 mt-6">
        <div id='recipients' class="bg-white shadow-sm shadow-gray-600 rounded-3xl px-6 pt-6 pb-16 md:px-16 md:pt-16 md:pb-16 w-full">
            <table id="example" class="stripe border hover" style="width:100%;">
                <thead class="text-sm md:text-lg">
                    <tr class="border font-bold"></tr>
                        <th data-priority="1" class="border">#</th>
                        <th data-priority="2" class="border">Title</th>
                        <th data-priority="3" class="border">Reviewer</th>
                    </tr>
                </thead>
                <tbody class="text-xs md:text-base">
                    <tr class="border">
                        <td class="border">Fernando</td>
                        <td class="border">Cara Mengembangkan Minat Belajar Mahasiswa UMN</td>
                        <td class="border">Deadowski</td>
                    </tr>
                    <tr class="border">
                        <td class="border">Meitio Susanto</td>
                        <td class="border">Pengembangan Sistem Untuk Membantu Orang Susah</td>
                        <td class="border">Darren Gope</td>
                    </tr>
                
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