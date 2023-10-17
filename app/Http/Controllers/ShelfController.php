<?php

namespace App\Http\Controllers;

use App\Models\Shelf;

use Illuminate\Http\Request;

class ShelfController extends Controller
{
    public function index()
    {
        return view('shelves.index')->with(['shelves' => $shelf->get()]); 
        
    }
}
