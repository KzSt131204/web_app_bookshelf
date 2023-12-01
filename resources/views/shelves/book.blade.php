@extends('layouts.default')
@section('content')

<div>
  <form action="{{ route('books') }}" method="GET">
    <input type="text" name="keyword" value="{{ $keyword }}">
    <input type="submit" value="検索">
  </form>
</div>

<div class='books'>

         <table align="center"  border="2">
             
@forelse($books as $book)
    <div class='book'>
       
        <tr>
            <a href="/books/{{ $book->id}}/detail">{{ $book->title }}</a>
        </tr>
       
    </div>
    
@empty
    <h2>なにもないよ</h2>
    
@endforelse
 </table>
</div>

 <div class='paginate'>
        {{ $books->appends(['keyword' => $keyword ?? '' ])->links() }}
    </div>

<div class=newBook>
    <h2>お探しの本がない場合は
    <a href= '/books/new'><font color="#00BFFF">コチラ</font></a>
    から登録をお願いします
    </h2>
</div>

@endsection