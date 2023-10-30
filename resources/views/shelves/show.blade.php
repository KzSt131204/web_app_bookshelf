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

 <div class="footer">
            <a href="/">戻る</a>
        </div>
@endsection