@extends('layouts.default')
@section('content')

 <h1>本棚一覧</h1>
        <div class='shelves'>
            @forelse ($shelves as $shelf)
                
                <div class='shelf'>
                    <h2 class=name>
                        <a href="/shelves/{{ $shelf->id}}">{{ $shelf->name }}</a>
                        </h2>
                        
<!--<form action="/shelves/{{ $shelf->id }}" id="form_{{ $shelf->id }}" method="post">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-danger" onclick="deleteShelf({{ $shelf->id }})">本棚の消去</button> 
</form>-->


                </div>
                

            @empty
                <h2>下のボタンから本棚を作ろう</h2>
                
            @endforelse
        </div>
        
    <div class='paginate'>
        {{ $shelves->links() }}
    </div>
        
<a href='/shelves/create'>新規作成</a>

<script>
    function deleteShelf(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
    </script>
@endsection