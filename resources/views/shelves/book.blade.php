@extends('layouts.default')
@section('content')

<div>
  <form action="{{ route('shelves.book') }}" method="GET">
    <input type="text" name="keyword" value="{{ $keyword }}">
    <input type="submit" value="検索">
  </form>
</div>

<div class='books'>
    
@forelse($books as $book)
    <div class='book'>
        <h2 class=title>
            <a href="/books/{{ $book->id}}/detail">{{ $book->title }}</a>
        </h2>
    </div>
    
@empty
    <h2>なにもないよ</h2>
    
@endforelse

</div>

<div class=add>
    <a></a>
</div>

@endsection