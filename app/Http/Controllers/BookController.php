<?php

namespace App\Http\Controllers;

use APP\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
     public function index()
    {
        return view('books.index')->with(['books' => $book->get()
        ]); 
        
    }
}
