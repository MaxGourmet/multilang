<?php

namespace Multilang\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Request;
use Multilang\Languages;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//    public function __construct()
//    {
//        if ($lang = $_SERVER['HTTP_ACCEPT_LANGUAGE']) {
//            $lang = substr($lang,0,2);
//            if (Languages::hasLang($lang))
//                app()->setLocale($lang);
//        }
//    }
}
