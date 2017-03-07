<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Pages_urls;
use App\Pages;
use App\Widget;
use League\Flysystem\Exception;

class AdminController extends Controller
{
    public function index()
    {
        return view('cms/home');
    }
    public function pages()
    {
        $pages = Pages::orderBy('id', 'asc')->get();
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

        /*$pages->name = $request->name;
        $pages->slug = $request->slug;
        $pages->save();*/

        /*if($pages->storePage($request) == true){

        }*/
        $pageID = $pages->storePageReturnId($request);

        if(isset($request->widget)){
            $pages->storePageWidgets($request->widget,$pageID);
        }
        //return $users = DB::table('pages')->distinct()->get();;
        return redirect()->back();
        //return response()->json($users);
    }

    public function widgets()
    {
        $widgets = Widget::orderBy('id', 'desc')->get();
        return view('cms/allWidgets' ,compact('widgets'));
    }

    public function createNewWidget(Request $request)
    {
        $widget = new Widget;

        $widget->storeWidget($request);

        $widgets = Widget::all();
        return view('cms/allWidgets' ,compact('widgets'));
    }

}
