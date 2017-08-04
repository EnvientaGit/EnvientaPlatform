<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_user', function (Blueprint $table) {
	  $table->integer('project_id')->unsigned()->nullable();
	  $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

	  $table->integer('user_id')->unsigned()->nullable();
	  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');            
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
        Schema::dropIfExists('project_user');
    }
}
