<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Pages_urls;
use App\Pages;
use App\Widget;

class AdminController extends Controller
{
    public function index()
    {
        return view('cms/home');
    }
    public function pages()
    {
        $pages = Pages::all();
        $currentPath= Route::getFacadeRoot()->current()->uri();
        return view('cms/pages' ,compact('pages'));
    }
    public function pagesUrl( Request $request)
    {
        if ($request->isMethod('post')){
            //return response()->json($request);
        }

        $pages_urls = Pages_urls::all();

        return view('cms/pagesUrl' , compact('pages_urls'));

    }

    public function addNewPage()
    {
        $allWidgets = Widget::all();
        return view('cms/addNewPage',compact('allWidgets'));
    }

    public function createNewPage(Request $request)
    {
        // Validate the request...

        $pages = new Pages;

        $pages->name = $request->name;
        $pages->slug = $request->slug;

        //$pages->save();

        return redirect()->back();
        //return response()->json($params);
    }

}
