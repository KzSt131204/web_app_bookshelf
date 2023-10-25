@extends('layouts.default')
@section('content')

<div class='books'>
@foreach($books as $book)
<div class='book'>
    <h2 class=title>
    <a href="/books/{{ $book->id}}">{{ $book->title }}</a>
    </h2>
        </div>
@endforeach
</div>

@endsection