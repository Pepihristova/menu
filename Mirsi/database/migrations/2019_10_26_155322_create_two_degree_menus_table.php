<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwoDegreeMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('two_degree_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('salad_id');
            $table->foreign('salad_id')->references('id')->on('salads');
            $table->unsignedBigInteger('drink_id');
            $table->foreign('drink_id')->references('id')->on('drinks');
            /*$table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');*/
            $table->decimal('price');
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
        Schema::dropIfExists('two_degree_menus');
    }
}
