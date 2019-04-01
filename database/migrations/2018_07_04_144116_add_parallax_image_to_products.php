<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddParallaxImageToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('categories', function($table){
            $table->string('mobil_image')->nullable();
        });
        Schema::table('products', function($table){
            $table->string('mobil_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function ($table) {
            $table->dropColumn('mobil_image');
        });
        Schema::table('categories', function ($table) {
            $table->dropColumn('mobil_image');
        });
    }
}
