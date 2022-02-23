<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\English;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function map()
    {

        $datas = English::orderBy('id', 'DESC')->get();

        $quarters = DB::table('english')
        ->select('quarter', DB::raw('count(*) as total'))
        ->groupBy('quarter')
        ->get();


        return view('map')->with('datas', $datas)->with('quarters', $quarters);

    }



    public function home()
    {

        return view('index');

    }



    public function support()
    {

        return view('support');

    }



    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Вам необходимо сперва залогиниться');
    }






}
