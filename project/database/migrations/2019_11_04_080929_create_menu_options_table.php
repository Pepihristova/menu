<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_options', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->unsignedBigInteger('menu_one_id');
            $table->foreign('menu_one_id')->references('id')->on('one_degree_menus');
            $table->unsignedBigInteger('menu_two_id');
            $table->foreign('menu_two_id')->references('id')->on('two_degree_menus');
            $table->unsignedBigInteger('menu_three_id');
            $table->foreign('menu_three_id')->references('id')->on('three_degree_menus');
            $table->unsignedBigInteger('menu_four_id');
            $table->foreign('menu_four_id')->references('id')->on('four_degree_menus');
            $table->integer('unique_id');
            $table->integer('number_people');
            $table->decimal('current_menu_price');
            $table->boolean('status');
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
        Schema::dropIfExists('menu_options');
    }
}
