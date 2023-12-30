<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryBook;

class AdminCategoryBookController extends Controller
{
    private $param;
    public function index()
    {
        $this->param['getAllCategoryBook'] = CategoryBook::all();
        return view('admin.pages.category-book.page-list-category-book', $this->param);
    }

    public function store(Request $request)
    {
        $this->validate($request, 
        [
            'name' => 'required',
        ],
        [
            'required' => ':attribute harus diisi.',
        ],
        [
            'name' => 'Nama Kategori Buku',
        ]);

        try {
            $category = new CategoryBook();
            $category->name = $request->name;
            $category->save();
            return redirect('/back-admin/category')->withStatus('Berhasil menambah data.');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }

    }

    public function edit(CategoryBook $category)
    {
        try {
            $this->param['getDetailCategoryBook'] = CategoryBook::find($category->id);
            return view('admin.pages.category-book.page-edit-category-book', $this->param);
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function update(Request $request, CategoryBook $category)
    {
        $this->validate($request, 
        [
            'name' => 'required'
        ],
        [
            'required' => ':attribut harus diisi.'
        ],
        [
            'name' => 'Nama Visi'
        ]);

        try {
            $category = CategoryBook::find($category->id);
            $category->name =  $request->name;
            $category->save();
            return redirect('/back-admin/category')->withStatus('Berhasil memperbarui data.');
        } catch(\Throwable $e){
            return redirect('/back-admin/category')->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect('/back-admin/category')->withError($e->getMessage());
        }
    }

    public function destroy(CategoryBook $category)
    {
        try {
            CategoryBook::find($category->id)->delete();
            return redirect('/back-admin/category')->withStatus('Berhasil menghapus data.');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
