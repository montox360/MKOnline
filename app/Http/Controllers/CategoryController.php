<?php

namespace MkOnline\Http\Controllers;

use Illuminate\Http\Request;

use MkOnline\Http\Requests;
use MkOnline\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::All();

        return view('category.index',compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
       Category::create([
        	'nombre' => $request['nombre'],
        	'descripcion' => $request['descripcion'],
        ]);

        return redirect('/categorias');
    }

    public function update($id, Request $request)
    {
        $category = Category::find($id);
        $category->fill($request->all());
        $category->save();
        return redirect('/categorias');
    }

     public function edit($id)
    {
        $categoria = Category::find($id);
        return view('category.edit', ['categoria'=>$categoria]);
    }

     public function destroy($id)
    {
       Category::destroy($id);
       return redirect('admin');
    }
}
