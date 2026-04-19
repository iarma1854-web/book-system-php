<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author; 

class AuthorController extends Controller
{
    
    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'birthdate' => 'required|date',
        ]);

      
        Author::create($validated);

        return redirect('/authors')->with('status', 'Author created!');
    }
    public function index()
{
    
    $authors = Author::all();

   
    return view('authors.index', compact('authors'));
}
}