<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class UserDashboardController extends Controller
{
    private $param;
    public function index(){
        try {

            $this->param['countAllBook'] = Book::count();
            $this->param['countFictionBook'] = Book::where('category_book_id', 1)->count();
            $this->param['countNonFictionBook'] = Book::where('category_book_id', 2)->count();

            $this->param['countAllBookUser'] = Book::where('user_id', \Auth::id())->count();
            $this->param['countFictionBookUser'] = Book::where('category_book_id', 1)->where('user_id', \Auth::id())->count();
            $this->param['countNonFictionBookUser'] = Book::where('category_book_id', 2)->where('user_id', \Auth::id())->count();

            return view('user.pages.dashboard.dashboard', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
