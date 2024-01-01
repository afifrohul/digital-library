@extends('user.layouts.app')
@section('extraCSS')
<link href="{{ asset('assets/vendor-admin/summernote/summernote.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div>
    <a href="{{url('/back-user/bookUser/add')}}" class="btn-shadow w-56">Tambah Buku</a>
</div>
<div class="mt-6 grid grid-cols-2 gap-6">
    <div class="card mb-6">
        <div class="card-body">
            <label class="text-gray-700 ml-1">Filter berdasarkan kategori buku </label>
            <div class="flex gap-6">
                <form method="GET" action="{{url('/back-user/bookUser')}}">
                    <div class="mt-5">
                        <button type="submit" class="btn-shadow">Semua</button>
                    </div>
                </form>
                @foreach ($getAllCategoryBook as $itemCategoryBook)
                <form method="GET" action="{{url('/back-user/bookUser?category_book_id='.$itemCategoryBook->id)}}">
                    <div class="mt-5">
                        <input type="number" value="{{$itemCategoryBook->id}}" class="hidden" name="category_book_id">
                        <button type="submit" class="btn-shadow">{{$itemCategoryBook->name}}</button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card mb-6">
        <div class="card-body">
            <label class="text-gray-700 ml-1">Export Data Buku berdasarkan Kategori </label>
            <div class="flex gap-6">
                <a href="{{url('/bookUser/export?user_id='.Auth::user()->id)}}" target="_blank" class="mt-5 btn-shadow">Semua</a>
                @foreach ($getAllCategoryBook as $itemCategoryBook)
                <a href="{{url('/bookUser/export?user_id='.Auth::user()->id.'&category_book_id='.$itemCategoryBook->id)}}" target="_blank" class="mt-5 btn-shadow">{{$itemCategoryBook->name}}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div>
    <div class=" grid gap-6 grid-cols-4">
        @forelse ($getAllBook as $item)
        <div class="bg-white col-span-2 border rounded-lg shadow-md relative">
            <div class="absolute right-0 justify-end px-4 pt-3">
                <button id="dropdownButton-{{$item->id}}" data-dropdown-toggle="dropdown-{{$item->id}}" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                    <span class="sr-only">Buka Menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                </button>
                <div id="dropdown-{{$item->id}}" class="hidden z-10 px-3 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                    <ul class="py-1" aria-labelledby="dropdownButton-{{$item->id}}" style="list-style-type: none; padding-inline-start: 0px;">
                    <li>
                        <form action="{{url('/back-user/book/edit',$item->id)}}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</button>
                        </form>
                    </li>
                    <li>
                        <form action="{{url('/back-user/book/destroy',$item->id)}}" method="POST" class="inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="block py-2 px-4 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" onclick="return confirm('Hapus Data ?')">Delete</button>
                        </form>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="rounded-lg bg-white shadow-lg">
                    <img class="h-full w-full md:h-auto object-cover rounded-l-lg md:rounded-none md:rounded-l-lg" src="{{asset('assets/upload/cover/'.$item->cover)}}" alt="cover-{{$loop->iteration}}" />
                </div>
                <div class="p-6 col-span-2 justify-start">
                    <h5 class="text-gray-900 text-xl font-bold my-3">Data Buku</h5>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left">
                            <tbody>
                                <tr class="border-b">
                                    <th scope="row" class="py-2 pl-4 border font-semibold whitespace-nowrap">
                                        Judul
                                    </th>
                                    <td class="py-2 px-2 border">
                                        {{$item->title}}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="row" class="py-2 pl-4 border font-semibold whitespace-nowrap">
                                        Kategori
                                    </th>
                                    <td class="py-2 px-2 border">
                                        {{$item->categoryBook->name}}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="row" class="py-2 pl-4 border font-semibold whitespace-nowrap">
                                        Deskripsi
                                    </th>
                                    <td class="py-2 px-2 border">
                                        {!!Str::limit($item->description, 30)!!}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="row" class="py-2 pl-4 border font-semibold whitespace-nowrap">
                                        Jumlah
                                    </th>
                                    <td class="py-2 px-2 border">
                                        {{$item->qty}}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="row" class="py-2 pl-4 border font-semibold whitespace-nowrap">
                                        File
                                    </th>
                                    <td class="py-2 px-2 border">
                                        <a target="_blank" class="underline font-semibold" href="{{asset('assets/upload/file')}}/{{$item->file}}">Lihat File</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>  
        @empty
        <div class="col-span-4 w-full items-center justify-center bg-grey-200 py-28">
            <div class="flex flex-col">
                <div class="flex flex-col items-center">
                    <div class="text-indigo-500 font-bold text-7xl">
                        No Matching Records Found
                    </div>
                </div>
            </div>
        </div>
        @endforelse
        {{ $getAllBook->links() }}
    </div>

    
</div>
<script>
    images.onchange = evt => {
        const [file] = images.files;
        if (file) {
            preview.src = URL.createObjectURL(file);
            fileName.innerHTML = document.getElementById("images").value.split("\\").pop();
        }
    }
</script>
@endsection
@section('extraJS')
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
@endsection