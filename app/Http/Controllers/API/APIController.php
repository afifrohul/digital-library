<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\categoryBook;

class APIController extends Controller
{
    private $param;
    public function categoryBook()
    {
        $status = '';
        $message = '';
        $data = '';

        try {
            $categoryBook = CategoryBook::all();
            $status = 'success';
            $message = 'berhasil';
            $data = $categoryBook;
        }catch(\Exception $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        finally{
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data
            ], 200);
        }
    }
    
    public function book()
    {
        $status = '';
        $message = '';
        $data = '';

        try {
            $book = Book::with(['user', 'categoryBook'])->get();
            $status = 'success';
            $message = 'berhasil';
            $data = $book;
        }catch(\Exception $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        finally{
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data
            ], 200);
        }
    }
    
    public function bookUser(Request $request)
    {
        $status = '';
        $message = '';
        $data = '';

        try {
            $book = Book::with(['user', 'categoryBook'])->where('user_id', $request->user_id)->get();
            $status = 'success';
            $message = 'berhasil';
            $data = $book;
        }catch(\Exception $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        catch(\Illuminate\Database\QueryException $e){
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
        }
        finally{
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data
            ], 200);
        }
    }

}
