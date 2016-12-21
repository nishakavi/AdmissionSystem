<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Redirect;

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


    public function ShowAllGovDetails()
    {
        $layout_path=["Govenment Schools","View All Schools"];
        $layout_title="All School Details";
        $layout_subtitle="View Mode";

        $sql_select_school="select * from tblgovschools";
        $Results_school=DB::select($sql_select_school);

        return view('GovSchools.ViewAllGovSchools',compact('layout_path','layout_title','layout_subtitle','Results_school'));
    }

    public function ShowAllGovDetails_value($id)
    {
        $layout_path=["Govenment Schools","View All Schools"];
        $layout_title="All School Details";
        $layout_subtitle="View Mode";

        $sql_select_school="select * from tblgovschools";
        $Results_school=DB::select($sql_select_school);

        return view('GovSchools.ViewAllGovSchools',compact('id','layout_path','layout_title','layout_subtitle','Results_school'));
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

       // $request->session()->flash('status_value', 'Task was successful!');
        $username="ABS";
        return Redirect::to("ViewGovSchoolDetail/".$unique_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
    }


    public function getSchoolDetailsView($id){

        $layout_path=["Govenment Schools","View Schools"];
        $layout_title="School Details";
        $layout_subtitle="View Mode";

        $sql_select_school="select * from tblgovschools where SchoolId=?";
        $Results_school=DB::select($sql_select_school,[$id]);
        $sql_select_meidum="select * from tblgovschoolmedium where SchoolId=?";
        $Result_Medium=DB::select($sql_select_meidum,[$id]);
        $sql_select_contact="select * from tblgovschoolscontact where SchoolId=?";
        $Result_Contact=DB::select($sql_select_contact,[$id]);
        $sql_select_grades="select * from tblgovschoolgrades where SchoolId=?";
        $Result_Grade=DB::select($sql_select_grades,[$id]);

         
        return view('GovSchools.ViewGovSchoolDetail',compact('id','layout_path','layout_title','layout_subtitle','Results_school','Result_Medium','Result_Contact','Result_Grade'));
    }
    
    public function DeleteConfirmation($id){
        $layout_path=["Govenment Schools","Delete Schools"];
        $layout_title="Delete School Details";
        $layout_subtitle="Confirm Mode";

        $sql_select_school="select * from tblgovschools where SchoolId=?";
        $Results_school=DB::select($sql_select_school,[$id]);
        return view('GovSchools.DeleteGovSchools',compact('layout_path','layout_title','layout_subtitle','Results_school'));
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
        $sql_govschools="DELETE FROM `tblgovschools` WHERE `SchoolId`=?";
        DB::delete($sql_govschools,[$id]);
        return Redirect::to("ShowAllGovDetails/Deleted");
    }
}
