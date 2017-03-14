<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages_urls extends Model
{
    //
    public function store()
    {

    }

    public function checkUrl($index = null, $url = null)
    {
        $index = str_replace(' ', '', $index);

        /*if(strpos( $index, ".php" )){
            dd("has");
        }else{
            $index = substr(".php", -1);
            dd($index);
        }*/

        return $this->urlExist($index,$url);
    }

    public function urlExist($index = null,$url = null)
    {
        if(Pages_urls::where('url', '=', $url . "/" . $index)->get()->count() > 0){
            return true;
        }else{
            return false;
        }
    }


}
