@extends('layouts.default')

@if( session('flash') )
    @foreach (session('flash') as $key => $item)
      <div class="alert alert-{{ $key }}">{{ session('flash.' . $key) }}</div>
    @endforeach
  @endif
  
@section('content')

        <div>  
    @if ($errors->any())  
        <ul>  
            @foreach ($errors->all() as $error)  
                <li>{{ $error }}</li>  
            @endforeach  
        </ul>  
    @endif  
</div>

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
        
</div>

        <input type="submit" value="登録"/>



    </form>
    
    
 <div class="footer">
            <a href="/books">戻る</a>
        </div>
@endsection