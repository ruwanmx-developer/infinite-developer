<?php

namespace App\Helpers;

use App\Models\Advertisement;
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
    }
}
