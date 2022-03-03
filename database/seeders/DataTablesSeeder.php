<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DataTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {




        DB::table('data_tables')->insert([

            [
                'year' => '2021',
                'quarter' => '4',
                'language' => 'english',
                'exists' => 1,
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'language' => 'arabic',
                'exists' => 1,
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'language' => 'chinese',
                'exists' => 1,
            ],
            [
                'year' => '2021',
                'quarter' => '4',
                'language' => 'spanish',
                'exists' => 1,
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'language' => 'spanish',
                'exists' => 1,
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'language' => 'english',
                'exists' => 1,
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'language' => 'arabic',
                'exists' => 1,
            ],
            [
                'year' => '2022',
                'quarter' => '1',
                'language' => 'chinese',
                'exists' => 1,
            ],
        ]);
    }
}
