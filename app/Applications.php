<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    protected $ApplicationId = '7578';

    protected $fillable=['ReferenceId','DistrictCode'];

    public static function getMyData(){
        return DB::select('select * from tblapplication');

    }
}
