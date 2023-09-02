<?php

namespace App\Helpers;

use App\Models\Advertisement;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
