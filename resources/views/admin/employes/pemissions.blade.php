<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{asset('back')}}/assets/images/favicon.ico">

    <title>Ubold - Responsive Admin Dashboard Template</title>

    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    <link href="{{asset('back')}}/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />

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
                    @if(Session::has('success-deleted'))
                        <div class="col-md-10">
                            <div class="alert alert-danger">
                                <strong>{{ Session::get('success-deleted') }}.</strong>
                            </div>
                        </div>
                    @endif
                    <div class="col-sm-12">
                        <h4 class="page-title">إدارة الصلاحيات </h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">   صلاحيات الموضف   {{ $employe->name }} </li>

                        </ol>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        @foreach ($employePermissions as $employePermission)
                        <div class="card-box">
                            <div class="table-box opport-box">
                                    <div class="table-detail checkbx-detail">
                                    <div class="checkbox checkbox-primary checkbox-single m-r-15">
                                        <input id="checkbox5" type="checkbox" checked>
                                        <label for="checkbox5"></label>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>{{$employePermission->name}} </b></h4>
                                    </div>
                                </div>


                                <div class="table-detail lable-detail">
                                    <span class="label label-success">يملك</span>
                                </div>
                                <div class="table-detail lable-detail">
                                    <a href="{{ url('admin/employe/permission/delete/'.$employe->id.'/'.$employePermission->id)}}" title="احدف له الصلاحية" class="btn btn-danger waves-effect waves-light m-r-5"><i class="fa fa-trash-o"></i></a>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-20 text-dark header-title"> أضف له صلاحيات أخرى </h4>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> تعديل التقارير
                                </label>
                            </div><br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">  رفض التقارير
                                </label>
                            </div><br><br>
                            <button class="btn btn-purple waves-effect waves-light"> <span>تأكيد الصلاحيات </span> <i class="fa fa-send m-l-10"></i> </button>
                            <div id="pie-chart"></div>
                        </div>
                    </div>

                </div>

            </div> <!-- container -->

        </div> <!-- content -->

        @include('layouts/back/footer');


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


<!-- Modal -->
<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Add New</h4>
    <div class="custom-modal-text text-left">
        <form role="form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label for="position">Category</label>
                <input type="text" class="form-control" id="position" placeholder="Enter category">
            </div>

            <div class="form-group">
                <label for="position1">Contact number</label>
                <input type="text" class="form-control" id="position1" placeholder="Enter number">
            </div>


            <button type="submit" class="btn btn-default waves-effect waves-light">Save</button>
            <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">Cancel</button>
        </form>
    </div>
</div>


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

<script src="{{asset('back')}}/plugins/jquery-ui/jquery-ui.min.js"></script>

<script src="{{asset('back')}}/assets/js/jquery.core.js"></script>
<script src="{{asset('back')}}/assets/js/jquery.app.js"></script>

<script>
    $(document).ready(function () {

        $("#upcoming, #inprogress, #completed").sortable({
            connectWith: ".taskList",
            placeholder: 'task-placeholder',
            forcePlaceholderSize: true,
            update: function (event, ui) {

                var todo = $("#todo").sortable("toArray");
                var inprogress = $("#inprogress").sortable("toArray");
                var completed = $("#completed").sortable("toArray");
            }
        }).disableSelection();

    });
</script>

</body>
</html>
