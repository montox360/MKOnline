<?php

namespace MkOnline\Http\Controllers;
use Illuminate\Http\Request;
use MkOnline\Http\Requests;
use MkOnline\Category;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'admin']);
    }

    public function index()
    {
        $categories = Category::All();
    	return view('index', compact('categories'));
    }

    public function nosotros()
    {
         $categories = Category::All();
    	return view('nosotros', compact('categories'));
    }

     public function registro_marca()
    {
        $categories = Category::All();
        return view('registro_marca', compact('categories'));
    }

    public function reviews()
    {
    	return view('reviews');
    }

    public function admin()
    {
        return view('admin.index');
    }
}
