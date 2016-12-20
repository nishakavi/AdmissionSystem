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

        $routes = DB::select('select * from tblapplication');
        return view('Application.Application',compact('routes'));
    }

    public  function NewApplication(){
        $title=["AddNew Application"];
        $route=["Home","Applications","AddNew"];
        return view('Application.AddNewApplication',compact('title','route'));
    }

    public function store(Request $request){
        Applications::create(Request::all());
        return "POST";
    }
    public function show($ApplicationId){


    }
}
