<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStrageRequest extends FormRequest
{

    public function rules()
    {
        return [
            'book_shelf.book_id' => 'required',
        'book_shelf.shelf.shelf_id' => 'required|unique:book_id,shelf_id',
            
            
        
        ];
    }
    
    public function messages(){
  return [
    'bookid.required' => 'これが表示されることはないでしょう',
    'shelf_id.required' => 'これが表示されることはないでしょう',
    'shelf_id.unique' => '既に登録されています'
  ];
}
}
