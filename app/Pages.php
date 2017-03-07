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

}
