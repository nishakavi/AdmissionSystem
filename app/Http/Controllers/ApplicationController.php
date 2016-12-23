<?php

namespace App\Http\Controllers;
use App\Applications;
use Request;
use DB;

class ApplicationController extends Controller
{
    public function index(){
        //$title=["Applications"];
        //$route=["Home","Applications"];
        //return view('Application.Application',compact('title','route'));

        $routes = Applications::getMyData();
        return view('Applicant.Applicant',compact('routes'));
    }

    public  function NewApplication(){
        $title=["AddNew Application"];
        $route=["Home","Applications","AddNew"];
        return view('Application.AddNewApplication',compact('title','route'));
    }

    public function store(Request $request){
       // Applications::create(Request::all());
        //return "POST";
        //$ReferenceId= (int)$request->ReferenceId;
       // $DistrictCode=(int)$request->DistrictCode;

        // $busids=DB::slect(select bus_id from bus;

        //  var_dump($route_id);
        $sql="INSERT INTO `tblapplication`(`ApplicationId`, `ReferenceId`, `DistrictCode`, `SubmittedDate`, `LastModifiedDate`, `ApplicationStatus`, `EffectiveDate`, `AccessedUser`) VALUES ('7853', '7877','75',NOW(),NOW(),'APPLIED',NOW(),'85')";
        DB::connection()->getPdo()->exec($sql);
        $routes = DB::select('select * from tblapplication');
        return view('Application.Application',compact('routes'));
    }
    public function show($ApplicationId){


    }
}
