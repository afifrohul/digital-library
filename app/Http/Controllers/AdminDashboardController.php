<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;

class AdminDashboardController extends Controller
{
    private $param;
    public function index(){
        try {

            $this->param['countAdmin'] = User::whereHas("roles", function($thisRole) {
                $thisRole->where('name', 'admin');
            })->count();

            $this->param['countUser'] = User::whereHas("roles", function($thisRole) {
                $thisRole->where('name', 'user');
            })->count();
            $this->param['countAllBook'] = Book::count();
            $this->param['countFictionBook'] = Book::where('category_book_id', 1)->count();
            $this->param['countNonFictionBook'] = Book::where('category_book_id', 2)->count();

            return view('admin.pages.dashboard.dashboard', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
