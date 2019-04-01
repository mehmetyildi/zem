<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabaseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Slide.php */
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_tr')->nullable();
            $table->string('title_en')->nullable();
            $table->text('caption_tr')->nullable();
            $table->text('caption_en')->nullable();
            $table->string('link')->nullable();
            $table->boolean('openInNewTab')->default(false);
            $table->string('main_image')->nullable();
            $table->boolean('publish')->default(false);
            $table->integer('position')->default(1);
            $table->date('publish_at')->nullable();
            $table->date('publish_until')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->nullableTimestamps();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        /* Employee.php */
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('job_title_tr')->nullable();
            $table->string('job_title_en')->nullable();
            $table->string('main_image')->nullable();
            $table->string('desk_phone')->nullable();
            $table->string('desk_extension')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('pbx')->nullable();
            $table->string('email')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('vcf')->nullable();
            $table->boolean('publish')->default(false);
            $table->integer('position')->default(1);
            $table->date('publish_at')->nullable();
            $table->date('publish_until')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->nullableTimestamps();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        /* Article.php */
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_tr')->nullable();
            $table->string('title_en')->nullable();
            $table->text('caption_tr')->nullable();
            $table->text('caption_en')->nullable();
            $table->text('description_tr')->nullable();
            $table->text('description_en')->nullable();
            $table->string('url_tr');
            $table->string('url_en');
            $table->string('video_path')->nullable();
            $table->string('main_image')->nullable();
            $table->boolean('promote')->default(false);
            $table->boolean('publish')->default(false);
            $table->integer('position')->default(1);
            $table->date('actual_date')->nullable();
            $table->date('publish_at')->nullable();
            $table->date('publish_until')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->nullableTimestamps();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        /* ArticleImage.php */
        Schema::create('article_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->string('title_tr')->nullable();
            $table->string('title_en')->nullable();
            $table->string('main_image')->nullable();
            $table->boolean('publish')->default(false);
            $table->integer('position')->default(1);
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->nullableTimestamps();

            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        /* Sector.php */
        Schema::create('sectors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_tr')->nullable();
            $table->string('title_en')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        /* ProjectType.php */
        Schema::create('project_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_tr')->nullable();
            $table->string('title_en')->nullable();
            $table->string('icon')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        /* City.php */
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        /* Customer.php */
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_tr')->nullable();
            $table->string('title_en')->nullable();
            $table->string('logo')->nullable();
            $table->string('staff_name')->nullable();
            $table->string('staff_image')->nullable();
            $table->string('staff_title_tr')->nullable();
            $table->string('staff_title_en')->nullable();
            $table->text('testimonial_tr')->nullable();
            $table->text('testimonial_en')->nullable();
            $table->boolean('promote')->default(false);
            $table->boolean('publish')->default(false);
            $table->integer('position')->default(1);
            $table->date('publish_at')->nullable();
            $table->date('publish_until')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->nullableTimestamps();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        /* CustomerSector.php */
        Schema::create('customer_sector', function (Blueprint $table) {
            $table->integer('customer_id')->unsigned();
            $table->integer('sector_id')->unsigned();
            $table->nullableTimestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');;
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');;

            $table->primary(['customer_id', 'sector_id']);
        });

        /* Category.php */
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_tr')->nullable();
            $table->string('title_en')->nullable();
            $table->string('main_image')->nullable();
            $table->string('icon')->nullable();
            $table->text('description_tr')->nullable();
            $table->text('description_en')->nullable();
            $table->string('url_tr');
            $table->string('url_en');
            $table->boolean('isDetailedCategory')->default(false);
            $table->boolean('promote')->default(false);
            $table->boolean('publish')->default(false);
            $table->integer('position')->default(1);
            $table->date('publish_at')->nullable();
            $table->date('publish_until')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->nullableTimestamps();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        /* Product.php */
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('title_tr')->nullable();
            $table->string('title_en')->nullable();
            $table->text('description_tr')->nullable();
            $table->text('description_en')->nullable();
            $table->text('advantages_tr')->nullable();
            $table->text('advantages_en')->nullable();
            $table->string('url_tr');
            $table->string('url_en');
            $table->string('video_path')->nullable();
            $table->string('main_image')->nullable();
            $table->boolean('promote')->default(false);
            $table->boolean('publish')->default(false);
            $table->integer('position')->default(1);
            $table->date('publish_at')->nullable();
            $table->date('publish_until')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->nullableTimestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        /* ProductImage.php */
        Schema::create('product_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->text('caption_tr')->nullable();
            $table->text('caption_en')->nullable();
            $table->string('main_image')->nullable();
            $table->boolean('publish')->default(false);
            $table->integer('position')->default(1);
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->nullableTimestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        /* Project.php */
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned()->nullable();
            $table->integer('project_type_id')->unsigned()->nullable();
            $table->integer('city_id')->unsigned()->nullable();
            $table->integer('product_id')->unsigned()->nullable();
            $table->string('title_tr')->nullable();
            $table->string('title_en')->nullable();
            $table->text('caption_tr')->nullable();
            $table->text('caption_en')->nullable();
            $table->text('description_tr')->nullable();
            $table->text('description_en')->nullable();
            $table->string('area_size_tr')->nullable();
            $table->string('area_size_en')->nullable();
            $table->string('duration_tr')->nullable();
            $table->string('duration_en')->nullable();
            $table->string('url_tr');
            $table->string('url_en');
            $table->string('video_path')->nullable();
            $table->string('main_image')->nullable();
            $table->boolean('promote')->default(false);
            $table->boolean('publish')->default(false);
            $table->integer('position')->default(1);
            $table->date('publish_at')->nullable();
            $table->date('publish_until')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->nullableTimestamps();

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('project_type_id')->references('id')->on('project_types');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        /* ProjectImage.php */
        Schema::create('project_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->text('caption_tr')->nullable();
            $table->text('caption_en')->nullable();
            $table->string('main_image')->nullable();
            $table->boolean('publish')->default(false);
            $table->integer('position')->default(1);
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->nullableTimestamps();

            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        /* Reference.php */
        Schema::create('references', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('project_id')->unsigned()->nullable();
            $table->string('main_image')->nullable();
            $table->boolean('promote')->default(false);
            $table->boolean('publish')->default(false);
            $table->integer('position')->default(1);
            $table->date('publish_at')->nullable();
            $table->date('publish_until')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('references');
        Schema::dropIfExists('project_images');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('customer_sector');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('project_types');
        Schema::dropIfExists('sectors');
        Schema::dropIfExists('article_images');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('employees');
        Schema::dropIfExists('slides');
    }
}
