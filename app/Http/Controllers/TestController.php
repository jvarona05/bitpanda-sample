<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class TestController extends Controller
{
    public function test()
    {
        return Country::all();
    }
}
