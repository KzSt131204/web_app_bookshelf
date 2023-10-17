<?php

namespace App\Http\Controllers;

use APP\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
     public function index()
    {
        return view('shelves.book')->with(['books' => $book->get()
        ]); 
        
    }
}
