<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BookUserExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $user_id;
    protected $categoryId;
    public function __construct($user_id, $categoryId)
    {
        $this->user_id = $user_id;
        $this->categoryId = $categoryId;
    }
    public function collection()
    {
        if ($this->categoryId == null) {
            return Book::where('user_id', $this->user_id)->get();
        } else {
            return Book::where('user_id', $this->user_id)->where('category_book_id', $this->categoryId)->get();
        }
    }

    public function headings(): array
    {
        return [
            'id',
            'Judul',
            'Kategori',
            'Deskripsi',
            'Jumlah',
            'Cover',
            'File',
            'User'
        ];
    }

    public function map($book): array
    {
        return [
            $book->id,
            $book->title,
            $book->categoryBook->name,
            $book->description,
            $book->qty,
            config('app.url')."assets/upload/cover/".$book->cover,
            config('app.url')."assets/upload/file/".$book->file,
            $book->user->name
        ];
    }
}
