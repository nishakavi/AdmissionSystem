@extends('layout.default')
@section('content')
    <form class="form-horizontal" role="form" method="post" action="StoreNewApplication">
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Reference Id </label>
            <div class="col-sm-9">
                <input type="text" id="ReferenceId" name="ReferenceId" placeholder="Application Reference Id" class="col-xs-10 col-sm-5" />
            </div>
        </div>
        <div class="space-4"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> District Code </label>
            <div class="col-sm-9">
                <input type="text" id="DistrictCode" name="DistrictCode" placeholder="Your District Code" class="col-xs-10 col-sm-5" />
            </div>
        </div>
        <div class="space-4"></div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Birth Certificate Number</label>
            <div class="col-sm-9">
                <input type="text" id="DistrictCode" name="DistrictCode" placeholder="Your Birth Certificate Code" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" >

        {{csrf_field()}}

        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <button class="btn btn-info" type="submit">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    Submit
                </button>

                &nbsp; &nbsp; &nbsp;
                <button class="btn" type="reset">
                    <i class="ace-icon fa fa-undo bigger-110"></i>
                    Reset
                </button>
            </div>
        </div>
    </form>
@stop