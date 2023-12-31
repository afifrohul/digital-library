@extends('admin.layouts.app')
@section('content')
<div>
    <div class="grid grid-cols-3 gap-6 xl:grid-cols-1">
        
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-red-700 fad fa-user"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5">{{$countAdmin}} Admin</h1>
                        <p>Jumlah Admin Digital Library</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-red-700 fad fa-users"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5">{{$countUser}} User</h1>
                        <p>Jumlah User Digital Library</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-red-700 fad fa-sitemap"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5">2 Kategori Buku</h1>
                        <p>Fiksi dan Non Fiksi</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>

        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-green-600 fad fa-book"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5">{{$countAllBook}} Buku</h1>
                        <p>Total Jumlah Buku di Digital Library</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-purple-600 fad fa-moon"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5">{{$countFictionBook}} Buku Fiksi</h1>
                        <p>Total Jumlah Buku Fiksi</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-yellow-700 fad fa-sun"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5">{{$countNonFictionBook}} Buku Non Fiksi</h1>
                        <p>Total Jumlah Buku Non Fiksi</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
    </div>

    <div class="mt-6 grid grid-cols-1">
        <div class="card bg-teal-400 border-teal-400 shadow-md text-white">
            <div class="card-body flex flex-row">
                <div class="img-wrapper w-40 h-40 flex justify-center items-center">
                    <img src="{{asset('assets/img-admin/good.png')}}" alt="img title">
                </div>
                <div class="py-2 ml-10">
                    <h1 class="h6">Kerja Bagus, {{Auth::user()->name;}} !</h1>
                    <p class="text-white text-xs">Kamu telah menyelesaikan beberapa pekerjaan belakangan ini.</p>

                    <ul class="mt-4">
                        <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Semangat</li>
                        <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Kompak</li>
                        <li class="text-sm font-light"><i class="fad fa-check-double mr-2"></i> Kuat dan Tangguh</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection