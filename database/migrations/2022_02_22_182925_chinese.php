<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chinese', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('quarter');
            $table->string('name');
            $table->string('display_name');
            $table->integer('population');
            $table->bigInteger('mentions');
            $table->float('pentil', 4, 1);
            $table->float('value', 8, 4);
            $table->float('diff', 4, 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chinese');
    }
};
