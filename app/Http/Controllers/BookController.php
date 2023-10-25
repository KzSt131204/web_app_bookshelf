<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
     public function book(Book $book)
    {
        return view('shelves.book')->with(['books' => $book->getPaginateByLimit()
        ]); 
    }        
     public function detail(Book $book)
    {
            return view('shelves.detail')->with(['book' => $book]);
    }
}
