<?php

use Illuminate\Support\Facades\Schema;
//use Illuminate\Database\Schema\Blueprint;
use Grimzy\LaravelMysqlSpatial\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('users', function (Blueprint $table) {
            $table->boolean('isManufacturer')->nullable();
            $table->string('manufacturerAddress')->nullable();
            $table->string('manufacturerName')->nullable();
            $table->string('manufacturerWebsite')->nullable();
            $table->string('manufacturerBillingAddress')->nullable();
            $table->integer('manufacturerWorkTime')->default(0);        
            $table->string('manufacturerPhoneNumber')->nullable();
            $table->string('manufacturerTools')->nullable();
            $table->string('manufacturerAdditionals')->nullable();

            $table->string('customerAddressCountry')->nullable();
            $table->string('customerAddressZip')->nullable();
            $table->string('customerAddressCity')->nullable();
            $table->string('customerAddressStreet')->nullable();
            $table->string('customerAddressStreetNumber')->nullable();
            $table->point('customerAddressGPS')->nullable();

            $table->string('manufacturerAddressCountry')->nullable();
            $table->string('manufacturerAddressZip')->nullable();
            $table->string('manufacturerAddressCity')->nullable();
            $table->string('manufacturerAddressStreet')->nullable();
            $table->string('manufacturerAddressStreetNumber')->nullable();
            $table->point('manufacturerAddressGPS')->nullable();
        });
        //
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
