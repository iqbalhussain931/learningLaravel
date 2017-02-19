<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Pages_urls;

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
        $pages_urls = Pages_urls::all();

        return view('cms/pagesUrl' , compact('pages_urls'));
    }
}
