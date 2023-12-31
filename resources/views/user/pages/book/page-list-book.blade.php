@extends('user.layouts.app')
@section('extraCSS')
<link href="{{ asset('assets/vendor-admin/summernote/summernote.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="grid grid-cols-2 gap-6">
    <div class="card mb-6 ">
        <div class="card-body">
            <label class="text-gray-700 ml-1">Filter berdasarkan kategori buku </label>
            <div class="flex gap-6">
                <form method="GET" action="{{url('/back-user/book')}}">
                    <div class="mt-5">
                        <button type="submit" class="btn-shadow">Semua</button>
                    </div>
                </form>
                @foreach ($getAllCategoryBook as $itemCategoryBook)
                <form method="GET" action="{{url('/back-user/book?category_book_id='.$itemCategoryBook->id)}}">
                    <div class="mt-5">
                        <input type="number" value="{{$itemCategoryBook->id}}" class="hidden" name="category_book_id">
                        <button type="submit" class="btn-shadow">{{$itemCategoryBook->name}}</button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card mb-6 ">
        <div class="card-body">
            <label class="text-gray-700 ml-1">Export Data Buku berdasarkan kategori </label>
            <div class="flex gap-6">
                <a href="{{url('/book/export')}}" target="_blank" class="mt-5 btn-shadow">Semua</a>
                @foreach ($getAllCategoryBook as $itemCategoryBook)
                <a href="{{url('/book/export?category_book_id='.$itemCategoryBook->id)}}" target="_blank" class="mt-5 btn-shadow">{{$itemCategoryBook->name}}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div>
    <div class="mt-6 grid gap-6 grid-cols-4">
        @forelse ($getAllBook as $item)
        <div class="bg-white col-span-2 border rounded-lg shadow-md relative">
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
                                <tr class="border-b">
                                    <th scope="row" class="py-2 pl-4 border font-semibold whitespace-nowrap">
                                        User
                                    </th>
                                    <td class="py-2 px-2 border">
                                        {{$item->user->name}}
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
    </div>
</div>
<script>
    var books = @json($getAllBook);
    console.log(books);

</script>
@endsection
@section('extraJS')
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
@endsection