@extends('layouts.default')

@section('content')

<form action="/books/{{ $book->id }}" method="POST">
    @csrf
    <div>
        <h2>
           {{ $book->title }}を登録する本棚を選択してください
        </h2>
        <select name="shelf[shelf_id]">
        @foreach($shelves as $shelf)
            <option value="{{ $shelf->id }}">{{ $shelf->name }}</option>
        @endforeach
        
        <input type="submit" value="登録"　unique/>
    </form>
 <div class="footer">
            <a href="/">戻る</a>
        </div>
@endsection