<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MatthiasMullie\Minify;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->minifyCSS();
        return view('/html/index-12');
    }

    private function minifyCSS()
    {
        $sourcePath = '../../../public/css/app/app.v1.css';
        $minifier = new Minify\CSS($sourcePath);

        // we can even add another file, they'll then be
        // joined in 1 output file
        /*$sourcePath2 = '/path/to/second/source/css/file.css';
        $minifier->add($sourcePath2);*/

        // or we can just add plain CSS
        /*$css = 'body { color: #000000; }';
        $minifier->add($css);*/

        // save minified file to disk
        $minifiedPath = '../../../public/css/app/file.css';
        $minifier->minify($minifiedPath);

        // or just output the content
        dd($minifier->minify());
    }





}
