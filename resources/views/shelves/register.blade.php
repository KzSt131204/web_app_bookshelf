@extends('layouts.default')

@section('content')

<form action="/books/{{ $book->id }}" method="POST">
    @csrf
    <div>
        <h2>
            登録する本棚の選択
        </h2>
        <select name="shelf[shelf_id]">
        @foreach($shelves as $shelf)
            <option value="{{ $shelf->id }}">{{ $shelf->name }}</option>
        @endforeach
        
        <input type="submit" value="登録"/>
    </form>
 <div class="footer">
            <a href="/">戻る</a>
        </div>
@endsection