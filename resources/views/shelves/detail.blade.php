@extends('layouts.default')

@section('content')

<div class='detail'>
     <h2 class='title'>{{ $book->title }}</h2>
        <h3 class='author'>{{ $book->author}}</h3>
        <h3 class='publisher'>{{ $book->publisher}}</h3>
</div>
<div class=register>
    <a href='/books/register/{{ $book->id }}'>本棚へ追加</a>
    </div>
 <div class="footer">
        <a href="/book">戻る</a>
    </div>
@endsection