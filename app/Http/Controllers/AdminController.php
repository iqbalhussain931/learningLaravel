<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    public function index()
    {
        return view('cms/home');
    }
    public function pages()
    {
        $currentPath= Route::getFacadeRoot()->current()->uri();
        return view('cms/pages' ,compact('currentPath'));
    }
    public function pagesUrl()
    {
        return view('cms/pagesUrl');
    }
}
