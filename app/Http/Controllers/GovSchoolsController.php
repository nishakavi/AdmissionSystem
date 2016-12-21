<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $sql1="INSERT INTO `tblgovschools`(`SchoolId`, `SchoolName`, `Address`, `City`, `PostalCode`, `NationalStatus`, `SchoolGovGrade`)
        VALUES ('$unique_id','$schoolname','$schooladdress','$city','$postalcode','$nationalgrade','$schoolgrade')";

        $sql3="INSERT INTO `tblgovschoolmedium`(`schoolmediumid`, `schoolId`, `medium`)
VALUES ([value-1],[value-2],[value-3])";

        $sql2="INSERT INTO `tblgovschoolscontact`(`ContactId`, `SchoolId`, `ContactNo`, `PhoneType`, `Owner`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])";


        $sql="INSERT INTO `tblapplication`(`ApplicationId`, `ReferenceId`, `DistrictCode`, `SubmittedDate`, `LastModifiedDate`, `ApplicationStatus`, `EffectiveDate`, `AccessedUser`) VALUES ('7853', '7877','75',NOW(),NOW(),'APPLIED',NOW(),'85')";
        DB::connection()->getPdo()->exec($sql);

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
