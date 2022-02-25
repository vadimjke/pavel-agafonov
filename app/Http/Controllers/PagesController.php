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

        $datas = English::orderBy('id', 'ASC')->get();

        // $quarters = DB::table('english')
        // ->select('quarter', DB::raw('count(*) as total'))
        // ->groupBy('quarter')
        // ->get();


        return view('map')
        ->with('datas', $datas)
        ->with('year', '2021')
        ->with('quarter', '4')
        ->with('language', 'english');
        // ->with('quarters', $quarters);

    }



    public function home()
    {

        return view('index');
    }



    public function support()
    {

        return view('support');
    }

    public function SelectMap(Request $request)
    {
        $year = $request->year;
        $quarter = $request->quarter;
        $language = $request->language;

        // dd($request);

        return redirect('/map/' . $year . '/' . $quarter . '/' . $language);
    }


    public function SelectedMap($year, $quarter, $language)
    {
        // $datas = English::where([
        //     ['quarter', "=", $quarter],
        //     ['year', "=", $year],
        // ])->get();

        // if ($year == "2022") {
        //     $old_data = DB::select("select value from english WHERE year = 2021");

        //     dd($old_data);

        //     return view('map')
        //         ->with('datas', $datas)
        //         ->with('quarter', $quarter)
        //         ->with('year', $year)
        //         ->with('values', $values);
        // } else {
        //     return view('map')
        //         ->with('datas', $datas)
        //         ->with('quarter', $quarter)
        //         ->with('year', $year);
        // }

        $values = DB::select("select * from $language WHERE year = 2021 ORDER BY id ASC");

        $datas = DB::select("select * from $language WHERE year = $year ORDER BY id ASC");





        return view('map')
        ->with('datas', $datas)
        ->with('quarter', $quarter)
        ->with('year', $year)
        ->with('values', $values)
        ->with('language', $language);




    }



    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Вам необходимо сперва залогиниться');
    }
}
