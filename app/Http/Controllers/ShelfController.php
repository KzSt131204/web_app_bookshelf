<?php

namespace App\Http\Controllers;

use App\Models\Shelf;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShelfController extends Controller
{
    public function index(Shelf $shelf, Request $request, User $user)
    {
        $shelves = \Auth::user()->shelves()->Paginate(5);
     

        return view('shelves.index')->with(['shelves' => $shelves]); 
        
    }
    
    public function show(Shelf $shelf)
{
    return view('shelves.show')->with(['shelf' => $shelf]);
}


    public function create()
{
    return view('shelves.create');
}

    public function delete(Shelf $shelf)
    {
        $shelf->delete();
        
        return redirect('/');
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
