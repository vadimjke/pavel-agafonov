<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\English;

class PagesController extends Controller
{
    public function map()
    {

        $datas = English::orderBy('id', 'DESC')->get();

        return view('map')->with('datas', $datas);

    }



    public function home()
    {

        return view('home');

    }



    public function support()
    {

        return view('support');

    }





}
