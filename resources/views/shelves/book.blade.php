@extends('layouts.default')
@section('content')

<div class='books'>
@foreach($books as $book)
<div class='book'>
    <h2 class=title>
    <a href="/books/{{ $book->id}}/detail">{{ $book->title }}</a>
    </h2>
        </div>
@endforeach
</div>
<div class=post>
    <a></a>
</div>

@endsection