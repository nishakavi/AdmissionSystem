@extends('layout.default')
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
                                <h4 class="widget-title lighter">Add New Applicant Details</h4>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div id="fuelux-wizard-container">
                                        <div>
                                            <ul class="steps">
                                                <li data-step="1" class="active">
                                                    <span class="step">1</span>
                                                    <span class="title">Gardian Detaills</span>
                                                </li>

                                                <li data-step="2">
                                                    <span class="step">2</span>
                                                    <span class="title">Residence Details</span>
                                                </li>
                                                   <li data-step="3">
                                                    <span class="step">3</span>
                                                    <span class="title">Contact Details</span>
                                                </li>


                                                <li data-step="4">
                                                    <span class="step">4</span>
                                                    <span class="title">Finish</span>
                                                </li>

                                             

                                           
                                            </ul>
                                        </div>

                                        <hr />

                                        <form class="form-horizontal" action="addnewgovschool" role="form" id="addnewgovschool" method="post">
                                        <div class="step-content pos-rel">
                                            <div class="step-pane active" data-step="1">
                                                <h3 class="lighter block green">Person Details</h3>
                                                <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="firstname">Refrence Id :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" name="firstname" id="firstname" class="col-xs-12 col-sm-6" />
                                                            </div>
                                                        </div>
                                                    </div>

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
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="secondname">Second Name :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" name="secondname" id="secondname" class="col-xs-12 col-sm-6" />
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="occupation">Occupation :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" name="occupation" id="occupation" class="col-xs-12 col-sm-4" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="dob">Date of Birth :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="date" name="dob" id="dob" class="col-xs-12 col-sm-2" />
                                                            </div>
                                                        </div>
                                                    </div>





                                                <!--     <div class="hr hr-dotted"></div> -->
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="gender">Gender :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" id="gender" name="gender" class="col-xs-12 col-sm-2" />
                                                            </div>
                                                        </div>
                                                    </div>


                                             <!--        <div class="hr hr-dotted"></div> -->

                                            <!-- </div> -->

                                             <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="relationship">Relationship :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" name="relationship" id="relationship" class="col-xs-12 col-sm-4" />
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>




                                            <div class="step-pane" data-step="2">
                                                 <h3 class="lighter block green">Residence Details</h3>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="addressline1">Address Line1 :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" name="addressline1" id="addressline1" class="col-xs-12 col-sm-4" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="addressline2">Address Line2 :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" name="addressline2" id="addressline2" class="col-xs-12 col-sm-4" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="city">City :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" name="city" id="city" class="col-xs-12 col-sm-4" />
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="province">Provice : </label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <select id="province" name="province" class="select2" data-placeholder="Click to Choose...">
                                                                <option value="">&nbsp;</option>
                                                                <option value="Northern">Northern</option>
                                                                <option value="Southern">Southern</option>
                                                                <option value="Eastern">Eastern</option>
                                                                <option value="Western">Western</option>
                                                                <option value="centre">Centre</option>
                                                                <option value="Sabaragamuwa">Sabaragamuwa</option>
                                                                <option value="Uva">Uva</option>
                                                                <option value="North Central">North Central</option>
                                                                <option value="North Western">North Western </option>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="postalcode">Postal Code:</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" name="postalcode" id="postalcode" class="col-xs-12 col-sm-4" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="addresstype">Address Type :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" name="addresstype" id="addresstype" class="col-xs-12 col-sm-4" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                  <!--   <div class="hr hr-dotted"></div> -->

                                            </div>



                                            <div class="step-pane" data-step="3">
                                                 <h3 class="lighter block green">Residence Details</h3>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="contactnumber">Contact No :</label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <div class="clearfix">
                                                                <input type="text" name="contactnumber" id="contactnumber" class="col-xs-12 col-sm-6" />
                                                            </div>
                                                        </div>
                                                    </div>


                                            
                                




                                                    <div class="space-2"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phonetype">Phone Type : </label>
                                                        <div class="col-xs-12 col-sm-9">
                                                            <select id="phonetype" name="phonetypeh" class="select2" data-placeholder="Click to Choose...">
                                                                <option value="">&nbsp;</option>
                                                                <option value="mobileline">Mobile Line</option>
                                                                <option value="landline">Land line</option>
                                               
                                                               
                                                            </select>
                                                        </div>
                                                    </div>



                                                  <!--   <div class="hr hr-dotted"></div> -->

                                            </div>






                                            <div class="step-pane" data-step="4">
                                                <div class="center">
                                                    <h3 class="green">Congrats!</h3>
                                                    Press the Finish Button to save your data
                                                </div>
                                            </div>
                                        </div>

                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" >

                                            {{csrf_field()}}

                                        </form>
                                    </div>

                                    <hr />
                                    <div class="wizard-actions">
                                        <button class="btn btn-prev">
                                            <i class="ace-icon fa fa-arrow-left"></i>
                                            Prev
                                        </button>

                                        <button class="btn btn-success btn-next" name="finish_btn" id="finish_btn" data-last="Finish">
                                            Next
                                            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                        </button>
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
    jQuery(function($) {

        $('[data-rel=tooltip]').tooltip();

        $('.select2').css('width','200px').select2({allowClear:true})
                .on('change', function(){
                    $(this).closest('form').validate().element($(this));
                });


        var $validation = true;
        $('#fuelux-wizard-container')
                .ace_wizard({
                    //step: 2 //optional argument. wizard will jump to step "2" at first
                    //buttons: '.wizard-actions:eq(0)'
                })
                .on('actionclicked.fu.wizard' , function(e, info){

                    if(info.step == 3) {
                    }
                })
                //.on('changed.fu.wizard', function() {
                //})
                .on('finished.fu.wizard', function(e) {
                    $("#addnewgovschool").submit();
                }).on('stepclick.fu.wizard', function(e){
            //e.preventDefault();//this will prevent clicking and selecting steps
        });


        //jump to a step
        /**
         var wizard = $('#fuelux-wizard-container').data('fu.wizard')
         wizard.currentStep = 3;
         wizard.setState();
         */


        $('#validation-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            ignore: "",
            rules: {
                firstname: {
                    required: true
                },
                secondname: {
                    required: true,
                    maxlength: 255
                },
                // city: {
                //     required: true,
                //     maxlength:99
                // },
                userlevel: {
                     required: true
                 },
                username: {
                    required: true
                },
                password: {
                    required: true,
                },
                password2: {
                    required: true,
                },
                contactno:{
                    required:true,
                }
            },

            messages: {
                email: {
                    required: "Please provide a valid email.",
                    email: "Please provide a valid email."
                },
                password: {
                    required: "Please specify a password.",
                    minlength: "Please specify a secure password."
                },
                // state: "Please choose state",
                // subscription: "Please choose at least one option",
                // gender: "Please choose gender",
                // agree: "Please accept our policy"
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

  
            submitHandler: function (form) {
            },
            invalidHandler: function (form) {
            }
        });




        $('#modal-wizard-container').ace_wizard();
        $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');


        /**
         $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
					$(this).closest('form').validate().element($(this));
				});

         $('#mychosen').chosen().on('change', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
         */


        $(document).one('ajaxloadstart.page', function(e) {
            //in ajax mode, remove remaining elements before leaving page
            $('[class*=select2]').remove();
        });
    })
</script>


@stop