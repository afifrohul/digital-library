<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
    <div class="flex-none w-56 flex flex-row items-center">
        {{-- <img src="{{asset('assets/logos/Logo HMIF Compress.png')}}" class="h-10 flex-none"> --}}
        <strong class="capitalize ml-5 flex-1">Digital Library</strong>
        <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
            <i class="fad fa-list-ul"></i>
        </button>
    </div>
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
        <i class="fad fa-chevron-double-down"></i>
    </button>
    <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
        <div class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">        
        </div>
        <div class="flex flex-row-reverse items-center">
            <div class="dropdown relative md:static">
                <button class="menu-btn focus:outline-none flex flex-wrap items-center">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <img class="w-full h-full object-cover" src="{{asset('assets/img-admin/avatar-log.jpg')}}" >
                    </div> 

                    <div class="ml-2 capitalize flex ">
                        <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">Halo, {{Auth::user()->name;}}</h1>
                        <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                    </div>                        
                </button>
                <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>
                <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">
                    <form method="POST" action="{{ route('back-logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                            <i class="fad fa-user-times text-xs mr-1"></i> 
                            log out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>