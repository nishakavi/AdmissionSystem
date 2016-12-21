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
                                <h4 class="widget-title lighter">Add New Person</h4>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div id="fuelux-wizard-container">
                                 

                                     

                                        <form class="form-horizontal" action="AddNewUserDetails" role="form" id="AddNewUserDetails" name="AddNewUserDetails" method="post">
                                        <div class="step-content pos-rel">
                                            <div class="step-pane active" data-step="1">
                                                <h3 class="lighter block green">Person Details</h3>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="firstname">First Name :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" name="firstname" id="firstname" class="col-xs-12 col-sm-6" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="lastname">Last Name :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" name="lastname" id="lastname" class="col-xs-12 col-sm-6" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">E-mail :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="email" name="email" id="email" class="col-xs-12 col-sm-6" />
                                                            </div>
                                                        </div>
                                                    </div>

                                               
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="contactno">Contcact No :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" id="contactno" name="contactno" class="col-xs-12 col-sm-6" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="hr hr-dotted"></div>

                                        
                                                 <h3 class="lighter block green">User Details</h3>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="username">User Name :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" name="username" id="username" class="col-xs-12 col-sm-6" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Password :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="password" name="password" id="password" class="col-xs-12 col-sm-4" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">Retype Password :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="password" name="password2" id="password2" class="col-xs-12 col-sm-4" />
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="userlevel">User Level : </label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <select id="userlevel" name="userlevel" class="select2" data-placeholder="Click to Choose...">
                                                                <option value="">&nbsp;</option>
                                                                <option value="admin">Admin</option>
                                                                <option value="staff">Staff</option>
                                                               
                                                            </select>
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
  $("form[name='AddNewUserDetails']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        email: true
      },
      username: "required",
      password: {
        required: true,
        minlength: 5
      },
      password2: {
        required: true,
        minlength: 5,
        equalTo: "#password"
      }
    },
    // Specify validation error messages
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      password2: {
        required: "Please Retype the password",
        minlength: "Your password must be at least 5 characters long",
        equalTo: "Passwords do not match, Plese Check"
      },
      email: "Please enter a valid email address"
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