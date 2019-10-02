
<!DOCTYPE html>
<html>
@include('layouts/back/head');

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
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Main Sector</li>
                    </ol>

                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <div style="display: none" class="alert alert-success success-message">
                            <strong>Success!</strong> add with success.
                        </div>
                        <div class="col-sm-4">
                            <a href="#custom-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="md md-add"></i>@lang('dashboard.add_main_sector') </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#sub-sectors-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="md md-add"></i>idafat 9itaa3 far3ii </a>
                        </div>
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>@lang('dashboard.main_sector_arabic')</th>
                                <th>@lang('dashboard.main_sector_english')</th>
                                <th>@lang('dashboard.secnodary_sectors_associate') </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($mainSectors as $mainSector)
                                <tr>
                                    <td>{{ $mainSector->arabic_name }}</td>
                                    <td>{{ $mainSector->english_name }}</td>
                                    <td><a href="{{ url('admin/sub-sectors') }}">9ita3aaatoh alfar3iya clickable</a></td>
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
    <div class="custom-modal-text text-left">
        <form id="myForm" role="form">
            <div class="form-group">
                <label for="arabic_name">@lang('dashboard.main_sector_arabic')</label>
                <input type="text" class="form-control" name="arabic_name" id="arabic_name" placeholder="">
            </div>

            <div class="form-group">
                <label for="english_name">@lang('dashboard.main_sector_english')</label>
                <input type="text" class="form-control" name="english_name" id="english_name" placeholder="">
            </div>

            <button id="addMainSector" type="submit" class="btn btn-default waves-effect waves-light">@lang('dashboard.save')</button>
            <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">@lang('dashboard.cancel')</button>
        </form>
    </div>
</div>

{{--Modal For Sub Sectors--}}

<!-- Modal -->
<div id="sub-sectors-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Add Contact</h4>
    <div class="custom-modal-text text-left">
        <form id="myForm" role="form">
            <div class="form-group">
                <label for="sub_sector_arabic_name">@lang('dashboard.sub_sector_arabic')</label>
                <input type="text" class="form-control" name="sub_sector_arabic_name" id="sub_sector_arabic_name" placeholder="">
            </div>

            <div class="form-group">
                <label for="sub_sector_english_name">@lang('dashboard.sub_sector_english')</label>
                <input type="text" class="form-control" name="sub_sector_english_name" id="sub_sector_english_name" placeholder="">
            </div>
            <div class="form-group">
                <label for="main_sector_id">@lang('dashboard.main_sector_for_sub_sector')</label>
                <select class="form-control" id="main_sector_id" name="main_sector_id">
                    <option>chooose</option>
                    @foreach ($mainSectors as $mainSector)
                        <option value="{{ $mainSector->id }}">{{ $mainSector->arabic_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="registration_fees">@lang('dashboard.registration_fees')</label>
                <input type="text" class="form-control" name="registration_fees" id="registration_fees" placeholder="">
            </div>
            <div class="form-group">
                <label for="Subscription_fees">@lang('dashboard.subscription_fees')</label>
                <input type="text" class="form-control" name="Subscription_fees" id="Subscription_fees" placeholder="">
            </div>

            <button id="addSubSector" type="submit" class="btn btn-default waves-effect waves-light">@lang('dashboard.save')</button>
            <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">@lang('dashboard.cancel')</button>
        </form>
    </div>
</div>

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
@include('layouts/back/script');

<script type="text/javascript">
    $(document).ready(function() {

        const getDatafromForm = () => {
            var bodyFormData = new FormData();
            var arabic_name = $("#arabic_name").val();
            var english_name = $("#english_name").val();
            bodyFormData.set('arabic_name', arabic_name);
            bodyFormData.set('english_name', english_name);
            return bodyFormData;
        };
        const getDatafromFormSubSector = () => {
            var bodyFormData = new FormData();
            var arabic_name = $("#sub_sector_arabic_name").val();
            var english_name = $("#sub_sector_english_name").val();
            var main_sector_id = $("#main_sector_id").val();
            var registration_fees = $("#registration_fees").val();
            var Subscription_fees = $("#Subscription_fees").val();
            bodyFormData.set('arabic_name', arabic_name);
            bodyFormData.set('english_name', english_name);
            bodyFormData.set('main_sector_id', main_sector_id);
            bodyFormData.set('registration_fees', registration_fees);
            bodyFormData.set('Subscription_fees', Subscription_fees);
            return bodyFormData;
        };

        $("#addMainSector").click(function(e) {
            e.preventDefault();
            var data = getDatafromForm();
            axios.post('http://localhost:8000/api/admin/main-sector', data)
                .then(response => {
                    console.log(response);
                    Custombox.close();
                    $(".success-message").fadeIn();

                })
                .catch(error => {
                    console.log(error.response)
                });

        });

        $("#addSubSector").click(function(e) {
            e.preventDefault();
            var data = getDatafromFormSubSector();
            axios.post('http://localhost:8000/api/admin/sub-sector', data)
                .then(response => {
                    console.log(response);
                    Custombox.close();
                    $(".success-message").fadeIn();

                })
                .catch(error => {
                    console.log(error.response)
                });

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
