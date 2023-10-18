@extends('layouts.default')
@section('content')
<div class='books'>
 @foreach($shelf->books as $book)
  <h3 class='title'>{{ $book->title}}</h3>
  
  <h5 class='auther'> {{ $book->auther}} </h5>
   
   <h5 class='publisher'>{{ $book->publisher}} </h5>
  
 @endforeach
 
</div>
 <div class="footer">
            <a href="/">戻る</a>
        </div>
@endsection