<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_book = new \App\Models\CategoryBook();
        $category_book->name = 'Fiksi';
        $category_book->created_at = now();
        $category_book->updated_at = now();
        $category_book->save();
        
        $category_book = new \App\Models\CategoryBook();
        $category_book->name = 'Non Fiksi';
        $category_book->created_at = now();
        $category_book->updated_at = now();
        $category_book->save();
    }
}
