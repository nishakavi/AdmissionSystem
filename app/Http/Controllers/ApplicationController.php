<?php

namespace App\Http\Controllers;
use App\Applications;
use Request;
use DB;

class ApplicationController extends Controller
{
    public function index(){
        $layout_path=["Application","View All Application"];
        $layout_title="All School Application";
        $layout_subtitle="View Mode";

        $routes = Applications::getMyData();
        return view('Applicant.Applicant',compact('layout_path','layout_title','layout_subtitle','routes'));
    }

    public  function NewApplication(){
        $title=["AddNew Application"];
        $route=["Home","Applications","AddNew"];
        return view('Application.AddNewApplication',compact('title','route'));
    }

    public function store(Request $request){
        $layout_path=["Application","View All Application"];
        $layout_title="All School Application";
        $layout_subtitle="View Mode";

        //want to move this to model
        $sql="INSERT INTO `tblapplication`(`ApplicationId`, `ReferenceId`, `DistrictCode`, `SubmittedDate`, `LastModifiedDate`, `ApplicationStatus`, `EffectiveDate`, `AccessedUser`) VALUES ('7853', '7877','75',NOW(),NOW(),'APPLIED',NOW(),'85')";
        DB::connection()->getPdo()->exec($sql);
        $routes = DB::select('select * from tblapplication');
        return view('Application.Application',compact('layout_path','layout_title','layout_subtitle','routes'));
    }
    public function show($ApplicationId){


    }
}
