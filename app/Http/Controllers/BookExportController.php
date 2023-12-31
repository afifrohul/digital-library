<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\BookExport;
use App\Exports\BookUserExport;
use Maatwebsite\Excel\Facades\Excel;

class BookExportController extends Controller
{
    public function export(Request $request)
	{
        $categoryId = $request->input('category_book_id');
		return Excel::download(new BookExport($categoryId), 'book.xlsx');
	}
    
    public function exportUser(Request $request)
	{
        $categoryId = $request->input('category_book_id');
        $user_id = $request->input('user_id');
		return Excel::download(new BookUserExport($user_id, $categoryId), 'bookUser.xlsx');
	}
}
