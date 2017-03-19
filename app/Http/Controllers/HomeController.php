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
            $widgets =  $pages->getPage($index);
            return view('/html/index' , compact('widgets'));
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





}
