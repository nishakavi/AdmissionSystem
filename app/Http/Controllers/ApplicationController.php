<?php

namespace App\Http\Controllers;
use App\Applications;
use Request;

class ApplicationController extends Controller
{
    public function index(){
        $title=["Applications"];
        $route=["Home","Applications"];
        return view('Application.Application',compact('title','route'));
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
