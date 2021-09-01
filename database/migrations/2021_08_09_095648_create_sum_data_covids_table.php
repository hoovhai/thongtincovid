<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSumDataCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sum_data_covids', function (Blueprint $table) {
            $table->id();
            $table->integer('socanhiemvn');
            $table->integer('dangdieutrivn');
            $table->integer('khoivn');
            $table->integer('chetvn');
            $table->integer('socanhiemtg');
            $table->integer('dangdieutritg');
            $table->integer('khoitg');
            $table->integer('chettg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sum_data_covids');
    }
}
