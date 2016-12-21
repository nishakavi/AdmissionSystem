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
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Carricullar Id </label>
            <div class="col-sm-9">
                <input type="text" id="CarricullarId" name="CarricullarId" placeholder="Your Carricullar Id " class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="space-4"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Extra Details </label>
            <div class="col-sm-9">
                <textarea id="ExtraDetails" name="ExtraDetails" placeholder="Type Extra Details" class="col-xs-10 col-sm-5" >
                </textarea> 
            </div>
        </div>
        <div class="space-4"></div>

        <

        <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="ApprovedStatus">ApprovedStatus : </label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <select id="ApprovedStatus" name="ApprovedStatus" class="select2" data-placeholder="Click to Choose...">
                                                                <option value="">&nbsp;</option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>
                                                    </div>

        <div class="space-4"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Approved User </label>
            <div class="col-sm-9">
                <input type="text" id="ApprovedUser" name="ApprovedUser" placeholder="Type Approved User" class="col-xs-10 col-sm-5" >
                </textarea> 
            </div>
        </div>


        <div class="space-4"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Effective Date </label>
            <div class="col-sm-9">
                <input type="Date" id="EffectiveDate" name="EffectiveDate" class="col-xs-10 col-sm-5" >
                </textarea> 
            </div>
        </div>

        <div class="space-4"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Points </label>
            <div class="col-sm-9">
                <input type="text" id="Points" name="Points" placeholder="Provide the points" class="col-xs-10 col-sm-5" >
                </textarea> 
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





