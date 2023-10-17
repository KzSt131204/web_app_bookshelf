@extends('layouts.default')
@section('content')

 <h1>本棚一覧</h1>
        <div class='shelves'>
            @foreach ($shelves as $shelf)
                <div class='shelf'>
                    <h2 class=name>{{ $shelf->name }}</h2>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $shelves->links() }}
        </div>
<a href='/shelves/create'>新規作成</a>
@endsection