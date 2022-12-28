<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('index', ['authors' => $authors]);
    }

    public function find()
    {
        return view('find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $author = Author::find($request->input);
        $param = [
        'author' => $author,
        'input' => $request->input
        ];
        return view('find', $param);
    }
}