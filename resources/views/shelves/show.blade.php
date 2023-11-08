@extends('layouts.default')
@section('content')

<div class='books'>
 
  <table>
    <tr>
      <th>タイトル</th> <th>著者</th> <th>出版社</th>
    </tr>
  
  @forelse($shelf->books as $book)
 
    <tr>
      <th>{{ $book->title }}</th> <th>{{ $book->author }}</th> <th>{{ $book->publisher}}</th>
    </tr>
  
 @empty
 <td> No Data </td>
 
 @endforelse
 
  </table>
  
</div>

<form action="/shelf/{{ $shelf->id }}" id="form_{{ $shelf->id }}" method="post">
    @csrf
    @method('DELETE')
    <button type="button" onclick="deleteShelf({{ $shelf->id }})">delete</button> 
</form>

<script>
    function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>

 <div class="footer">
            <a href="/">戻る</a>
        </div>
@endsection