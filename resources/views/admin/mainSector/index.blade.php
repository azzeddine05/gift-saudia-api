
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
    <div class="content-page  @lang('sidebar.right_class')">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-md-10">
                        <div style="display: none" class="alert alert-success success-update">
                            <strong>  تم  التعديل  بنجاح</strong>
                        </div>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">@lang('dashboard.main_secondary_sector')</li>
                    </ol>

                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    @if(Session::has('msg'))
                        <div class="alert alert-danger">
                            <strong>إنتباه  !</strong> {{ Session::get('msg') }}.
                        </div>
                    @endif
                    <div class="card-box table-responsive">

                        <div class="col-md-10">
                            <div style="display: none" class="alert alert-success success-message">
                                <strong>نجاح العملية !</strong> تم إضافة القطاع بنجاح
                            </div>
                        </div>
                        <div style="display: none" class="alert alert-success success-deleted-message">
                            <strong>نجاح العملية !</strong> تمت عملية الحدف بنجاح
                        </div>
                        <div style="display: none" class="alert alert-success error-deleted-message">
                            <strong>خطأ في  العملية !</strong> خطأ أتناء عملية الحدف
                        </div>
                        <div class="row">
                        <div class="col-sm-4">
                            <a href="#custom-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="md md-add"></i>@lang('dashboard.add_main_sector') </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#sub-sectors-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="md md-add"></i>@lang('dashboard.add_sub_sector')  </a>
                        </div>
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
                                    <td>
                                        <a href="{{ url('admin/sub-sectors/main-sector/'.$mainSector->id) }}" class="btn btn-success btn-rounded waves-effect waves-light">
                                         @lang('dashboard.sub_sector')
                                        </a>
                                        <button data-id="{{ $mainSector->id }}" href="{{ url('api/admin/main-sector/'.$mainSector->id) }}" type="button" class="btn btn-primary btn-rounded waves-effect waves-light editField">@lang('dashboard.edit')</button>
                                        <a href="{{ url('api/admin/main-sector/'.$mainSector->id) }}" class="btn btn-danger btn-rounded waves-effect waves-light btnDelete" data-toggle="modal" data-url="" data-id="" data-target="#custom-width-modal">@lang('dashboard.delete')</a>
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
                                                        <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">رجوع </button>
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


<!-- END wrapper -->
<!-- Modal -->
<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>
    <h4 class="custom-modal-title text-center">إضافة قطاع رئيسي </h4>
    <div class="custom-modal-text  @lang('sidebar.text_align')">
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



<!-- Modal eddit-->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" for="position">   تعديل قطاع رئيسي  </h5>
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="custom-modal-text @lang('sidebar.text_align')">
                    <form id="myForm" role="form">
                        <div class="form-group">
                            <label for="arabic_name">@lang('dashboard.sub_sector_arabic')</label>
                            <input type="text" class="form-control" name="arabic_name_update" id="arabic_name_update">
                            <input type="hidden" value="" id="idField">
                        </div>

                        <div class="form-group">
                            <label for="english_name">@lang('dashboard.sub_sector_english')</label>
                            <input type="text" class="form-control" name="english_name_update" id="english_name_update">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button id="updateFieldRegistred" class="btn btn-default waves-effect waves-light" data-dismiss="modal" aria-label="Close">@lang('dashboard.save') </button>
                <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" data-dismiss="modal" aria-label="Close">@lang('dashboard.cancel')</button>
            </div>
        </div>
    </div>
</div>

{{--Modal For Sub Sectors--}}


<div id="sub-sectors-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>
    <h4 class="custom-modal-title text-center">إضافة قطاع فرعي</h4>
    <div class="custom-modal-text  @lang('sidebar.text_align')">
        <form id="myForm" role="form">
            <div class="form-group">
                <label for="sub_sector_arabic_name">@lang('dashboard.sub_sector_arabic')</label>
                <input type="text" class="form-control" name="sub_sector_arabic_name" id="sub_sector_arabic_name" placeholder="">
            </div>

            <div class="form-group">
                <label for="sub_sector_english_name">@lang('dashboard.sub_sector_english')</label>
                <input type="text" class="form-control" name="sub_sector_english_name" id="sub_sector_english_name" placeholder="">
            </div>
            <div class="form-group" style=" @lang('sidebar.direction')">
                <label for="main_sector_id">@lang('dashboard.main_sector_for_sub_sector')</label>
                <select class="form-control" id="main_sector_id" name="main_sector_id">
                    <option value="0" disabled selected> --@lang('dashboard.choose') --</option>
                    @foreach ($mainSectors as $mainSector)
                        <option value="{{ $mainSector->id }}">{{ $mainSector->arabic_name }}</option>
                    @endforeach
                </select>
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
            bodyFormData.set('arabic_name', arabic_name);
            bodyFormData.set('english_name', english_name);
            bodyFormData.set('main_sector_id', main_sector_id);
            return bodyFormData;
        };

        $("#addMainSector").click(function(e) {
            e.preventDefault();
            var data = getDatafromForm();
            axios.post('/api/admin/main-sector', data)
                .then(response => {
                    console.log(response);
                    if($.isEmptyObject(response.data.error)){
                        Custombox.close();
                        $(".success-message").fadeIn();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        setTimeout(function(){ location.reload(); }, 3500);
                    }else{
                        //console.log(response.data.errors);
                        printErrorMsg(response.data.error);
                    }
                })

        });


        $(".editField").click(function(e) {
            e.preventDefault();
            var path = $(this).attr("href");
            var id = $(this).attr("data-id");
            $("#idField").val(id);
            axios.get(path)
                .then(response => {
                    console.log(response.data);
                    $( "#arabic_name_update" ).val(response.data.arabic_name);
                    $( "#english_name_update" ).val(response.data.english_name);
                    $( "#modalEdit" ).modal('show');
                })
                .catch(error => {
                    console.log(error.response)
                });
        });

        $("#updateFieldRegistred").click(function(e) {
            e.preventDefault();
            var id = $("#idField").val();
            var path = "/api/admin/main-sector/"+id;
            var data = {
                arabic_name : $("#arabic_name_update" ).val(),
                english_name : $("#english_name_update" ).val(),
                id: id
            };
            console.log(data);
            axios.put(path, data)
                .then(response => {

                    if($.isEmptyObject(response.data.error)){
                        $(".success-update").fadeIn();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        setTimeout(function(){ location.reload(); }, 2200);
                    }else{
                        printErrorMsg(response.data.error);
                    }
                })

        });

        var path="";
        $('.btnDelete').click(function(e) {
            e.preventDefault();
            path=e.target.getAttribute('href');
        });
        // Delete MainSector
        $('.deleteNow').click(function(e) {
            e.preventDefault();
            axios.delete(path)
                .then(response => {
                    console.log(response);
                    if($.isEmptyObject(response.data.error)){
                        //Custombox.close();
                        $("#custom-width-modal").modal('hide');
                        $(".success-deleted-message").fadeIn();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        setTimeout(function(){ location.reload(); }, 3500);
                    }else{
                        $(".error-deleted-message").fadeIn();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        setTimeout(function(){ location.reload(); }, 4000);
                    }
                })
        });

        $("#addSubSector").click(function(e) {
            e.preventDefault();
            var data = getDatafromFormSubSector();
            axios.post('/api/admin/sub-sector', data)
                .then(response => {
                    console.log(response);
                    if($.isEmptyObject(response.data.error)){
                        Custombox.close();
                        $(".success-message").fadeIn();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        setTimeout(function(){ location.reload(); }, 3000);
                    } else {
                        printErrorMsg(response.data.error);
                    }

                })
        });


        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
        // Default Datatable
        $('#datatable').DataTable({
            "order": []
        });

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
