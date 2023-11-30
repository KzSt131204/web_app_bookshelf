<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStrageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'book_shelf.book_id' => 'required',
        'book_shelf.shelf.shelf_id' => 'required|unique:book_id,shelf_id',
            
            
        
        ];
    }
}
