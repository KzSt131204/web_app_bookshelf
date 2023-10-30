<?php

namespace App\Http\Controllers;

use App\Models\Shelf;

use Illuminate\Http\Request;

class ShelfController extends Controller
{
    public function index(Shelf $shelf)
    {
        return view('shelves.index')->with(['shelves' => $shelf->getPaginateByLimit()]); 
        
    }
    
    public function show(Shelf $shelf)
{
    return view('shelves.show')->with(['shelf' => $shelf]);
}


    public function create()
{
    return view('shelves.create');
}

    public function store(Request $request, Shelf $shelf)
{
    $input = $request['shelf'];
    $shelf->fill($input);
    $shelf->user_id = auth()->id();
    $shelf->save();
    return redirect('/shelves/' . $shelf->id);
}

}
