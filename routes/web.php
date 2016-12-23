<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('Application.show');
});

Route::get('/Application', 'ApplicationController@index');
Route::get('/AddNewApplication', 'ApplicationController@NewApplication');
Route::post('/StoreNewApplication', 'ApplicationController@Store');
Route::get('/Application/{id}', 'ApplicationController@show');

Route::get('/AddGovSchools', 'GovSchoolsController@index');
Route::post('/addnewgovschool', 'GovSchoolsController@Store');
Route::get('/ViewGovSchoolDetail/{id}', 'GovSchoolsController@getSchoolDetailsView');
Route::get('/ViewGovSchoolDetail/{id}/{data}', 'GovSchoolsController@getSchoolDetailsView_value');
Route::get('/ShowAllGovDetails', 'GovSchoolsController@ShowAllGovDetails');
Route::get('/ShowAllGovDetails/{id}', 'GovSchoolsController@ShowAllGovDetails_value');
Route::get('/ConfirmDeleteGovSchools/{id}', 'GovSchoolsController@DeleteConfirmation');
Route::get('/DeleteGovSchools/{id}', 'GovSchoolsController@destroy');


Route::get('/AddNewDefineExCurricular', 'ExCurricullarController@AddNewExCurricullar');
Route::post('/StoreNewExtraCurricularActivity', 'ExCurricullarController@Store');
Route::get('/ViewDefinedExtraCurricularActivity/{data}', 'ExCurricullarController@getDefinedExCurrivularView');
Route::get('/DeleteExCurricular/{id}', 'ExCurricullarController@destroy');


Route::get('/AddNewUser', 'UsersController@AddNewUser');
Route::post('/AddNewUserDetails', 'UsersController@Store');
Route::get('/ViewUserDetail/{id}/{data}', 'UsersController@getUserDetail_value');
Route::get('/ViewAllUserDetail/{Data}', 'UsersController@getAllUserDetail');
Route::get('/ConfirmDeleteUsers/{id}', 'UsersController@DeleteConfirmation');
Route::get('/DeleteUserDetails/{id}', 'UsersController@destroy');

Route::get('/Application/{id}', function($id) {
        //this will find the rows where id=12345
    //$applications=App\Applications::find($id);
    //print_r( $applications->DistrictCode);

        //this will select WHERE RefrenceId=12456
    //$applications=App\Applications::where('ReferenceId','=',123456)->first();
    //print_r( $applications->DistrictCode);

    $applications=App\Applications::all();
    foreach($applications as $app){
        echo ( $app.'<br/>');
    }
});