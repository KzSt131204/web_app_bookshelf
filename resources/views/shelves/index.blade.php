@extends('layouts.default')
@section('content')

 <h1>本棚一覧</h1>
        <div class='shelves'>
            @forelse ($shelves as $shelf)
                
                <div class='shelf'>
                    <h2 class=name>
                        <a href="/shelves/{{ $shelf->id}}">{{ $shelf->name }}</a>
                        </h2>



                </div>
                

            @empty
                <h2>下のボタンから本棚を作ろう</h2>
                
            @endforelse
        </div>
        
    <div class='paginate'>
        {{ $shelves->links() }}
    </div>
        
<a href='/shelves/create'>新規作成</a>


@endsection