<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $form = $request->all();
        // $movie
        // dd($form);
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
