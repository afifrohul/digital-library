<div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    <div class="flex flex-col">
        <div class="text-right hidden md:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>

        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">Dashboard</p>
        <a href="{{url('/back-admin/dashboard')}}" class="mb-3 @if (Request::segment(2) == 'dashboard') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-chart-pie text-xs mr-2"></i>                
            Dashboard
        </a>

        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Master Data</p>
        <a href="{{url('/back-admin/category')}}" class="mb-3 @if (Request::segment(2) == 'category') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-bullseye-arrow text-xs mr-2"></i>
            &nbsp;Kategori Buku
        </a>
        <a href="{{url('/back-admin/book')}}" class="mb-3 @if (Request::segment(2) == 'book') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-bullseye-pointer text-xs mr-2"></i>
            &nbsp;Buku
        </a>

        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Dokumentasi</p>
        <a href="{{url('documentation-api')}}" class="mb-3 @if (Request::segment(1) == 'documentation-api') text-teal-600 @endif capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-atom text-xs mr-2"></i>
            Dokumentasi API
        </a>
    </div>
</div>