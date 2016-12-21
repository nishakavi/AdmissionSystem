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


        });

        Schema::create('tblApplicantGuardian', function (Blueprint $table) {
            $table->integer('ParentId')->unique();
            $table->primary('ParentId');
            $table->integer('ReferenceId')->unique();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Occupation');
            $table->dateTime('DateOfBirth');
            $table->string('Relationship');
            $table->dateTime('EffectiveDate');
            //$table->timestamps();

        });

        Schema::create('tblApplicantContact', function (Blueprint $table) {
            $table->integer('ContactId')->unique();
            $table->primary('ContactId');
            $table->integer('ReferenceId')->unique();
            $table->string('ContactNo');
            $table->string('PhoneType');
            $table->dateTime('EffectiveDate');

        });

        Schema::create('tblApplicantResidence', function (Blueprint $table) {
            $table->integer('ResidenceId')->unique();
            $table->primary('ResidenceId');
            $table->integer('ReferenceId')->unique();
            $table->string('AddressLine1');
            $table->string('AddressLine2');
            $table->string('City');
            $table->string('Province');
            $table->integer('PostalCode');
            $table->string('AddressType');
            $table->dateTime('EffectiveDate');


        });

        Schema::create('tblSelectedSchool', function (Blueprint $table) {
            $table->integer('SelectedId')->unique();
            $table->primary('SelectedId');
            $table->integer('ReferenceId')->unique();
            $table->integer('AppliedScId');
            $table->dateTime('EffectiveDate');
            $table->string('Changes');

        });

        Schema::create('tblStudentsDetails', function (Blueprint $table) {
            $table->integer('StudentIndexNo')->unique();
            $table->primary('StudentIndexNo');
            $table->integer('AppRefrenceId');
            $table->dateTime('ApprovedDate');
            $table->dateTime('JoinedDate');


        });

        Schema::create('tblReqOldStudents', function (Blueprint $table) {
            $table->integer('ReqOldStudentId')->unique();
            $table->primary('ReqOldStudentId');
            $table->integer('ReferenceId')->unique();
            $table->string('StudentIndexNo');
            $table->string('Relationship');
            $table->boolean('ApprovedStatus');
            $table->integer('ApprovedUser');
            $table->dateTime('EffectiveDate');
        });

        Schema::create('tblStudentSchool', function (Blueprint $table) {
            $table->integer('StudentSchoolId')->unique();
            $table->primary('StudentSchoolId');
            $table->string('StudentIndexNo');
            $table->integer('SchoolId');
            $table->dateTime('JoinedDate');
            $table->integer('JoinedGrade');
            $table->dateTime('LeaveDate');
            $table->string('LeaveReason');
        });

        Schema::create('tblAppliedSchools', function (Blueprint $table) {
            $table->integer('AppliedSclId')->unique();
            $table->primary('AppliedSclId');
            $table->integer('ReferenceId')->unique();
            $table->integer('SchoolId');
            $table->integer('PreferenceOrder');
            $table->dateTime('EffectiveDate');
            $table->integer('Points');
        });

        Schema::create('tblGovSchoolsContact', function (Blueprint $table) {
            $table->integer('ContactId')->unique();
            $table->primary('ContactId');
            $table->integer('SchoolId')->unique();
            $table->string('ContactNo');
            $table->string('PhoneType');
            $table->string('Owner');
        });

        Schema::create('tblGovSchools', function (Blueprint $table) {
            $table->integer('SchoolId')->unique();
            $table->primary('SchoolId');
            $table->string('SchoolName');
            $table->string('Address');
            $table->string('City');
            $table->integer('PostalCode');
            $table->string('NationalStatus');
            $table->string('SchoolGovGrade');
        });

        Schema::create('tblGovSchoolGrades', function (Blueprint $table) {
            $table->integer('SclGradeId')->unique();
            $table->primary('SclGradeId');
            $table->integer('SchoolId')->unique();
            $table->integer('Grade');
            $table->integer('AllocatedMaxStudents');

        });

        Schema::create('tblgovschoolmedium', function (Blueprint $table) {
            $table->integer('schoolmediumid')->unique();
            $table->primary('schoolmediumid');
            $table->integer('SchoolId');
            $table->string('medium');

        });

        Schema::create('tblDefinedExCurricular', function (Blueprint $table) {
            $table->integer('CurricularId')->unique();
            $table->primary('CurricularId');
            $table->string('Description');
            $table->integer('MaximumPoints');

        });

        Schema::create('tblLoginHistory', function (Blueprint $table) {
            $table->integer('LoginHistoryId')->unique();
            $table->primary('LoginHistoryId');
            $table->integer('UserId')->unique();
            $table->dateTime('LoginDate');
            $table->dateTime('LastActiveDate');

        });

        Schema::create('tblUsers', function (Blueprint $table) {
            $table->integer('UserId')->unique();
            $table->primary('UserId');
            $table->integer('PersonId')->unique();
            $table->string('UserName');
            $table->string('Password');
            $table->string('UserLevel');
            $table->boolean('LoginStatus');

        });

        Schema::create('tblPerson', function (Blueprint $table) {
            $table->integer('PersonId')->unique();
            $table->primary('PersonId');
            $table->string('FirstName')->unique();
            $table->string('LastName');
            $table->string('Email');
            $table->string('ContactNo');
            $table->string('Status');
        });

        Schema::create('ApplicationLog', function (Blueprint $table) {
            $table->integer('LogId')->unique();
            $table->primary('LogId');
            $table->integer('ReferenceId')->unique();
            $table->dateTime('StartTime');
            $table->dateTime('EndTime');
            $table->integer('AccessedUser');


        });

        Schema::create('tblHistoryLog', function (Blueprint $table) {
            $table->integer('HistoryId')->unique();
            $table->primary('HistoryId');
            $table->integer('LogId')->unique();
            $table->string('TableName');
            $table->string('FieldName');
            $table->string('EventType');
            $table->string('OldValue');

        });

        Schema::create('tblExCurricularActivities', function (Blueprint $table) {
            $table->integer('ExCurrId')->unique();
            $table->primary('ExCurrId');
            $table->integer('ReferenceId')->unique();
            $table->integer('CurricularId');
            $table->string('ExtraDetails');
            $table->boolean('ApprovedStatus');
            $table->integer('ApprovedUser');
            $table->DateTime('EffectiveDate');
            $table->integer('Points');
        });

        Schema::create('tblPoints', function (Blueprint $table) {
            $table->integer('PointsId')->unique();
            $table->primary('PointsId');
            $table->integer('ReferenceId')->unique();
            $table->string('Description');
            $table->string('Points');
            $table->dateTime('EffectiveDate');


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
        Schema::drop('tblApplicantGuardian');
        Schema::drop('tblApplicantContact');
        Schema::drop('tblApplicantResidence');
        Schema::drop('tblSelectedSchools');
        Schema::drop('tblStudentsDetails');
        Schema::drop('tblReqOldStudents');
        Schema::drop('tbltblStudentSchool');
        Schema::drop('tblAppliedSchools');
        Schema::drop('tblGovSchoolsContact');
        Schema::drop('tblGovSchools');
        Schema::drop('tblGovSchoolGrades');
        Schema::drop('tblGovSchoolMedium');
        Schema::drop('tblDefinedExCurricular');
        Schema::drop('tblLoginHistory');
        Schema::drop('tblUsers');
        Schema::drop('tblPerson');
        Schema::drop('tblApplicationLog');
        Schema::drop('tblHistoryLog');
        Schema::drop('tblPoints');
        Schema::drop('tblExCurricularActivities');
    }
}
