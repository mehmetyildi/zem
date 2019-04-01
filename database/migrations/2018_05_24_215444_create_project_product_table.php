<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_project', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->nullableTimestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');;
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');;

            $table->primary(['product_id', 'project_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_project');
    }
}
