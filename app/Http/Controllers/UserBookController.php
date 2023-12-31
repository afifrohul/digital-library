<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\CategoryBook;
use Illuminate\Support\Facades\Auth;
use File;

class UserBookController extends Controller
{
    private $param;
    public function index(Request $request)
    {
        $categoryId = $request->get('category_book_id');
        
        if ($categoryId == null) {
            $this->param['getAllBook'] = Book::all();
        } else {
            $this->param['getAllBook'] = Book::where('category_book_id', $categoryId)->get();

        }

        $this->param['getAllCategoryBook'] = CategoryBook::all();
        return view('user.pages.book.page-list-book', $this->param);
    }
    
    public function indexUser(Request $request)
    {
        $categoryId = $request->get('category_book_id');
        
        if ($categoryId == null) {
            $this->param['getAllBook'] = Book::where('user_id', \Auth::id())->get();
        } else {
            $this->param['getAllBook'] = Book::where('user_id', \Auth::id())->where('category_book_id', $categoryId)->get();

        }
        $this->param['getAllCategoryBook'] = CategoryBook::all();
        return view('user.pages.book.page-list-book-user', $this->param);
    }

    public function add()
    {
        $this->param['getAllCategoryBook'] = CategoryBook::all();
        return view('user.pages.book.page-add-book', $this->param);
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
            $book->user_id = Auth::id();
            $book->save();
            return redirect('/back-user/book')->withStatus('Berhasil menambah data.');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }

    }

    public function edit(Book $book)
    {
        try {$this->param['getAllCategoryBook'] = CategoryBook::all();
            $this->param['getDetailBook'] = Book::find($book->id);
            return view('user.pages.book.page-edit-book', $this->param);
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function update(Request $request, Book $book)
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

            $book = Book::find($book->id);
            $book->title = $request->title;
            $book->category_book_id = $request->category_book_id;
            $book->description = $request->description;
            $book->qty = $request->qty;

            File::delete('assets/upload/file/'.$book->file);
            File::delete('assets/upload/cover/'.$book->cover);

            if ($request->file('file')) {
                $request->file('file')->move('assets/upload/file', $date.$random.$request->file('file')->getClientOriginalName());
                $book->file = $date.$random.$request->file('file')->getClientOriginalName();
            }

            if ($request->file('image')) {
                $request->file('image')->move('assets/upload/cover', $date.$random.$request->file('image')->getClientOriginalName());
                $book->cover = $date.$random.$request->file('image')->getClientOriginalName();
            } 
            $book->save();

            return redirect('/back-user/book')->withStatus('Berhasil menambah data.');
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
            return redirect('/back-user/book')->withStatus('Berhasil menghapus data.');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

}
