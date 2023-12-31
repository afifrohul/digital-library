@extends('admin.layouts.app')
@section('content')
<div>
    <div class="card">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">List API</h1>
        </div>
        <div class="card-body">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Keterangan
                            </th>
                            <th scope="col" class="w-96 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Endpoin
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Link
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">1.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil data Kategori Buku</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/categoryBook</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/categoryBook')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">2.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil semua data buku</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/book</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/book')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900">3.</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">Mengambil data buku param:user_id</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-left">
                                <div class="text-sm text-gray-900">/book/{user_id}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="text-sm text-gray-900"><a class="p-3 rounded bg-teal-400 hover:bg-teal-700" href="{{url('api/book/{user_id}')}}" target="__">Klik Disini</a></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection