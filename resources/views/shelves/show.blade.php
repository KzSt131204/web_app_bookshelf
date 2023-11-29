@extends('layouts.default')
@section('content')


 
  <table align="center" border="2">
      <thead>
    <tr>
      <th>タイトル</th> <th>著者</th> <th>出版社</th> <!--<th> </th>-->
    </tr>
  </thead>
  
  <tbody>
  @forelse($shelf->books as $book)
 
    <tr>
      <td>{{ $book->title }}</td> <td>{{ $book->author }}</td> <td>{{ $book->publisher}}</td>　
      
     <!-- <td>

              <button type="button" class="btn btn-danger"　oneclick="deleteBook">削除</button>

          
      </td>-->
      
      
    
    </tr>
  

  
 @empty
 <td colspan="3"> No Data </td>

 @endforelse
 
    </tbody>
 </table>
 


 <div class="footer">
            <a href="/">戻る</a>
        </div>
@endsection