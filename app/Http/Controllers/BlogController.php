<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //Funsi Index
    public function index()
    {
        return view('admin.blog.index');
    }

    //Fungsi create
    public function create()
    {
        return view('admin.blog.create');
    }

    //Fungsi store
    public function store(request $request) {}

    // Halaman Edit 
    public function edit($id) {}

    //Fungsi Update
    public function update($request, $id) {}

    // Halaman Delete 
    public function destroy($id) {}
}
