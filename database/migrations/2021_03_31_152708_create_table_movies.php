<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('movie_name');
            $table->string('movie_directors');
            $table->string('movie_actors');
            $table->string('movie_time');
            $table->string('movie_language');
            $table->string('movie_rated');
            $table->string('movie_rating');
            $table->string('movie_description');
            $table->string('movie_releasetime');
            $table->string('movie_image');
            $table->string('movie_status');
            $table->Integer('movie_cate')->unsigned();
            
            $table->foreign('movie_cate')
                  ->references('category_id')
                  ->on('categories') 
                  ->onDelete('cascade');
                  /* cascade là khi xóa 1 danh mục thì đôngf nghĩa các sp thuộc danh mục đó cũng bị xóa đi*/
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
        Schema::dropIfExists('table_movies');
    }
}
