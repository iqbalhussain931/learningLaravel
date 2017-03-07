<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Widget extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    protected $table = 'widget';

    public function storeWidget($request)
    {
        $result = false;

        $result = DB::table('widget')->insert(
            ['name' => $request->name]
        );

        return $result;
    }

}
