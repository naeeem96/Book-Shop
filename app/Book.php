<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   protected $table = 'books';
   protected $fillable = ['book_name', 'book_author', 'book_publisher', 'book_page', 'book_edition', 'book_language', 'book_price'];
}
