@extends('layouts.default')


  
@section('content')

<form action="/books/{{ $book->id }}" method="POST">
    @csrf
    <div>
        <h2>
           {{ $book->title }}を登録する本棚を選択してください
        </h2>
        
<input type="hidden" name="book_id" value="{{ $book->id }}">

<select name="shelf" id="shelf">
    @forelse($userWithShelves->shelves as $shelf)
        <option value="{{ $shelf->id }}">{{ $shelf->name }}</option>
    @empty
        <option value="empty">本棚がありません</option>
    @endforelse
</select>

     
</div>

        <button type="submit" class="btn btn-primary">登録</button>



    </form>
    
    
 <div class="footer">
            <a href="/books">戻る</a>
        </div>
@endsection