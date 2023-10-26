<?php

namespace App\Http\Controllers;

use App\Models\Book;

use App\Models\Shelf;

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
    
    public function register(Book $book, Shelf $shelf)
    {
        $shelves = $shelf->get();
        return view('shelves.register')->with(['book' => $book, 'shelves' => $shelves]);
    }
    
    public function uproad(Request $request, Book $book, Shelf $shelf)
{
    // $input_book = $book;
    $input_shelves = $request['shelf'];  
    

    // $book->fill($input_book)->save();
    

    $book->shelves()->attach($input_shelves); 
    return redirect('/book');
}

}
