@extends('layouts.default')

@section('content')

<div class='detail'>
     <h2 class='title'>{{ $book->title }}</h2>
        <h3 class='auther'>{{ $book->auther}}</h3>
        <h3 class='publisher'>{{ $book->publisher}}</h3>
        </div>
        
@endsection