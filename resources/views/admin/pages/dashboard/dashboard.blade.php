@extends('admin.layouts.app')
@section('content')
<div>
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-indigo-700 fad fa-users"></div>
                    </div>
                    <div class="mt-8">
                        {{-- <h1 class="h5">{{$getCountStaff}} Orang Pengurus</h1> --}}
                        <p>Total Kepengurusan Periode 2022-2023</p>
                    </div>            
                </div>
            </div>
            {{-- <div class="footer @if ($getCountFeedbackUnread != 0) bg-teal-500 @else bg-white @endif p-1 mx-4 border border-t-0 rounded rounded-t-none"></div> --}}
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-red-700 fad fa-sitemap"></div>
                    </div>
                    <div class="mt-8">
                        <h1 class="h5">6 Divisi HMIF UNEJ</h1>
                        <p>BPI, HUMAS, KWU, LITBANG, MEDIATEK, PSDM</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-yellow-600 fad fa-clipboard"></div>
                    </div>
                    <div class="mt-8">
                        <p>Artikel yang berisi IPTEK dan lain-lain.</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-green-700 fad fa-newspaper"></div>
                    </div>
                    <div class="mt-8">
                        {{-- <h1 class="h5">{{$getCountNews}} Postingan Berita</h1> --}}
                        <p>Berita yang berisi seputar informasi IPTEK.</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-pink-700 fad fa-calendar"></div>
                    </div>
                    <div class="mt-8">
                        {{-- <h1 class="h5">{{$getCountProker}} Proker HMIFUNEJ</h1> --}}
                        <p>Agenda tahunan yang diselenggarakan.</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-green-700 fad fa-share-alt"></div>
                    </div>
                    <div class="mt-8">
                        {{-- <h1 class="h5">{{$getCountSosmed}} Media Sosial</h1> --}}
                        <p>Jaringan untuk menjangkau banyak orang.</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-indigo-700 fad fa-tags"></div>
                    </div>
                    <div class="mt-8">
                        {{-- <h1 class="h5">{{$getCountTag}} Total Tagline</h1> --}}
                        <p>Tagline / Pin dari kategori postingan</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-red-700 fad fa-podcast"></div>
                    </div>
                    <div class="mt-8">
                        {{-- {{-- <h1 class="h5">{{$getCountVision}} Visi & {{$getCountMission}} Misi</h1> --}}
                        <p>Visi & Misi HMIFUNEJ 2021/2022</p>
                    </div>
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
    </div>

    <div class="mt-6 grid grid-cols-2 gap-6 xl:grid-cols-1">
        <div class="card bg-teal-400 border-teal-400 shadow-md text-white">
            <div class="card-body flex flex-row">
                <div class="img-wrapper w-40 h-40 flex justify-center items-center">
                    <img src="{{asset('assets/img-admin/good.png')}}" alt="img title">
                </div>
                <div class="py-2 ml-10">
                    <h1 class="h6">Kerja Bagus, {{Auth::user()->name;}} !</h1>
                    <p class="text-white text-xs">Pengurus periode kalian telah menyelesaikan beberapa proker belakangan ini.</p>

                    <ul class="mt-4">
                        <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Semangat</li>
                        <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Kompak</li>
                        <li class="text-sm font-light"><i class="fad fa-check-double mr-2"></i> Kuat dan Tangguh</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="alert alert-dark mb-6">
                <span class="normal-case">
                    Total traffic kunjungan website <a target="_blank" href="https://hmifnewgen.netlify.app/">hmifunej-newgen</a>
                </span>
            </div>
            <div class="grid grid-cols-2 gap-6 h-full">

                <div class="card">
                    <div class="py-3 px-4 flex flex-row justify-between">
                        <h1 class="h6">
                            <span class="num-4"></span>k
                            <p>Halaman Dilihat</p>
                        </h1>

                        <div class="bg-teal-200 text-teal-700 border-teal-300 border w-10 h-10 rounded-full flex justify-center items-center">
                            <i class="fad fa-eye"></i>
                        </div>
                    </div>                
                    <div class="analytics_1"></div>
                </div>

                <div class="card">
                    <div class="py-3 px-4 flex flex-row justify-between">                    
                        <h1 class="h6">
                            <span class="num-2"></span>k
                            <p>Pengunjung Baru</p>
                        </h1>

                        <div class="bg-indigo-200 text-indigo-700 border-indigo-300 border w-10 h-10 rounded-full flex justify-center items-center">
                            <i class="fad fa-users-crown"></i>
                        </div>
                    </div>
                    <div class="analytics_1"></div>
                </div>

            </div>
        </div>
    </div>

    <div class="grid grid-cols-5 gap-6 xl:grid-cols-2">
        <div class="card mt-6">
            <div class="card-body flex items-center">
                <div class="px-3 py-2 rounded bg-indigo-600 text-white mr-3">
                    <i class="fad fa-wallet"></i>
                </div>
                <div class="flex flex-col">
                    {{-- <h1 class="font-semibold">Total : {{$getCountStaff}}</h1> --}}
                    <p class="text-xs">Staff / Pengurus</p>
                </div>
            </div>
        </div>
        <div class="card mt-6">
            <div class="card-body flex items-center">
                <div class="px-3 py-2 rounded bg-green-600 text-white mr-3">
                    <i class="fad fa-shopping-cart"></i>
                </div>
                <div class="flex flex-col">
                    <h1 class="font-semibold">Total : 6</h1>
                    <p class="text-xs">Division / Divisi</p>
                </div>
            </div>
        </div>
        <div class="card mt-6 xl:mt-1">
            <div class="card-body flex items-center">
                <div class="px-3 py-2 rounded bg-yellow-600 text-white mr-3">
                    <i class="fad fa-blog"></i>
                </div>
                <div class="flex flex-col">
                    {{-- <h1 class="font-semibold">Total : {{$getCountArticle + $getCountNews}}</h1> --}}
                    <p class="text-xs">Post / Postingan</p>
                </div>
            </div>
        </div>
        <div class="card mt-6 xl:mt-1">
            <div class="card-body flex items-center">
                <div class="px-3 py-2 rounded bg-red-600 text-white mr-3">
                    <i class="fad fa-comments"></i>
                </div>
                <div class="flex flex-col">
                    {{-- <h1 class="font-semibold">Total : {{$getCountProker}}</h1> --}}
                    <p class="text-xs">Agenda / Proker</p>
                </div>
            </div>
        </div>
        <div class="card mt-6 xl:mt-1 xl:col-span-2">
            <div class="card-body flex items-center">
                <div class="px-3 py-2 rounded bg-pink-600 text-white mr-3">
                    <i class="fad fa-user"></i>
                </div>
                <div class="flex flex-col">
                    {{-- <h1 class="font-semibold">Total : {{$getCountSosmed}}</h1> --}}
                    <p class="text-xs">Media Sosial</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection