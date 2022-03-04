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

        $datas = English::orderBy('id', 'ASC')
        ->where('year', '2021')
        ->where('quarter', '4')
        ->get();

        // $quarters = DB::table('english')
        // ->select('quarter', DB::raw('count(*) as total'))
        // ->groupBy('quarter')
        // ->get();


        // langs 2021
        $q2021_1_l = DB::select("select language from data_tables WHERE year = 2021 AND quarter = 1 GROUP BY language ORDER BY id ASC");
        $q2021_2_l = DB::select("select language from data_tables WHERE year = 2021 AND quarter = 2 GROUP BY language ORDER BY id ASC");
        $q2021_3_l = DB::select("select language from data_tables WHERE year = 2021 AND quarter = 3 GROUP BY language ORDER BY id ASC");
        $q2021_4_l = DB::select("select language from data_tables WHERE year = 2021 AND quarter = 4 GROUP BY language ORDER BY id ASC");

        // langs 2022
        $q2022_1_l = DB::select("select language from data_tables WHERE year = 2022 AND quarter = 1 GROUP BY language ORDER BY id ASC");
        $q2022_2_l = DB::select("select language from data_tables WHERE year = 2022 AND quarter = 2 GROUP BY language ORDER BY id ASC");
        $q2022_3_l = DB::select("select language from data_tables WHERE year = 2022 AND quarter = 3 GROUP BY language ORDER BY id ASC");
        $q2022_4_l = DB::select("select language from data_tables WHERE year = 2022 AND quarter = 4 GROUP BY language ORDER BY id ASC");

        // quarters 2022
        $q2022_1_q = DB::select("select quarter from data_tables WHERE year = 2022 AND quarter = 1 GROUP BY quarter ORDER BY id ASC");
        $q2022_2_q = DB::select("select quarter from data_tables WHERE year = 2022 AND quarter = 2 GROUP BY quarter ORDER BY id ASC");
        $q2022_3_q = DB::select("select quarter from data_tables WHERE year = 2022 AND quarter = 3 GROUP BY quarter ORDER BY id ASC");
        $q2022_4_q = DB::select("select quarter from data_tables WHERE year = 2022 AND quarter = 4 GROUP BY quarter ORDER BY id ASC");
        
        // quarters 2021
        $q2021_1_q = DB::select("select quarter from data_tables WHERE year = 2021 AND quarter = 1 GROUP BY quarter ORDER BY id ASC");
        $q2021_2_q = DB::select("select quarter from data_tables WHERE year = 2021 AND quarter = 2 GROUP BY quarter ORDER BY id ASC");
        $q2021_3_q = DB::select("select quarter from data_tables WHERE year = 2021 AND quarter = 3 GROUP BY quarter ORDER BY id ASC");
        $q2021_4_q = DB::select("select quarter from data_tables WHERE year = 2021 AND quarter = 4 GROUP BY quarter ORDER BY id ASC");


        function translate_lang($arr) 
        {
            $l_counter = count($arr);
            for ($i=0;$i<$l_counter;$i++)
                {
                    switch($arr[$i]->language)
                    {
                        case "english":
                            $arr[$i]->translated_lang = "Английский";
                            break;
                        case "spanish":
                            $arr[$i]->translated_lang = "Испанский";
                            break;
                        case "arabic":
                            $arr[$i]->translated_lang = "Арабский";
                            break;
                        case "chinese":
                            $arr[$i]->translated_lang = "Китайский";
                            break;
                    }
                }
        }

        function translate_quarter($arr) 
        {
            $q_counter = count($arr);
            for ($i=0;$i<$q_counter;$i++)
                {
                    switch($arr[$i]->quarter)
                    {
                        case "1":
                            $arr[$i]->translated_quarter = "I";
                            break;
                        case "2":
                            $arr[$i]->translated_quarter = "II";
                            break;
                        case "3":
                            $arr[$i]->translated_quarter = "II";
                            break;
                        case "4":
                            $arr[$i]->translated_quarter = "IV";
                            break;
                    }
                }
        }



            // translate 2021 lang
            translate_lang($q2021_1_l);
            translate_lang($q2021_2_l);
            translate_lang($q2021_3_l);
            translate_lang($q2021_4_l);
            // translate 2022 lang
            translate_lang($q2022_1_l);
            translate_lang($q2022_2_l);
            translate_lang($q2022_3_l);
            translate_lang($q2022_4_l);
            // translate 2021 quarter
            translate_quarter($q2021_1_q);
            translate_quarter($q2021_2_q);
            translate_quarter($q2021_3_q);
            translate_quarter($q2021_4_q);
            // translate 2022 quarter
            translate_quarter($q2022_1_q);
            translate_quarter($q2022_2_q);
            translate_quarter($q2022_3_q);
            translate_quarter($q2022_4_q);



        return view('map')
            ->with('datas', $datas)
            ->with('year', '2021')
            ->with('quarter', '4')
            ->with('language', 'english')
            ->with('q2022_1_l', $q2022_1_l)
            ->with('q2022_2_l', $q2022_2_l)
            ->with('q2022_3_l', $q2022_3_l)
            ->with('q2022_4_l', $q2022_4_l)
            ->with('q2022_1_q', $q2022_1_q)
            ->with('q2022_2_q', $q2022_2_q)
            ->with('q2022_3_q', $q2022_3_q)
            ->with('q2022_4_q', $q2022_4_q)                    
            ->with('q2021_1_l', $q2021_1_l)
            ->with('q2021_2_l', $q2021_2_l)
            ->with('q2021_3_l', $q2021_3_l)
            ->with('q2021_4_l', $q2021_4_l)
            ->with('q2021_1_q', $q2021_1_q)
            ->with('q2021_2_q', $q2021_2_q)
            ->with('q2021_3_q', $q2021_3_q)
            ->with('q2021_4_q', $q2021_4_q);

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


    public function InsertData(request $request) 
    {
        $data = $request->request;

        $temp_array = (array) $data;

        $array = $temp_array["\x00*\x00parameters"];

        $language = $array['language'];
        $quarter = $array['quarter'];
        $year = $array['year'];

        $array = array_slice($array, 4);

        function slicer($arr) {
            $arr = array_slice($arr, 0, 4);
            return $arr;
        }

        // $array = slicer($array);

        $keys = array_keys($array);
        $arraySize = count($array);

        $rows = $arraySize/4 + 1;

        // print_r($array);

        // echo "<b>arr size:".$arraySize." </b><br>";
        // echo "<b>rows size:".$rows." </b><br><BR>";

        for($i=0; $i < $arraySize; $i = $i+4) {
            // echo $i;
            $start = $i;
            $end = $i+4;

            $temp = array_slice($array, $start, $end);

            $counter = 0;

            foreach($temp as $key=>$value) {
                $country = explode("-", $key)[0];
                $row_name = explode("-", $key)[1];
                    switch($row_name) {
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
                    // echo $key.": ".$value."<br>";
                    $counter++;
                    if ($counter == 4) {


                      DB::table($language)->insert([
                            'year' => $year,
                            'quarter' => $quarter,
                            'display_name' => $country,
                            'name' => $country,
                            'population' => $item_population,
                            'mentions' => $item_mentions,
                            'pentil' => $item_pentil,
                            'value' => $item_value
                      ]);
 
                

                        // echo "Страна: :".$country."<br>";
                        // echo "Население: :".$item_population."<br>";
                        // echo "Упоминания: :".$item_mentions."<br>";
                        // echo "Пентиль: :".$item_pentil."<br>";
                        // echo "Значение: :".$item_value."<br>";
                        // echo "<hr>";
                }
            }


            // print_r($temp);

            // echo $keys[$i] . ': ' . $array[$keys[$i]] . '<br>';
        }

        DB::table('data_tables')->insert([
            'year' => $year,
            'quarter' => $quarter,
            'language' => $language, 
            'exists' => 1
        ]);

        $q2022_1_l = DB::select("select language from data_tables WHERE year = 2022 AND quarter = 1 ORDER BY id ASC");
        $q2022_2_l = DB::select("select language from data_tables WHERE year = 2022 AND quarter = 2 ORDER BY id ASC");
        $q2022_3_l = DB::select("select language from data_tables WHERE year = 2022 AND quarter = 3 ORDER BY id ASC");
        $q2022_4_l = DB::select("select language from data_tables WHERE year = 2022 AND quarter = 4 ORDER BY id ASC");

        return redirect('/dashboard')->with('message', 'Запись успешно создана');

        // dd($array);
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

        $values = DB::select("select * from $language WHERE year = 2021 AND quarter = 4 ORDER BY id ASC");

        $datas = DB::select("select * from $language WHERE year = $year AND quarter = $quarter ORDER BY id ASC");


                // langs 2022
                $q2022_1_l = DB::select("select language from data_tables WHERE year = 2022 AND quarter = 1 GROUP BY language ORDER BY id ASC");
                $q2022_2_l = DB::select("select language from data_tables WHERE year = 2022 AND quarter = 2 GROUP BY language ORDER BY id ASC");
                $q2022_3_l = DB::select("select language from data_tables WHERE year = 2022 AND quarter = 3 GROUP BY language ORDER BY id ASC");
                $q2022_4_l = DB::select("select language from data_tables WHERE year = 2022 AND quarter = 4 GROUP BY language ORDER BY id ASC");
        
                // quarters 2022
                $q2022_1_q = DB::select("select quarter from data_tables WHERE year = 2022 AND quarter = 1 GROUP BY quarter ORDER BY id ASC");
                $q2022_2_q = DB::select("select quarter from data_tables WHERE year = 2022 AND quarter = 2 GROUP BY quarter ORDER BY id ASC");
                $q2022_3_q = DB::select("select quarter from data_tables WHERE year = 2022 AND quarter = 3 GROUP BY quarter ORDER BY id ASC");
                $q2022_4_q = DB::select("select quarter from data_tables WHERE year = 2022 AND quarter = 4 GROUP BY quarter ORDER BY id ASC");


                // langs 2021
                $q2021_1_l = DB::select("select language from data_tables WHERE year = 2021 AND quarter = 1 GROUP BY language ORDER BY id ASC");
                $q2021_2_l = DB::select("select language from data_tables WHERE year = 2021 AND quarter = 2 GROUP BY language ORDER BY id ASC");
                $q2021_3_l = DB::select("select language from data_tables WHERE year = 2021 AND quarter = 3 GROUP BY language ORDER BY id ASC");
                $q2021_4_l = DB::select("select language from data_tables WHERE year = 2021 AND quarter = 4 GROUP BY language ORDER BY id ASC");
        
                // quarters 2021
                $q2021_1_q = DB::select("select quarter from data_tables WHERE year = 2021 AND quarter = 1 GROUP BY quarter ORDER BY id ASC");
                $q2021_2_q = DB::select("select quarter from data_tables WHERE year = 2021 AND quarter = 2 GROUP BY quarter ORDER BY id ASC");
                $q2021_3_q = DB::select("select quarter from data_tables WHERE year = 2021 AND quarter = 3 GROUP BY quarter ORDER BY id ASC");
                $q2021_4_q = DB::select("select quarter from data_tables WHERE year = 2021 AND quarter = 4 GROUP BY quarter ORDER BY id ASC");


                
        function translate_lang($arr) 
        {
            $l_counter = count($arr);
            for ($i=0;$i<$l_counter;$i++)
                {
                    switch($arr[$i]->language)
                    {
                        case "english":
                            $arr[$i]->translated_lang = "Английский";
                            break;
                        case "spanish":
                            $arr[$i]->translated_lang = "Испанский";
                            break;
                        case "arabic":
                            $arr[$i]->translated_lang = "Арабский";
                            break;
                        case "chinese":
                            $arr[$i]->translated_lang = "Китайский";
                            break;
                    }
                }
        }

        function translate_quarter($arr) 
        {
            $q_counter = count($arr);
            for ($i=0;$i<$q_counter;$i++)
                {
                    switch($arr[$i]->quarter)
                    {
                        case "1":
                            $arr[$i]->translated_quarter = "I";
                            break;
                        case "2":
                            $arr[$i]->translated_quarter = "II";
                            break;
                        case "3":
                            $arr[$i]->translated_quarter = "III";
                            break;
                        case "4":
                            $arr[$i]->translated_quarter = "IV";
                            break;
                    }
                }
        }



            // translate 2021 lang
            translate_lang($q2021_1_l);
            translate_lang($q2021_2_l);
            translate_lang($q2021_3_l);
            translate_lang($q2021_4_l);
            // translate 2022 lang
            translate_lang($q2022_1_l);
            translate_lang($q2022_2_l);
            translate_lang($q2022_3_l);
            translate_lang($q2022_4_l);
            // translate 2021 quarter
            translate_quarter($q2021_1_q);
            translate_quarter($q2021_2_q);
            translate_quarter($q2021_3_q);
            translate_quarter($q2021_4_q);
            // translate 2022 quarter
            translate_quarter($q2022_1_q);
            translate_quarter($q2022_2_q);
            translate_quarter($q2022_3_q);
            translate_quarter($q2022_4_q);


                

        return view('map')
            ->with('datas', $datas)
            ->with('quarter', $quarter)
            ->with('year', $year)
            ->with('values', $values)
            ->with('language', $language)
            ->with('q2022_1_l', $q2022_1_l)
            ->with('q2022_2_l', $q2022_2_l)
            ->with('q2022_3_l', $q2022_3_l)
            ->with('q2022_4_l', $q2022_4_l)
            ->with('q2022_1_q', $q2022_1_q)
            ->with('q2022_2_q', $q2022_2_q)
            ->with('q2022_3_q', $q2022_3_q)
            ->with('q2022_4_q', $q2022_4_q)
            ->with('q2021_1_l', $q2021_1_l)
            ->with('q2021_2_l', $q2021_2_l)
            ->with('q2021_3_l', $q2021_3_l)
            ->with('q2021_4_l', $q2021_4_l)
            ->with('q2021_1_q', $q2021_1_q)
            ->with('q2021_2_q', $q2021_2_q)
            ->with('q2021_3_q', $q2021_3_q)
            ->with('q2021_4_q', $q2021_4_q);
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
            return redirect()->route('dashboard')
            ->withErrors(['msg' => 'Данная запись уже существует']);
        }

        else {
            return view('create')
                ->with('display_language', $display_language)
                ->with('year', $year)
                ->with('quarter', $quarter)
                ->with('language', $language);
        }
    }




    public function DeleteData(request $request)
    {

        $year = $request->input('year');
        $quarter = $request->input('quarter');
        $language = $request->input('language');
        
        $deleted = DB::table($language)
        ->where('year', '=', $year)
        ->where('quarter', $quarter)
        ->delete();

        $deleted_2 = DB::table('data_tables')
        ->where('year', '=', $year)
        ->where('quarter', $quarter)
        ->where('language', $language)
        ->delete();

        return redirect('/dashboard');
        
        // $blog = DB::table('blog')->where('id',$id)->delete();

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


            // dd($admindata);


            $y2021 = DB::select("select * from data_tables WHERE year = 2021 ORDER BY id ASC");
            $y2022 = DB::select("select * from data_tables WHERE year = 2022 ORDER BY id ASC");
            $y2022_1 = DB::select("select * from data_tables WHERE year = 2022 AND quarter = 1 ORDER BY id ASC");
            $y2022_2 = DB::select("select * from data_tables WHERE year = 2022 AND quarter = 2 ORDER BY id ASC");
            $y2022_3 = DB::select("select * from data_tables WHERE year = 2022 AND quarter = 3 ORDER BY id ASC");
            $y2022_4 = DB::select("select * from data_tables WHERE year = 2022 AND quarter = 4 ORDER BY id ASC");



            $extra_data = DB::select("select * from data_tables");

            // dd($extra_data);

            $q2021 = DB::table('data_tables')
                 ->select('*', DB::raw('count(*) as total'))
                 ->where("year", '2021')
                 ->groupBy('year')
                 ->get();
            // dd($extra_data);

            $q2022 = DB::table('data_tables')
                 ->select('*', DB::raw('count(*) as total'))
                 ->where("year", '2022')
                 ->groupBy('year')
                 ->get();

            $q2022_1_l = DB::select("select * from data_tables WHERE year = 2022 AND quarter = 1 ORDER BY id ASC");
            $q2022_2_l = DB::select("select * from data_tables WHERE year = 2022 AND quarter = 2 ORDER BY id ASC");
            $q2022_3_l = DB::select("select * from data_tables WHERE year = 2022 AND quarter = 3 ORDER BY id ASC");
            $q2022_4_l = DB::select("select * from data_tables WHERE year = 2022 AND quarter = 4 ORDER BY id ASC");


            // dd($q2022_1_l);


            // dd(count($y2022_4));

            // 2022 q1 english

            


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


            return view('dashboard')->with('data', $admindata)
            ->with('q2022', $q2022)
            ->with('q2022_1_l', $q2022_1_l)
            ->with('q2022_2_l', $q2022_2_l)
            ->with('q2022_3_l', $q2022_3_l)
            ->with('q2022_4_l', $q2022_4_l);
        }

        return redirect("login")->withSuccess('Вам необходимо сперва залогиниться');
    }
}
