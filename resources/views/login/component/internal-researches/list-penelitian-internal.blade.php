<!--Regular Datatables CSS-->
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<!--Responsive Extension Datatables CSS-->
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

<div id="content" class="bg-slate-300 ml-16 pt-6 transition-all duration-500 min-h-[100dvh] overflow-y-auto">
    <div id="Dashboardlogo" class="w-full px-10 grid grid-cols-2 mt-24">
        <div class="col-span-2 md:col-span-1 flex justify-start">
            <div class="h-20 w-20 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Documents</title><path d="M336 264.13V436c0 24.3-19.05 44-42.95 44H107c-23.95 0-43-19.7-43-44V172a44.26 44.26 0 0144-44h94.12a24.55 24.55 0 0117.49 7.36l109.15 111a25.4 25.4 0 017.24 17.77z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M200 128v108a28.34 28.34 0 0028 28h108" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M176 128V76a44.26 44.26 0 0144-44h94a24.83 24.83 0 0117.61 7.36l109.15 111A25.09 25.09 0 01448 168v172c0 24.3-19.05 44-42.95 44H344" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M312 32v108a28.34 28.34 0 0028 28h108" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
            </div>
            <div class="w-full"> 
                <p class="h-10 font-bold text-lg md:text-2xl ml-4 flex items-center">List Penelitian Internal</p> 
                <p class="h-10 ml-4 text-xs md:text-base"><span class="text-sky-700 hover:text-sky-900 transition-all duration-300"><a href="{{ route('dosenDashboard') }}">Dashboard</a></span> &nbsp; / Penelitian Internal / List Penelitian Proposal</p>
            </div>
        </div>
    </div>
    <div class="p-8 mt-6">
        <div id='recipients' class="bg-white shadow-sm shadow-gray-600 rounded-3xl px-6 pt-6 pb-16 md:px-16 md:pt-16 md:pb-16 w-full">
            <table id="example" class="stripe border hover" style="width:100%;">
                <thead class="text-sm md:text-lg">
                    <tr class="border font-bold"></tr>
                        <th data-priority="1" class="border">#</th>
                        <th data-priority="2" class="border">Title</th>
                        <th data-priority="3" class="border">Status</th>
                    </tr>
                </thead>
                <tbody class="text-xs md:text-base">
                    <tr class="border">
                        <td class="border">Tiger Nixon</td>
                        <td class="border">System Architect</td>
                        <td class="border">Edinburgh</td>
                    </tr>
                    <tr class="border">
                        <td class="border">Donna Snider</td>
                        <td class="border">Customer Support</td>
                        <td class="border">New York</td>
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