<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use App\Pages_urls;
use App\Pages;
use App\Widget;

class HomeController extends Controller
{
    protected $url;
    public $error ;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct( UrlGenerator $url )
    {
        $this->middleware('auth');
        $this->url = $url;
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

    public function indexOne($index = null)
    {
        $pages_url = new Pages_urls();
        $pages = new Pages();
        //global $error ;

        /*
         * @TODO - The url get process to be precises and add htaccess
         */
        if($pages_url->checkUrl($index,$this->url->to('/'))){
            /*if($pages->pageExist($index)){

            }*/
            return $pages->pageExist($index);
        }else{
            return "Url Failed";
        }
        /*if($error != ""){
            return view('/html/index-12');
        }else{
            return abort(403, 'FUCK OFF BITCHES');
        }*/

        //return $index;
    }

    private function minifyCSS()
    {
        /*$sourcePath = '../../../public/css/app/app.v1.css';
        $minifier = new Minify\CSS($sourcePath);*/

        // we can even add another file, they'll then be
        // joined in 1 output file
        /*$sourcePath2 = '/path/to/second/source/css/file.css';
        $minifier->add($sourcePath2);*/

        // or we can just add plain CSS
        /*$css = 'body { color: #000000; }';
        $minifier->add($css);*/

        // save minified file to disk
        /*$minifiedPath = '../../../public/css/app/file.css';
        $minifier->minify($minifiedPath);*/

        // or just output the content
        /*dd($minifier->minify());*/
    }





}
