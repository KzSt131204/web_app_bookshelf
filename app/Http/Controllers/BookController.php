<?php

namespace App\Http\Controllers;

use App\Models\Book;

use App\Models\Shelf;

use App\Models\User;

use App\Models\Tag;

use Illuminate\Http\Request;

use Illuminate\Database\QueryException;

use Illuminate\Validation\Rule;


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
    
public function register(Book $book)
{
    // ログインしているユーザーの情報を取得
    $user = \Auth::user();

    // ユーザーとその本棚を取得
    $userWithShelves = User::with('shelves')->find($user->id);

    return view('shelves.register', compact('userWithShelves', 'book'));
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
    // バリデーションルールの定義
$validator = \Validator::make($request->all(), [
    'shelf' => 'required',
    'book_id' => [
        'required',
        Rule::unique('book_shelf')->where(function ($query) use ($request) {
            return $query->where('shelf_id', $request->input('shelf'));
        }),
    ],
]);

// バリデーションが失敗した場合
if ($validator->fails()) {
    return view('shelves.duplication');
}

// リクエストから shelf データを取得
$input_shelves = $request->input('shelf');

// $book->shelves() が BelongsToMany リレーションである場合
// attach() メソッドを使用して中間テーブルにデータを挿入
$book->shelves()->attach($input_shelves);

return redirect('/books');
}

public function eject(Request $request, Book $book, Shelf $shelf)
{
    $input_shelves = $request['shelf'];  
    $book->shelves()->dettach($input_shelves); 
    return redirect('/books');
}

}
