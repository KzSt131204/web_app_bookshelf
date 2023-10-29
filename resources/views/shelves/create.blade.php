@extends('layouts.default')
@section('content')
    <form action="/shelves" method="POST">
        @csrf
        <div class="name">
            <h2>Shelf Name</h2>
            <input type="text" name="shelf[name]" placeholder="本棚の名前"/>
        </div>
            <input type="submit" value="保存"/>
    </form>
 <div class="footer">
            <a href="/">戻る</a>
        </div>
@endsection