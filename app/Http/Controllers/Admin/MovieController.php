<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//以下を追記することでMovie Modelが扱えるようになる
use App\Movie;

class MovieController extends Controller
{
    public function index(Request $request)
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
        // フォームから送信されてきたimageを削除する
        unset($form['image']);

        
        //データベースに保存する
        $movie->fill($form);
        $movie->save();
        
        return redirect('admin/movie/create');
    }
    
    public function edit(Request $request)
    {
        //Movies Modelからデータを取得する
        $movie = Movies::find($request->id);
        if (empty($movie)) {
            abort(404);
        }
        return view('admin.movie.edit', ['movies_form' => $movie]);
    }
    
    public function update(Request $request)
    {
        //Movies Modelからデータを取得する
        $movie = Movies::find($request->id);
        //送信されてきたフォームデータを格納する、１６の画像はいるか？
        $movies_form = $request->all();
        unset($movies_form['_token']);
        
        //該当するデータを上書きして保存する
        $movie->fill($movies_form)->save();
        
        return redirect('admin/movie');
    }
    
    public function delete()
    {
        return redirect('admin/movie/');
    }
    
}
