<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BookExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $categoryId;
    public function __construct($categoryId)
    {
        $this->categoryId = $categoryId;
    }
    public function collection()
    {
        if ($this->categoryId == null) {
            return Book::all();
        } else {
            return Book::where('category_book_id', $this->categoryId)->get();
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
