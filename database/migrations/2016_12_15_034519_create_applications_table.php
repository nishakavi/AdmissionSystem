<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
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

        Schema::create('applicationDetails', function (Blueprint $table) {
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
        Schema::dropIfExists('applications');
        Schema::dropIfExists('applicationDetails');
    }
}
