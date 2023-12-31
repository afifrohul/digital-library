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
        $book->qty = 11;
        $book->file = 'ayah.pdf';
        $book->cover = 'ayah.jpg';
        $book->user_id = 1;
        $book->created_at = now();
        $book->updated_at = now();
        $book->save();

        $book = new \App\Models\Book();
        $book->title = 'Sebuah Seni untuk Bersikap Bodo Amat';
        $book->category_book_id = 2;
        $book->description = "Sebuah Seni untuk Bersikap Bodo Amat adalah buku pertama karya Mark Manson, seorang narablog kenamaan dengan lebih dari 2 juta pembaca. Ia tinggal di kota New York.";
        $book->qty = 6;
        $book->file = 'bodoamat.pdf';
        $book->cover = 'bodoamat.jpg';
        $book->user_id = 1;
        $book->created_at = now();
        $book->updated_at = now();
        $book->save();
        
        $book = new \App\Models\Book();
        $book->title = 'Atomic Habbit';
        $book->category_book_id = 2;
        $book->description = "Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa adalah buku kategori self improvement karya James Clear. Pada umumnya, perubahan-perubahan kecil seringkali terkesan tak bermakna karena tidak langsung membawa perubahan nyata pada hidup suatu manusia.";
        $book->qty = 5;
        $book->file = 'atomichabbit.pdf';
        $book->cover = 'atomichabbit.png';
        $book->user_id = 2;
        $book->created_at = now();
        $book->updated_at = now();
        $book->save();

        $book = new \App\Models\Book();
        $book->title = 'Laskar Pelangi';
        $book->category_book_id = 1;
        $book->description = "Laskar Pelangi adalah novel pertama karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada tahun 2005. Novel ini bercerita tentang kehidupan 10 anak dari keluarga miskin yang bersekolah (SD dan SMP) di sebuah sekolah Muhammadiyah di Belitung yang penuh dengan keterbatasan.";
        $book->qty = 4;
        $book->file = 'laskarpelangi.pdf';
        $book->cover = 'laskarpelangi.jpg';
        $book->user_id = 2;
        $book->created_at = now();
        $book->updated_at = now();
        $book->save();

        $book = new \App\Models\Book();
        $book->title = 'Sang Pemimpi';
        $book->category_book_id = 1;
        $book->description = "Sang Pemimpi adalah novel kedua dalam tetralogi Laskar Pelangi karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada Juli 2006.";
        $book->qty = 14;
        $book->file = 'sangpemimpi.pdf';
        $book->cover = 'sangpemimpi.jpg';
        $book->user_id = 3;
        $book->created_at = now();
        $book->updated_at = now();
        $book->save();

        $book = new \App\Models\Book();
        $book->title = 'Seni Berbicara kepada Siapa Saja, Kapan Saja, dan Kapan Saja';
        $book->category_book_id = 2;
        $book->description = "Salah satu hal yang saya pelajari adalah tidak ada orang yang tidak bisa diajak bicara bila kita memiliki sifat yang tepat. Setelah membaca buku ini, Anda akan mampu mengikuti segala percakapan dengan penuh keyakinan, dan Anda akan tahu cara menyampaikan pesan dengan efektif,";
        $book->qty = 9;
        $book->file = 'seniberbicara.pdf';
        $book->cover = 'seniberbicara.jpg';
        $book->user_id = 3;
        $book->created_at = now();
        $book->updated_at = now();
        $book->save();

    }
}
