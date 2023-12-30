<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBook extends Model
{
    use HasFactory;
    protected $table = 'category_books';
    protected $primaryKey = 'id';

    public function book()
    {
        return $this->hasMany(Book::class);
    }
}