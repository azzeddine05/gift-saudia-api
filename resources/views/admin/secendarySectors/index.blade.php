
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{asset('back')}}/assets/images/favicon.ico">

    <title>Ubold - Responsive Admin Dashboard Template</title>

    <!-- DataTables -->
    <link href="{{asset('back')}}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('back')}}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{asset('back')}}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Multi Item Selection examples -->
    <link href="{{asset('back')}}/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
    <div class="content-page  @lang('sidebar.right_class')">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">القطاعات الفرعية التابعة للقطاع  {{ $mainSector->arabic_name }}</li>
                    </ol>

                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <div style="display: none" class="alert alert-success success-message">
                            <strong>Success!</strong> add with success.
                        </div>

                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>@lang('dashboard.sub_sector_arabic')</th>
                                <th>@lang('dashboard.sub_sector_english')</th>
                                <th>تكاليف التسجيل </th>
                                <th>تكاليف الإشتراك </th>
                                <th>العملية </th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($subSectors as $subSector)
                                <tr>
                                    <td>{{ $subSector->arabic_name }}</td>
                                    <td>{{ $subSector->english_name }}</td>
                                    <td>{{ $subSector->registration_fees }}</td>
                                    <td>{{ $subSector->Subscription_fees }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">تعديل</button>
                                        <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">حدف</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end row -->




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
<!-- Modal -->
<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Add Contact</h4>
    <div class="custom-modal-text @lang('sidebar.text_align')">
        <form id="myForm" role="form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="arabic_name" id="arabic_name" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" name="english_name" id="english_name" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="position">Contact number</label>
                <input type="text" class="form-control" name="start_date" id="start_date" placeholder="Enter number">
            </div>
            <div class="form-group">
                <label for="position">Contact number</label>
                <input type="text" class="form-control" name="end_date" id="end_date" placeholder="Enter number">
            </div>

            <button id="addStep" type="submit" class="btn btn-default waves-effect waves-light">Save</button>
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

<!-- Required datatable js -->
<script src="{{asset('back')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="{{asset('back')}}/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables/jszip.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables/pdfmake.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables/vfs_fonts.js"></script>
<script src="{{asset('back')}}/plugins/datatables/buttons.html5.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables/buttons.print.min.js"></script>

<!-- Key Tables -->
<script src="{{asset('back')}}/plugins/datatables/dataTables.keyTable.min.js"></script>

<!-- Responsive examples -->
<script src="{{asset('back')}}/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Selection table -->
<script src="{{asset('back')}}/plugins/datatables/dataTables.select.min.js"></script>

<!-- App js -->
{{--<script src="{{asset('back')}}/assets/js/jquery.core.js"></script>--}}
<script src="{{asset('back')}}/assets/js/jquery.app.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {

        $("#addStep").click(function() {
            // var resultElement = document.getElementById('getResult1');
            // resultElement.innerHTML = '';
            alert("ddssf");
            axios.post('http://localhost:8000/api/gift-steps/create')
                .then((response) => {
                    console.log(response.data);
                    console.log(response.status);
                    console.log(response.statusText);
                    console.log(response.headers);
                    console.log(response.config);
                });

            // axios.get('Api/gift-steps/create')
            //     .then(function (response) {
            //         //resultElement.innerHTML = generateSuccessHTMLOutput(response);
            //         console.log(response);
            //     })
            //
            //     .catch(function (error) {
            //         console.log(error);
            //         //resultElement.innerHTML = generateErrorHTMLOutput(error);
            //     });
        });


        // Default Datatable
        $('#datatable').DataTable();

        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf']
        });

        // Key Tables

        $('#key-table').DataTable({
            keys: true
        });

        // Responsive Datatable
        $('#responsive-datatable').DataTable();

        // Multi Selection Datatable
        $('#selection-datatable').DataTable({
            select: {
                style: 'multi'
            }
        });

        table.buttons().container()
            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    } );
</script>

</body>
</html>
