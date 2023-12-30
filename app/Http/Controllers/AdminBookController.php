<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\CategoryBook;
use File;

class AdminBookController extends Controller
{
    private $param;
    public function index()
    {
        $this->param['getAllBook'] = Book::all();
        $this->param['getAllCategoryBook'] = CategoryBook::all();
        return view('admin.pages.book.page-list-book', $this->param);
    }

    public function store(Request $request)
    {
        $this->validate($request, 
        [
            'title' => 'required',
            'description' => 'required',
            'qty' => 'required'
        ],
        [
            'required' => ':attribute harus diisi.',
        ],
        [
            'title' => 'Judul Buku',
            'description' => 'Deksripsi Buku',
            'qty' => 'Jumlah Buku'
        ]);

        try {
            $date = date('H-i-s');
            $random = \Str::random(5);

            $book = new Book();
            $book->title = $request->title;
            $book->category_book_id = $request->category_book_id;
            $book->description = $request->description;
            $book->qty = $request->qty;

            if ($request->file('file')) {
                $request->file('file')->move('assets/upload/file', $date.$random.$request->file('file')->getClientOriginalName());
                $book->file = $date.$random.$request->file('file')->getClientOriginalName();
            } else {
                $book->file = "default.pdf";
            }

            if ($request->file('image')) {
                $request->file('image')->move('assets/upload/cover', $date.$random.$request->file('image')->getClientOriginalName());
                $book->cover = $date.$random.$request->file('image')->getClientOriginalName();
            } else {
                $book->cover = "default.png";
            }
            $book->save();
            return redirect('/back-admin/book')->withStatus('Berhasil menambah data.');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }

    }

    public function destroy(Book $book)
    {
        try {
            Book::find($book->id)->delete();
            File::delete('assets/upload/cover/'.$book->cover);
            File::delete('assets/upload/file/'.$book->file);
            return redirect('/back-admin/book')->withStatus('Berhasil menghapus data.');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
