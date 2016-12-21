<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;

class UsersController extends Controller
{
    public function AddNewUser()
    {
    	$layout_path=["Users","Add New"];
        $layout_title="Users";
        $layout_subtitle="Add Mode";

        return view('User.User',compact('layout_path','layout_title','layout_subtitle'));
    }


    public function store(Request $request)
    {
        $firstname= $request->firstname;
        $lastname=$request->lastname;
        $email= $request->email;
        $contactno=$request->contactno;

        $username= $request->username;
        $password=$request->password;
        $userlevel= $request->userlevel;
        
        $unique_id=time();

        $sql_newuser="INSERT INTO `tblperson`(`PersonId`, `FirstName`, `LastName`, `Email`, `ContactNo`, `Status`) VALUES (?,?,?,?,?,?)";
        $val_newuser=[$unique_id,$firstname,$lastname,$email,$contactno,'ACTIVE'];
        DB::insert($sql_newuser,$val_newuser);
		$sql_newuser="INSERT INTO `tblusers`(`UserId`, `PersonId`, `UserName`, `Password`, `UserLevel`, `LoginStatus`) VALUES (?,?,?,?,?,?)";
        $val_newuser=[$unique_id,$unique_id,$username,$password,$userlevel,'0'];
        DB::insert($sql_newuser,$val_newuser);


        return Redirect::to("ViewUserDetail/".$unique_id."/Added");
    }

    public function getUserDetail_value($id,$data)
    {
      	$layout_path=["Users","View User Details"];
        $layout_title="User Details";
        $layout_subtitle="View Mode";

        $sql_select_userdetails="SELECT * FROM `tblperson`  INNER JOIN tblusers on tblperson.PersonId=tblusers.PersonId where tblperson.PersonId=? limit 0,1";
        $Results_userdetails=DB::select($sql_select_userdetails,[$id]);

         
        return view('User.ViewUserDetail',compact('data','id','layout_path','layout_title','layout_subtitle','Results_userdetails'));
    }

    public function getAllUserDetail()
    {
    	$layout_path=["Users","View User Details"];
        $layout_title="All User Details";
        $layout_subtitle="View Mode";

        $sql_select_userdetails="SELECT * FROM `tblperson`  INNER JOIN tblusers on tblperson.PersonId=tblusers.PersonId";
        $Results_userdetails=DB::select($sql_select_userdetails);

         
        return view('User.ViewAllUserDetails',compact('layout_path','layout_title','layout_subtitle','Results_userdetails'));
    }

}
