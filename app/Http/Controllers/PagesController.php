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

    public function EditData(Request $request)
    {
        $year = $request->year;
        $quarter = $request->quarter;
        $language = $request->language;


        $data = DB::select("select * from $language WHERE year = $year AND quarter = $quarter ORDER BY id ASC");

        switch ($language) {
            case 'english':
                $display_language = "Английский";
                break;
            case 'spanish':
                $display_language = "Испанский";
                break;
            case 'arabic':
                $display_language = "Арабский";
                break;
            case 'chinese':
                $display_language = "Китайский";
                break;
        }


        // dd($data);

        return view('edit-data')
            ->with('data', $data)
            ->with('display_language', $display_language)
            ->with('language', $language);
    }


    public function Test() 
    {
        $data = DB::select("select * from english WHERE year = 2021 AND quarter = 4 ORDER BY id ASC");
        return view('test')->with('data', $data);
    }


    public function UpdateData(Request $request)
    {

        $data = $request->request;

        $temp_array = (array) $data;

        $array = $temp_array["\x00*\x00parameters"];

        $language = $array['language'];

        // dd($array);


        foreach ($array as $key => $value) {

            if ($key == '_token') {
                continue;
            } elseif ($key == 'language') {
                continue;
            }

            $tempkey = explode("-", $key);

            switch ($tempkey[1]) {
                case 'id':
                    $item_id = $value;
                    break;
                case 'population':
                    $item_population = $value;
                    break;
                case 'mentions':
                    $item_mentions = $value;
                    break;
                case 'pentil':
                    $item_pentil = $value;
                    break;
                case 'value':
                    $item_value = $value;
                    break;
            }
        }

        DB::table($language)
            ->where('id', $item_id)
            ->update([
                'population' => $item_population,
                'mentions' => $item_mentions,
                'pentil' => $item_pentil,
                'value' => $item_value
            ]);



        return view("dashboard")
            ->with('message', 'Запись была успешно обновлена');
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


    public function AddData(request $request)
    {
        $data = $request->request;

        $temp_array = (array) $data;

        $array = $temp_array["\x00*\x00parameters"];

        $language = $array['language'];
        $year = $array['year'];
        $quarter = $array['quarter'];

        
        switch ($language) {
            case 'english':
                $display_language = "Английский";
                break;
            case 'spanish':
                $display_language = "Испанский";
                break;
            case 'arabic':
                $display_language = "Арабский";
                break;
            case 'chinese':
                $display_language = "Китайский";
                break;
        }


        $data = DB::select("select * from $language WHERE year = $year AND quarter = $quarter ORDER BY id ASC");

        if (count($data) > 0) {
            return view('dashboard')->with('ErrorMsg', 'Данная запись уже существует');
        }

        else {
            return view('create')
                ->with('language', $display_language)
                ->with('year', $year)
                ->with('quarter', $quarter);
        }
    }




    public function dashboard()
    {
        if (Auth::check()) {

            $admindata['2021'] = [];
            $admindata['2022'] = [];

            function get_quarters($year)
            {
                return DB::table('english')
                    ->select('quarter', DB::raw('count(*) as total'))
                    ->where('year', $year)
                    ->groupBy('quarter')
                    ->get();
            }


            function get_languages($year, $quarter, $language)
            {
                $sql = DB::select("select * from english WHERE year = 2021 AND quarter = 4 ORDER BY id ASC");
                if (count($sql) > 0) {
                    return true;
                } else {
                    return false;
                }
            }

            $quarters2021 = get_quarters('2021');
            $quarters2022 = get_quarters('2022');

            foreach ($quarters2021 as $quarter) {
                if (is_array($quarter)) {
                    $admindata['2021'] = array(
                        $quarter => array(
                            'english' => get_languages('2021', $quarter, 'english'),
                            'spanish' => get_languages('2021', $quarter, 'spanish'),
                            'chinese' => get_languages('2021', $quarter, 'chinese'),
                            'arabic' => get_languages('2021', $quarter, 'arabic')
                        )
                    );
                } else {
                    $admindata['2021'][$quarter->quarter] = array(
                        'english' => get_languages('2021', $quarter, 'english'),
                        'spanish' => get_languages('2021', $quarter, 'spanish'),
                        'chinese' => get_languages('2021', $quarter, 'chinese'),
                        'arabic' => get_languages('2021', $quarter, 'arabic')
                    );
                }
            }

            foreach ($quarters2022 as $quarter) {
                if (is_array($quarter)) {
                    $admindata['2022'] = array(
                        $quarter => array(
                            'english' => get_languages('2022', $quarter, 'english'),
                            'spanish' => get_languages('2022', $quarter, 'spanish'),
                            'chinese' => get_languages('2022', $quarter, 'chinese'),
                            'arabic' => get_languages('2022', $quarter, 'arabic')
                        )
                    );
                } else {
                    $admindata['2022'][$quarter->quarter] = array(
                        'english' => get_languages('2022', $quarter, 'english'),
                        'spanish' => get_languages('2022', $quarter, 'spanish'),
                        'chinese' => get_languages('2022', $quarter, 'chinese'),
                        'arabic' => get_languages('2022', $quarter, 'arabic')
                    );
                }
            }


            // function create_admin_data($)

            // $admindata = array (
            //     get_quarters(2021)
            // )

            // dd(get_quarters(2021));




            // $quarters2 = DB::table('english')
            // ->select('quarter', DB::raw('count(*) as total'))
            // ->where('year', '2021')
            // ->groupBy('quarter')
            // ->get();

            // $admindata = array ()

            // foreach($quarters1 as $quarter) {
            //     array_push($admindata['2021'], $quarter);
            // }

            // foreach($quarters2 as $quarter) {
            //     array_push($admindata['2022'], $quarter);
            // }

            // dd($admindata);

            return view('dashboard')->with('data', $admindata);
        }

        return redirect("login")->withSuccess('Вам необходимо сперва залогиниться');
    }
}
