<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        
        $collections = []; 
        return view('collections.index', ['collections' => $collections]);
    }

    public function create()
    {
        return view('collections.create');
    }

    public function store(Request $request)
    {
       

        return redirect()->route('collections.index');
    }

    public function edit($id)
    {
        
        $collection = []; 
        return view('collections.edit', ['collection' => $collection]);
    }
}
