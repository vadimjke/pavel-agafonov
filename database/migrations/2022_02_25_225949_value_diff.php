<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Get 2021 spanish values
        // $old_values = DB::table('spanish')->select('value')->orderBy('id');
        $new_values = DB::select("SELECT * FROM spanish WHERE year = 2022 ORDER BY id ASC");
        $old_values = DB::select("SELECT * FROM spanish WHERE year = 2021 ORDER BY id ASC");

        // for($i=0;$i<count($new_values);$i++) {
        //     DB::select("UPDATE spanish SET diff = $old_values[0] ");
        // }

        // DB::update("UPDATE");


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
