<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $authors = Author::Paginate(4);
        $param = ['authors' => $authors, 'user' =>$user];
        return view('index', $param);
    }

    public function add()
    {
        return view('add');
    }

    public function create(AuthorRequest $request)
    {
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }

    public function find()
    {
        return view('find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $author = Author::where('name', 'LIKE BINARY',"%{$request->input}%")->first();
        $param = [
        'input' => $request->input,
        'author' => $author
        ];
        return view('find', $param);
    }

    public function edit(Request $request)
    {
        $author = Author::find($request->id);
        return view('edit', ['form' => $author]);
    }

    public function update(AuthorRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Author::where('id', $request->id)->update($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $author = Author::find($request->id);
        return view('delete', ['form' => $author]);
    }

    public function remove(Request $request)
    {
        Author::find($request->id)->delete();
        return redirect('/');
    }

    public function bind(Author $author)
    {
        $data =[
            'author' => $author,
        ];
        return view('author.binds', $data);
    }
    public function get()
    {
        $text = [
            'content' => '自由に入力してください',
        ];
        return view('middleware', $text);
    }

    public function post(Request $request)
    {
        $content = $request->content;
        $text = [
            'content' => $content .'と入力しましたね'
        ];
        return view('middleware', $text);
    }

    public function relate(Request $request)
    {
    $hasbooks = Author::has('book')->get();
    $nobooks = Author::doesntHave('book')->get();
    $param = ['hasbooks' => $hasbooks, 'nobooks' => $nobooks];
    return view('author.index',$param);
    }

    public function check(Request $request)
    {
        $text = ['text' => 'ログインしてください'];
        return view('auth', $text);
    }

    public function checkUser(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email'=> $email,'password' => $password])){
            $text = Auth::user()->name . 'さんがログインしました';
        }else{
            $text = 'ログインに失敗しました';
        }
        return view('auth', ['text'=>$text]);
    }
}