<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\English;

class TestController extends Controller
{
    public function test()
    {

        $datas = English::orderBy('id', 'DESC')->get();

        return view('home')->with('datas', $datas);

    }
}
