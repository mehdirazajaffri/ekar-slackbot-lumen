<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Helpers;

class Controller extends BaseController
{
    public function ekar(Request $request)
    {
        return "Good";
    }
}
