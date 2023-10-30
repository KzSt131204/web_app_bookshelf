<?php

namespace App\Http\Controllers;

use App\Models\Book;

use App\Models\Shelf;

use Illuminate\Http\Request;

class BookController extends Controller
{
     public function book(Book $book, Request $request)
    {
      
        
                $keyword = $request->input('keyword');

        $query = Book::query();

        if(!empty($keyword)) {
            $query->where('title', 'LIKE', "%{$keyword}%")
                ->orWhere('author', 'LIKE', "%{$keyword}%")
                ->orWhere('publisher', 'LIKE', "%{$keyword}%");
        }        
          $books = $query->get();
          
          return view('shelves.book', compact('books', 'keyword')); 
        
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
