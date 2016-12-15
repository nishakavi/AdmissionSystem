<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblApplication', function (Blueprint $table) {
            $table->integer('ApplicationId')->unique();
            $table->primary('ApplicationId');
            $table->integer('ReferenceId')->unique();
            $table->integer('DistrictCode');
            $table->dateTime('SubmittedDate');
            $table->dateTime('LastModifiedDate');
            $table->string('ApplicationStatus');
            $table->dateTime('EffectiveDate');
            $table->integer('AccessedUser');
            //$table->timestamps();

        });

        Schema::create('tblApplicationDetails', function (Blueprint $table) {
            $table->integer('DetailId')->unique();
            $table->primary('DetailId');
            $table->integer('ReferenceId')->unique();
            $table->string('FirstName');
            $table->string('LastName');
            $table->dateTime('DateofBirth');
            $table->string('Gender');
            $table->dateTime('EffectiveDate');
            //$table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tblApplication');
        Schema::drop('tblApplicationDetails');
    }
}
