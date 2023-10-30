@extends('layouts.default')
@section('content')
    <form action="/books" method="POST">
        @csrf
        <div class="title">
            <h2>タイトル</h2>
            <input type="text" name="book[title]" placeholder="本のタイトル"/>
        </div>
        
        <div class="author">
            <h2>著者</h2>
            <input type="text" name="book[author]" placeholder="本の著者"/>
        </div>
        
        <div class="publisher">
            <h2>出版社</h2>
            <input type="text" name="book[publisher]" placeholder="出版社"/>
        </div>        
        
            <input type="submit" value="登録"/>
    </form>
 <div class="footer">
            <a href="/books">戻る</a>
        </div>
@endsection