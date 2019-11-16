
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{asset('back')}}/assets/images/favicon.ico">

    <title>Ubold - Responsive Admin Dashboard Template</title>

    <!--Form Wizard-->
    <link rel="stylesheet" type="text/css" href="{{asset('back')}}/plugins/jquery.steps/css/jquery.steps.css" />

    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    <link href="{{asset('back')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('back')}}/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('back')}}/assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="{{asset('back')}}/assets/js/modernizr.min.js"></script>


</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include('layouts/back/topBar');

    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    @include('layouts/back/leftSideBar');

    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <!-- Page-Title -->

                <!-- Vertical Steps Example -->

                <!-- Wizard with Validation -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>تسجيل بيانات  المنشأة </b></h4>
                            <p class="text-muted m-b-30 font-13">
                               تأكد من صحة المعلومات ومن ثم سلم الطلب  </p>

                            <form id="wizard-validation-form" method="POST" action="{{ url('admin/create-payment')}}">
                                {{ csrf_field() }}

                                <div>
                                    <h3> تسجيل بيانات المنشأة</h3>
                                    <section>
                                        @foreach($RegistrationFields as $RegistrationField)
                                            <div class="form-group clearfix">
                                                <label class="control-label" for="name2"> {{ $RegistrationField->arabic_name }} *</label>
                                                <div class="fields">
                                                    <input id="{{$RegistrationField->id}}"  type="{{$RegistrationField->type}}" class="required form-control" {{$readOnly}}>
                                                </div>
                                            </div>
                                        @endforeach

                                    </section>
                                    <h3>سداد تكاليف التسجيل</h3>
                                    <section>

                                        <label class="control-label" for="name2"> {{ Auth::user()->company->subSector->registration_fees }}  تكاليف الرسوم المطلوبة للسداد</label>
                                        <br><br>
                                        <div class="form-group m-b-20">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <button name="btnPay" type="submit">Pay now</button>
                                                </div>
                                                <div class="col-md-3">
                                                    <button> بطاقة مدى</button>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h3>مراجعة الطلبات والاعتماد</h3>
                                    <section>
                                        <div class="form-group m-b-20">
                                            <p class="text-center"> مرحلة التأكد من  البيانات </p>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio3" value="option1" name="radioInline" checked="">
                                                <label for="inlineRadio3"> إعتماد البيانات</label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio4" value="option2" name="radioInline">
                                                <label for="inlineRadio4">  رفض البيانات </label>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            &copy; 2019. جميع الحقوق محفوضة.
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class="side-bar right-bar nicescroll">
        <h4 class="text-center">Chat</h4>
        <div class="contact-list nicescroll">
            <ul class="list-group contacts-list">
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-1.jpg" alt="">
                        </div>
                        <span class="name">Chadengle</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <span class="name">Tomaslau</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <span class="name">Stillnotdavid</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-4.jpg" alt="">
                        </div>
                        <span class="name">Kurafire</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-5.jpg" alt="">
                        </div>
                        <span class="name">Shahedk</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-6.jpg" alt="">
                        </div>
                        <span class="name">Adhamdannaway</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-7.jpg" alt="">
                        </div>
                        <span class="name">Ok</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-8.jpg" alt="">
                        </div>
                        <span class="name">Arashasghari</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-9.jpg" alt="">
                        </div>
                        <span class="name">Joshaustin</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-10.jpg" alt="">
                        </div>
                        <span class="name">Sortino</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Right-bar -->

</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset('back')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('back')}}/assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
<script src="{{asset('back')}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset('back')}}/assets/js/detect.js"></script>
<script src="{{asset('back')}}/assets/js/fastclick.js"></script>
<script src="{{asset('back')}}/assets/js/jquery.slimscroll.js"></script>
<script src="{{asset('back')}}/assets/js/jquery.blockUI.js"></script>
<script src="{{asset('back')}}/assets/js/waves.js"></script>
<script src="{{asset('back')}}/assets/js/wow.min.js"></script>
<script src="{{asset('back')}}/assets/js/jquery.nicescroll.js"></script>
<script src="{{asset('back')}}/assets/js/jquery.scrollTo.min.js"></script>

<script src="{{asset('back')}}/assets/js/jquery.core.js"></script>
<script src="{{asset('back')}}/assets/js/jquery.app.js"></script>

<!--Form Wizard-->
<script src="{{asset('back')}}/plugins/jquery.steps/js/jquery.steps.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('back')}}/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<!--wizard initialization-->
{{--<script src="{{asset('back')}}/assets/pages/jquery.wizard-init.js" type="text/javascript"></script>--}}

<script type="text/javascript">
    /**
     * Theme: Ubold Admin Template
     * Author: Coderthemes
     * Form wizard page
     */

    !function($) {
        "use strict";

        var FormWizard = function() {};
        var regsitred = "{{ $registred }}";
        var payed = "{{ $payed }}";
        var delivred = "{{ $delivred }}";
        var activeStep = "";
        if(regsitred && payed ) {
            activeStep = 2;
        }else if(regsitred) {
            activeStep = 1;
        }else {
            activeStep = 0;
        }

        FormWizard.prototype.createBasic = function($form_container) {
            $form_container.children("div").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                onFinishing: function (event, currentIndex) {
                    //NOTE: Here you can do form validation and return true or false based on your validation logic
                    console.log("Form has been validated!");
                    return true;
                },
                onFinished: function (event, currentIndex) {
                    //NOTE: Submit the form, if all validation passed.
                    console.log("Form can be submitted using submit method. E.g. $('#basic-form').submit()");
                    $("#basic-form").submit();

                }
            });
            return $form_container;
        },
            //creates form with validation
            FormWizard.prototype.createValidatorForm = function($form_container) {
                $form_container.validate({
                    errorPlacement: function errorPlacement(error, element) {
                        element.after(error);
                    }
                });
                $form_container.children("div").steps({
                    headerTag: "h3",
                    bodyTag: "section",
                    transitionEffect: "slideLeft",
                    startIndex: activeStep,
                    // autoOpen: true,
                    // onOpen: function() {
                    //     moveTo(3);
                    //     //alert("ajiiii");
                    // },
                    onStepChanging: function (event, currentIndex, newIndex) {
                       if(currentIndex == 0) {
                           var data = [];
                           $(".fields > input").each(function() {
                               console.log( $(this).attr("id") );
                               console.log( $(this).val());
                               var myObject = {
                                   field_id : $(this).attr("id"),
                                   field_value : $(this).val(),
                                   type : $(this).attr("type")
                               }
                               data.push(myObject);
                           });
                           console.log(data);

                           event.preventDefault();
                           axios.post('/company/company-registre', data)
                               .then(response => {
                                   console.log(response);
                                   window.location.replace('/company/dashboard');
                                   //$(".success-message").fadeIn();

                               })
                               .catch(error => {
                                   console.log(error.response)
                               });
                       }
                       if(currentIndex == 1) {
                           //alert('save payment');
                       }

                        $form_container.validate().settings.ignore = ":disabled,:hidden";
                        return $form_container.valid();
                    },
                    onFinishing: function (event, currentIndex) {
                        $form_container.validate().settings.ignore = ":disabled";
                        return $form_container.valid();
                    },
                    onFinished: function (event, currentIndex) {
                        alert("Submitted!");
                    }

                });

                return $form_container;
                //console.log($form_container);
                //$("#wizard-validation-form").wizard('moveTo', 4)
            },
            //creates vertical form
            FormWizard.prototype.createVertical = function($form_container) {
                $form_container.steps({
                    headerTag: "h3",
                    bodyTag: "section",
                    transitionEffect: "fade",
                    stepsOrientation: "vertical"
                });
                return $form_container;
            },
            FormWizard.prototype.init = function() {
                //initialzing various forms

                //basic form
                this.createBasic($("#basic-form"));

                //form with validation
                this.createValidatorForm($("#wizard-validation-form"));
                //this('moveTo', 2);

                //vertical form
                this.createVertical($("#wizard-vertical"));
            },
            //init
            $.FormWizard = new FormWizard, $.FormWizard.Constructor = FormWizard

           // $(this).wizard ('moveTo', 4)






    }(window.jQuery),

//initializing
        function($) {
            "use strict";
            $.FormWizard.init();

        }(window.jQuery);


</script>


</body>
</html>
