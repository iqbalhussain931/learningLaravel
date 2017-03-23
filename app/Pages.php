<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Widget;

class Pages extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function storePageReturnId($request)
    {
        $result = false;

        $status = ($request->status == 'on' ? 1 : 0);

        $result = DB::table('pages')->insertGetId(
            ['name' => $request->name, 'slug' => $request->slug, 'status' => $status]
        );

        return $result;
    }

    public function storePageWidgets($widgets,$pageId)
    {
        //$widgetsIns = new Widget();

        foreach ($widgets as $widget){

            //$widgetName = Widget::where('id', $widget)->get();

            $result = DB::table('page_details')->insert(
                ['page_id' => $pageId, 'widget_id' => $widget, 'widget_order' => 0]
            );
        }
        return true;
    }

    private function getPageIDbyName($name = null){
        $page = Pages::where([['name', '=', $name],['slug', '=', $name.'.php']])->first();

        return $page->id;
    }

    private function getPageWidgetsByPageID($pageID = null){
        $pageWidgets = DB::table('page_details')
                        ->join('pages', function ($join) use ($pageID){
                            //dd($join);
                            $join->on('page_details.page_id', '=', 'pages.id')
                                ->where('pages.id', '=', $pageID);
                        })
                        ->join('widget', 'widget.id', '=', 'page_details.widget_id')
                        ->select('widget.name')
                        ->orderBy('widget_order', 'asc')->get();
        return $pageWidgets;
    }

    private function pageWidgetsExistByPageID($pageID = null){
        $pageWidgets = DB::table('page_details')
                        ->join('pages', function ($join) use ($pageID){
                            //dd($join);
                            $join->on('page_details.page_id', '=', 'pages.id')
                                ->where('pages.id', '=', $pageID);
                        })
                        ->join('widget', 'widget.id', '=', 'page_details.widget_id')
                        ->select('widget.name')
                        ->count();
        return $pageWidgets;
    }


    public function pageExist($index = null)
    {
        if(Pages::where([['name', '=', $index],['slug', '=', $index.'.php']])->count() > 0){
            return true;
        }else{
            return false;
        }
    }
    public function getPage($index = null)
    {
        if($this->pageExist($index)){
            $pageID = $this->getPageIDbyName($index);
            if($this->pageWidgetsExistByPageID($pageID) > 0){
                $widgets = $this->getPageWidgetsByPageID($pageID);
                return $widgets;
            }else{
                dd("Page Widget NOT Found");
                return false;
            }
        }else{
            dd("Page NOT Found");
            return false;
        }
    }

}
