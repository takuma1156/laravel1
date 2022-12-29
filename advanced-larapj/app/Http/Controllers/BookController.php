<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::all();
        return view('book.index', ['books' =>$books]);
    }

    public function add(Request $request)
    {
        return view('book.add');
    }

    public function create(Request $request)
    {
        $form = $request ->all();
        Book::create($form);
        return view('/book');
    }
}
