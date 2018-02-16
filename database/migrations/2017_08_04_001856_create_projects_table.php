<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
    	    $table->string('title', 128);
    	    $table->text('description');
            $table->string('tags', 128)->nullable();
            $table->string('slug', 128)->unique();
            $table->string('license', 128);
            $table->integer('owner')->unsigned();
            //$table->foreign('owner')->references('id')->on('users');
    	    $table->timestamps();
        });

        DB::statement('ALTER TABLE projects ADD FULLTEXT fulltext_index (title, description)');
        DB::statement('ALTER TABLE projects ADD FULLTEXT fulltext_index_tags (tags)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
