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

        // $quarters = DB::table('english')
        // ->select('quarter', DB::raw('count(*) as total'))
        // ->groupBy('quarter')
        // ->get();


        return view('map')->with('datas', $datas);
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
        $language = 'english';

        // dd($request);

        return redirect('/map/' . $year . '/' . $quarter . '/' . $language);
    }


    public function SelectedMap($year, $quarter, $language)
    {
        $datas = English::where([
            ['quarter', "=", $quarter],
            ['year', "=", $year],
        ])->get();

        if ($year == "2022") {
            $old_data = DB::select("select value from english WHERE year = 2021");

            for($i=0; $i<count($old_data); $i++) {
                $values[$i] = $old_data[$i]->value;
            }

            return view('map')
                ->with('datas', $datas)
                ->with('quarter', $quarter)
                ->with('year', $year)
                ->with('values', $values);
        } else {
            return view('map')
                ->with('datas', $datas)
                ->with('quarter', $quarter)
                ->with('year', $year);
        }
    }



    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Вам необходимо сперва залогиниться');
    }
}
