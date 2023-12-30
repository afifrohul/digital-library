<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new \App\Models\Book();
        $book->title = 'Ayah';
        $book->category_book_id = 1;
        $book->description = "Ayah adalah sebuah novel fiksi yang ditulis Andrea Hirata, dan di terbitkan oleh Bentang Pustaka pada 2015. Novel ini berkisah tentang perjuangan serta perasaan sayang seorang ayah kepada anaknya, tanpa mengenal ikatan darah sekalipun.";
        $book->qty = 1;
        $book->file = 'ayah.pdf';
        $book->cover = 'ayah.jpg';
        $book->created_at = now();
        $book->updated_at = now();
        $book->save();

        $book = new \App\Models\Book();
        $book->title = 'Sebuah Seni untuk Bersikap Bodo Amat';
        $book->category_book_id = 2;
        $book->description = "Sebuah Seni untuk Bersikap Bodo Amat adalah buku pertama karya Mark Manson, seorang narablog kenamaan dengan lebih dari 2 juta pembaca. Ia tinggal di kota New York.";
        $book->qty = 1;
        $book->file = 'bodoamat.pdf';
        $book->cover = 'bodoamat.jpg';
        $book->created_at = now();
        $book->updated_at = now();
        $book->save();
    }
}
