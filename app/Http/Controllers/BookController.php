<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books=Book::all();
        return view ('books', ['books' => $books]);
    }

    public function show($id)
    {
        return view('book', [
            'book' => Book::findOrFail($id)
        ]);
    }

    public function create()
    {

        return view('create');
    }
}
