
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
                    <div class="col-md-10">
                        <div style="display: none" class="alert alert-success success-add">
                            <strong>  تم إضافة الصلاحيات بنجاح</strong> {{ Session::get('success-add-permissions') }}.
                        </div>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            @lang('fields.readiness_forms_fields')
                        </li>
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
                            <a href="{{ url('/admin/ready-model-fields/add') }}" class="btn btn-default btn-md waves-effect waves-light m-b-30"><i class="md md-add"></i>
                                @lang('fields.add_main_criterion_and_sub_calibration')
                            </a>
                        </div>
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>@lang('fields.main_criterion')</th>
                                <th>@lang('fields.weighed')</th>
                                <th>@lang('fields.sub_criteria') </th>
                                <th>@lang('fields.operation') </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($mainModelFields as $mainModelField)
                                <tr>
                                    <td>{{ $mainModelField->arabic_name }}</td>
                                    <td>{{ $mainModelField->weight }}</td>
                                    <td><a href="{{ url('admin/get-ready-model-fields-sub-standard/'.$mainModelField->id) }}">المعايير الفرعية التابعة له </a></td>
                                    <td>
                                        <button data-id="{{ $mainModelField->id }}" href="{{ url('/api/admin/registration-fields/'.$mainModelField->id) }}" class="btn btn-primary btn-rounded waves-effect waves-light editField">تعديل</button>
                                        <a href="{{ url('/api/admin/main-sector/'.$mainModelField->id) }}" class="btn btn-danger btn-rounded waves-effect waves-light btnDelete" data-toggle="modal" data-url="" data-id="" data-target="#custom-width-modal">حدف</a>
                                        <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" style="width:55%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h5 class="modal-title" id="custom-width-modalLabel">حدف القطاع الرئيسي </h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6>هل أنت متأكد من عملية الحدف  ?</h6>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button id="" type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">رجوع </button>
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light deleteNow">حدف</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                <input type="text" class="form-control" name="arabic_name" id=arabic_name" placeholder="">
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
            axios.post('/api/admin/main-sector', data)
                .then(response => {
                    console.log(response);
                    Custombox.close();
                    $(".success-add").fadeIn();
                    $("html, body").animate({
                        scrollTop: 0
                    }, "slow");
                    setTimeout(function(){ location.reload(); }, 2200);

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
