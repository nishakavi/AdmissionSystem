<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;

class ExCurricullarController extends Controller
{
    
    public function AddNewExCurricullar()
    {
    	$layout_path=["Extra Curricular Activities","Add New"];
        $layout_title="Extra Curricular Activities";
        $layout_subtitle="Add Mode";

        return view('ExCurricular.DifinedExCurricular',compact('layout_path','layout_title','layout_subtitle'));
    }

       public function store(Request $request)
    {
        $Description= $request->Description;
        $MaximumPoints=$request->MaximumPoints;

        $unique_id=time();

        $sql_excurricular="INSERT INTO `tbldefinedexcurricular`(`CurricularId`, `Description`, `MaximumPoints`) VALUES (?,?,?)";
        $val_excurricular=[$unique_id,$Description,$MaximumPoints];
        DB::insert($sql_excurricular,$val_excurricular);

        return Redirect::to("ViewDefinedExtraCurricularActivity/Added");
    }

    public function getDefinedExCurrivularView($data)
    {

    	$layout_path=["Extra Curricular Activities","View"];
        $layout_title="Extra Curricular Activities";
        $layout_subtitle="View Mode";

        $sql_select_excurricular="select * from tbldefinedexcurricular";
        $Results_excurricular=DB::select($sql_select_excurricular);
         
        return view('ExCurricular.ViewDefinedExCurricularDetail',compact('data','layout_path','layout_title','layout_subtitle','Results_excurricular'));
    }

      public function destroy($id)
    {
        $sql_govschools="DELETE FROM `tbldefinedexcurricular` WHERE `CurricularId`=?";
        DB::delete($sql_govschools,[$id]);
        return Redirect::to("ViewDefinedExtraCurricularActivity/Deleted");
    }
}
