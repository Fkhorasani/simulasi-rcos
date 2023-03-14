<!--Regular Datatables CSS-->
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<!--Responsive Extension Datatables CSS-->
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">


<div class="bg-slate-300 ml-16 pt-6 transition-all duration-500 min-h-[100dvh] overflow-y-auto">
    <div id="Dashboardlogo" class="w-full px-10 grid grid-cols-2 mt-24">
        <div class="col-span-2 md:col-span-1 flex justify-start">
            <div class="h-20 w-20 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Checkbox</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M352 176L217.6 336 160 272"/><rect x="64" y="64" width="384" height="384" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/></svg>
            </div>
            <div class="w-full">
                <p class="h-10 font-bold text-lg md:text-2xl ml-4 flex items-center">Review</p>
                <p class="h-10 ml-4 text-xs md:text-base"><span class="text-sky-700 hover:text-sky-900 transition-all duration-300"><a href="{{ route('dosenDashboard') }}">Dashboard</a></span> &nbsp; / Reviews</p>
            </div>
        </div>
    </div>
    <div class="p-8 mt-6">
        <div id='recipients' class="bg-white shadow-sm shadow-gray-600 rounded-3xl px-6 pt-6 pb-16 md:px-16 md:pt-16 md:pb-16 w-full">
            {{-- <div class="flex md:flex-row flex-col justify-between mb-4">
                <p class="h-auto mb-3 font-bold text-3xl md:text-xl flex items-center">Review</p>
            </div> --}}
            <table id="example" class="stripe border hover" style="width:100%;">
                <thead class="text-sm md:text-lg">
                    <tr class="border font-bold"></tr>
                        <th data-priority="1" class="border">#</th>
                        <th data-priority="2" class="border">Title</th>
                        <th data-priority="3" class="border">Status</th>
                    </tr>
                </thead>
                <tbody class="text-xs md:text-base">
                    <tr class="border dark:bg-neutral-200">
                        <td class="border">1.</td>
                        <td class="border">Test</td>
                        <td class="border">Test</td>
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