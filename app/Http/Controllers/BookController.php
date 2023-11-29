<?php

namespace App\Http\Controllers;

use App\Models\Book;

use App\Models\Shelf;

use App\Models\Tag;

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
          $books = $query->paginate(5);
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
    
    public function newBook(Book $book,)
    {
        return view('shelves.newBook');
    }
    
    public function add(Request $request, Book $book, Tag $tag)
    {
        $input = $request['book'];
        $book->fill($input)->save();
        return redirect('/books');
    }
    
    public function uproad(Request $request, Book $book, Shelf $shelf)
{
 $validated = $request->validate([
        'book_id' => 'required',
        'shelf_id' => 'required|unique:book_id,shelf_id'
    ]);
    if ($validator->fails()) {
            return redirect('/duplication')
                ->withInput()
                ->withErrors($validator);
    }
    $input_shelves = $request['shelf'];  
    $book->shelves()->attach($input_shelves); 
    return redirect('/books');
}

}
