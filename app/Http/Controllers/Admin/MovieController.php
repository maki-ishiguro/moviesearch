<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//以下を追記することでMovie Modelが扱えるようになる
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        return view('admin.movie.index');
    }
    
    public function add()
    {
        return view('admin.movie.create');
    }
    
    public function create(Request $request)
    {
        //以下を追記、Validationを行う
        $this ->validation($request, Movie::$rules);
        
        $movie = new Movie;
        $form = $request->all();
        // $movie
        // dd($form);
        
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        
        //データベースに保存する
        $movie->fill($form);
        $movie->save();
        
        return redirect('admin/movie/create');
    }
    
    public function edit()
    {
        return view('admin.movie.edit');
    }
    
    public function update()
    {
        return redirect('admin/movie/edit');
    }
    
    public function delete()
    {
        return redirect('admin/movie/');
    }
    
}
