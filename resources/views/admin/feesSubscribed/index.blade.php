
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{asset('back')}}/assets/images/favicon.ico">

    <title>Ubold - Responsive Admin Dashboard Template</title>

    <!-- Plugins css-->
    <link href="{{asset('back')}}/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="{{asset('back')}}/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
    <link href="{{asset('back')}}/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
    <link href="{{asset('back')}}/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('back')}}/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="{{asset('back')}}/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

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
                <div class="row">
                    <div class="col-sm-12">


                        <h4 class="page-title"> تكاليف الإشتراك</h4>
                        <ol class="breadcrumb">

                        </ol>

                    </div>
                </div>




                <!-- Bootstrap-select -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            </b></h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="p-20">
                                        <form>
                                            <div class="form-group">
                                                <label class="control-label">تكاليف الإشتراك لكل المنشآت
                                                </label>
                                                <input id="demo0" type="text" value="1800" name="" data-bts-min="100" data-bts-max="1000000" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            &copy; 2016 - 2018. All rights reserved.
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

<script src="{{asset('back')}}/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script src="{{asset('back')}}/plugins/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="{{asset('back')}}/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="{{asset('back')}}/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
<script src="{{asset('back')}}/plugins/select2/js/select2.min.js" type="text/javascript"></script>
<script src="{{asset('back')}}/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="{{asset('back')}}/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="{{asset('back')}}/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="{{asset('back')}}/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

<script type="text/javascript" src="{{asset('back')}}/plugins/autocomplete/jquery.mockjax.js"></script>
<script type="text/javascript" src="{{asset('back')}}/plugins/autocomplete/jquery.autocomplete.min.js"></script>
<script type="text/javascript" src="{{asset('back')}}/plugins/autocomplete/countries.js"></script>
<script type="text/javascript" src="assets/pages/autocomplete.js"></script>

<script type="text/javascript" src="{{asset('back')}}/assets/pages/jquery.form-advanced.init.js"></script>

<script src="{{asset('back')}}/assets/js/jquery.core.js"></script>
<script src="{{asset('back')}}/assets/js/jquery.app.js"></script>

</body>
</html>
