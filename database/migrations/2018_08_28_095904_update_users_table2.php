<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable();
            $table->string('realname')->nullable();
            $table->string('twitterUrl')->nullable();
            $table->string('linkedinUrl')->nullable();
            $table->string('walletAddress')->nullable();
            $table->text('bio')->nullable();
            $table->string('skills')->nullable();
            $table->string('interests')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
