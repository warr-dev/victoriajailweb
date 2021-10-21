<script>
function togglesidebar(){
    let sidebar=document.getElementById('sidebar');
    sidebar.style.display=sidebar.style.display=='none'?'flex':'none'
}
</script>
<div class="w-full h-1/5">

        <!-- component -->
        <nav class="flex items-center justify-between flex-wrap bg-blue-700 p-6">
            <div class="flex items-center flex-no-shrink text-white mr-6">
                
                <span style="font-size: 3rem; font-weight:bold" class="font-pythagoras text-xl tracking-tight">EServ for Victoria</span>

            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white" onclick="togglesidebar()">
                    <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <!--<div class="text-sm lg:flex-grow">
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                Docs
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                Examples
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white">
                Blog
                </a>
            </div>
            <div>
                <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0">Download</a>
            </div>-->
            </div>
        </nav>
    </div>