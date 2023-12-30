@extends('admin.layouts.app')
@section('content')
<div>
    <div class="card mb-8">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Edit staff</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('/staff/update',$getDetailStaff->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div>
                    <label class="text-gray-700 ml-1">Nama : </label>
                    <input type="text" name="name" class="form-input w-full block rounded mt-1 p-3 border-2 @error('name') border-red-500 @enderror focus:outline-none focus:border-teal-500" placeholder="Informatics Olympiad" value="{{$getDetailStaff->name}}">
                    @error('name')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="">
                    <label class="text-gray-700 ml-1">Divisi : </label>
                    <select name="division_role_id" class="form-input mt-1 p-3 border-2 @error('division_role_id') border-red-500 @enderror focus:outline-none focus:border-teal-500 form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0">
                    @foreach ($getAllDivisionRole as $itemDivisionRole)
                        <option value="{{$itemDivisionRole->id}}" @if ($getDetailStaff->division_role_id == $itemDivisionRole->id) selected @endif>{{$itemDivisionRole->role}} - {{$itemDivisionRole->name}}</option>
                    @endforeach
                    </select>
                    @error('division_role_id')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="">
                    <label class="text-gray-700 ml-1">Periode : </label>
                    <select name="period_id" class="form-input mt-1 p-3 border-2 @error('period_id') border-red-500 @enderror focus:outline-none focus:border-teal-500 form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0">
                    @foreach ($getAllPeriod as $itemPeriod)
                        <option value="{{$itemPeriod->id}}" @if ($getDetailStaff->period_id == $itemPeriod->id) selected @endif>{{$itemPeriod->period_name}} - {{$itemPeriod->period_year}}</option>
                    @endforeach
                    </select>
                    @error('period_id')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700 ml-1">Link Instagram : </label>
                    <input type="text" name="ig_link" class="form-input w-full block rounded mt-1 p-3 border-2 @error('ig_link') border-red-500 @enderror focus:outline-none focus:border-teal-500" placeholder="Informatics Olympiad" value="{{$getDetailStaff->ig_link}}">
                    @error('ig_link')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700 ml-1">Link Github : </label>
                    <input type="text" name="gh_link" class="form-input w-full block rounded mt-1 p-3 border-2 @error('gh_link') border-red-500 @enderror focus:outline-none focus:border-teal-500" placeholder="Informatics Olympiad" value="{{$getDetailStaff->gh_link}}">
                    @error('gh_link')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-700 ml-1">Link LinkedIn : </label>
                    <input type="text" name="li_link" class="form-input w-full block rounded mt-1 p-3 border-2 @error('li_link') border-red-500 @enderror focus:outline-none focus:border-teal-500" placeholder="Informatics Olympiad" value="{{$getDetailStaff->li_link}}">
                    @error('li_link')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label class="text-gray-700 ml-1">Status : </label>
                    <select name="status" class="form-input mt-1 p-3 border-2 @error('status') border-red-500 @enderror focus:outline-none focus:border-teal-500 form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0">
                        <option value="pengurus" @if ($getDetailStaff->status == 'pengurus') selected @endif>Pengurus</option>
                        <option value="demisioner" @if ($getDetailStaff->status == 'demisioner') selected @endif>Demisioner</option>
                        <option value="deactive" @if ($getDetailStaff->status == 'deactive') selected @endif>Tidak Aktif</option>
                    </select>
                    @error('status')
                    <span class="pl-1 text-xs text-red-600 text-bold">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mt-3 grid grid-cols-2 gap-6 xl:grid-cols-1 items-center">
                    <div>
                        <label class="text-gray-700 ml-1">Foto : </label>
                        <div class='flex items-center justify-center w-full mt-2'>
                            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-teal-500 group'>
                                <div class='flex flex-col items-center justify-center pt-7 text-center'>
                                    <svg class="w-10 h-10 mt-8 text-teal-500 group-hover:text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <p class='text-sm text-gray-400 group-hover:text-teal-600 pt-1 tracking-wider' id="fileName">Pilih Gambar</p>
                                </div>
                            <input type='file' class="hidden" name="image" id="images" />
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="text-gray-700 ml-1">Preview : </label>
                        <div class='flex items-center justify-center w-full mt-2'>
                            <label class='flex flex-col border-4 border-dashed w-full h-auto border-teal-500 group bg-gray-300'>
                                    <div class='flex flex-col items-center justify-center py-1'>
                                        <img id="preview" src="{{asset('assets/upload/staff')}}/{{$getDetailStaff->image}}" alt="preview" class="object-cover h-32">
                                    </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn-shadow">Simpan</button>
                </div>
            </form>
        </div>
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