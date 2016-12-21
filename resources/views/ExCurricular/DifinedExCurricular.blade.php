 


@extends('layout.default')
@section('LayoutRoute')
    @foreach($layout_path as $arrival)
        <li class="active">{{ $arrival }}</li>
    @endforeach
@endsection

@section('LayoutTitle')
    {{ $layout_title }}
    <small>
    <i class="ace-icon fa fa-angle-double-right"></i>
        {{ $layout_subtitle }}
    </small>
@endsection

@section('content')

<div class="main-container ace-save-state" id="main-container">
    <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                        <div class="widget-box">
                            <div class="widget-header widget-header-blue widget-header-flat">
                                <h4 class="widget-title lighter">Extra Curricular Activity</h4>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div id="fuelux-wizard-container">
                                 

                                     

                                        <form class="form-horizontal" action="StoreNewExtraCurricularActivity" role="form" id="StoreNewExtraCurricularActivity" name="StoreNewExtraCurricularActivity" method="post">
                                        <div class="step-content pos-rel">
                                            <div class="step-pane active" data-step="1">
                                                <h3 class="lighter block green">Add New Extra Curricular Activity</h3>
                                                   

                                                    <div class="space-2"></div>
                                                    <div class="space-4"></div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>
                                                        <div class="col-sm-9">
                                                            <textarea id="Description" name="Description" class="col-xs-10 col-sm-5" ></textarea> 
                                                        </div>
                                                    </div>
                                                    <div class="space-4"></div>


                                                    <div class="space-4"></div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Maximum Points </label>
                                                        <div class="col-sm-9">
                                                            <input type="number" id="MaximumPoints" name="MaximumPoints" placeholder="Provide the Maximum points" class="col-xs-10 col-sm-5" >
                                                            </textarea> 
                                                        </div>
                                                    </div>                                                     





                                                 

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
                                    </div>

                                  

                                </div><!-- /.widget-main -->
                            </div><!-- /.widget-body -->
                        </div>



                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->




</div><!-- /.main-container -->

<!-- basic scripts -->

<!-- inline scripts related to this page -->

<!-- page specific plugin scripts -->
<script src="assets/js/wizard.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/jquery-additional-methods.min.js"></script>
<script src="assets/js/bootbox.js"></script>
<script src="assets/js/jquery.maskedinput.min.js"></script>
<script src="assets/js/select2.min.js"></script>



<script type="text/javascript">
// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='StoreNewExtraCurricularActivity']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      Description: "required",
      MaximumPoints: "required"
    },
    // Specify validation error messages
    messages: {
      Description: "Please enter the Description",
      MaximumPoints: "Please provide a Maximum Points for this Activity"
    },
    highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },

            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                $(e).remove();
            },

            errorPlacement: function (error, element) {
                if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                    var controls = element.closest('div[class*="col-"]');
                    if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                    else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                }
                else if(element.is('.select2')) {
                    error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                }
                else if(element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element.parent());
            },

    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});



   
</script>


@stop