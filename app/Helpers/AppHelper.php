<?php

namespace App\Helpers;

use App\Models\Post;
use Carbon\Carbon;

class AppHelper
{
    public static function instance()
    {
        return new AppHelper();
    }

    public function get_admin_prefix()
    {
        $date = Carbon::now();
        $prefix = $date->toDateString() . "-admin";
        return $prefix;
        // return "admin";
    }

    public function genarate_view_id()
    {
        $number = 0;
        while (true) {
            $number = mt_rand(100000, 999999);
            if (!Post::where('view_id', '=', $number)->exists()) {
                break;
            }
        }
        return $number;
    }
}
