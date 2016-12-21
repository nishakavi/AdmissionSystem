<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GovSchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('GovSchools.AddNewGovSchool');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schoolname= $request->schoolname;
        $schooladdress=$request->schooladdress;
        $city=$request->city;
        $postalcode=$request->postalcode;
        $nationalgrade= $request->nationalgrade;
        $schoolgrade=$request->schoolgrade;

        $schoolmedium=$request->schoolmedium;

        $contactno=$request->contactno;
        $ownerdesination=$request->ownerdesination;
        $ownername=$request->ownername;
        $mobiletype=$request->mobiletype;

        $grade01allocation=$request->grade01allocation;

        $unique_id=time();

        $sql_govschools="INSERT INTO `tblgovschools`(`SchoolId`, `SchoolName`, `Address`, `City`, `PostalCode`, `NationalStatus`, `SchoolGovGrade`)
        VALUES ('$unique_id','$schoolname','$schooladdress','$city','$postalcode','$nationalgrade','$schoolgrade')";
        DB::insert($sql_govschools);

        $count_id=0;
        foreach ($schoolmedium as $medium){
            $count_id+=1;
            $tmp_value=$unique_id+$count_id;
            $sql_govmedium="INSERT INTO `tblgovschoolmedium`(`schoolmediumid`, `schoolId`, `medium`)
            VALUES ('$tmp_value','$unique_id','$medium')";
            DB::insert($sql_govmedium);
        }

        $sql_govcontact="INSERT INTO `tblgovschoolscontact`(`ContactId`, `SchoolId`, `ContactNo`, `PhoneType`, `Ownername`,`ownerdesination`)
        VALUES ('$unique_id','$unique_id','$contactno','$mobiletype','$ownername','$ownerdesination')";
        DB::connection()->getPdo()->exec($sql_govcontact);

        $sql_govgrades="INSERT INTO `tblgovschoolgrades`(`SclGradeId`, `SchoolId`, `Grade`, `AllocatedMaxStudents`)
        VALUES ('$unique_id','$unique_id','1','$grade01allocation')";
        DB::connection()->getPdo()->exec($sql_govgrades);


        $sql_select_school="select * from tblgovschools";
        $result_1=DB::select($sql_select_school);
        $sql_select_meidum="select * from tblgovschoolmedium";
        $result_2=DB::select($sql_select_meidum);
        $sql_select_contact="select * from tblgovschoolscontact";
        $result_3=DB::select($sql_select_contact);
        $sql_select_grades="select * from tblgovschoolgrades";
        $result_4=DB::select($sql_select_grades);

        return "POST";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
