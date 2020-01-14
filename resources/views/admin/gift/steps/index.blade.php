
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
                        <div style="display: none" class="alert alert-success error-deleted-message">
                            <strong>خطأ في  العملية !</strong> خطأ أتناء عملية الحدف
                        </div>
                        <div style="display: none" class="alert alert-success error-update-message">
                            <strong>خطأ في  العملية !</strong> خطأ أتناء عملية التعديل
                        </div>
                        <div style="display: none" class="alert alert-success error-add-message">
                            <strong>خطأ في  العملية !</strong> خطأ أتناء عملية الإضافة
                        </div>
                        <div style="display: none" class="alert alert-success success-deleted-message">
                            <strong>نجاح العملية !</strong> تمت عملية الحدف بنجاح
                        </div>
                        <div style="display: none" class="alert alert-success success-add">
                            <strong>  تم إضافة الحقل  بنجاح</strong>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div style="display: none" class="alert alert-success success-update">
                            <strong>  تم  التعديل  بنجاح</strong>
                        </div>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">إدارة حقول التقييم</li>
                    </ol>

                </div>
            </div>


            <div class="row">
                    <div class="col-12">
                        <div style="display: none" class="alert alert-success success-message">
                            <strong>نجاح العملية !</strong> تمت إضافة مرحلة جديدة بنجاح
                        </div>
                        <div class="card-box table-responsive">
                            <div class="col-sm-4 @lang('sidebar.text_align')">
                                <a href="#custom-modal" data-toggle="modal" data-target="#exampleModal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein"><i class="md md-add"></i>@lang('dashboard.add_step') </a>
                            </div>

                            <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>@lang('dashboard.step_name_arabic')</th>
                                    <th>@lang('dashboard.step_name_english')</th>
                                    <th>@lang('dashboard.step_start')</th>
                                    <th>@lang('dashboard.step_end')</th>
                                    <th>@lang('dashboard.action')</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($giftSteps as $giftStep)
                                    <tr>
                                    <td>{{ $giftStep->arabic_name }}</td>
                                    <td>{{ $giftStep->english_name }}</td>
                                    <td>{{ $giftStep->start_date }}</td>
                                    <td>{{ $giftStep->end_date }}</td>
                                        <td>
                                            <a  href="{{ url('api/admin/gift-steps/'.$giftStep->id) }}" data-id="{{ $giftStep->id }}" data-toggle="modal" data-target="#exampleModalEdit" data-animation="fadein" class="btn btn-primary btn-rounded waves-effect waves-light editStep">@lang('dashboard.edit')</a>
                                            <a href="{{ url('api/admin/gift-steps/'.$giftStep->id) }}" class="btn btn-danger btn-rounded waves-effect waves-light btnDelete" data-toggle="modal" data-url="{{ url('api/admin/gift-steps/'.$giftStep->id) }}" data-id="{{ $giftStep->id }}" data-target="#custom-width-modal">@lang('dashboard.delete')</a>
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
        @include('layouts/back/footer');

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Modal Add-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="@lang('sidebar.direction')">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" for="position"> @lang('dashboard.add_new_phase') </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="custom-modal-text @lang('sidebar.text_align')">
                    <form id="myForm" role="form">
                        <div class="form-group">
                            <label for="sel1">@lang('fields.name_step') </label>
                            <select class="form-control" name="arabic_name" id="arabic_name" required>
                                <option value="0" disabled selected>@lang('fields.chose_stage')</option>
                                <option value="registredPeriod">@lang('fields.register_step') </option>
                                <option value="reviewsPeriod">@lang('fields.review_step') </option>
                                <option value="resultPeriod">@lang('fields.step_result')  </option>
                            </select>
                        </div><br>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="position">@lang('fields.brgin_stage_step') </label>
                                    <input value="" name="start_date" id="start_date" class="form-control" width="276" required/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="position">@lang('fields.phase_start')    </label>
                                    <input name="start_time" id="start_time" class="form-control" width="276" required/>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="position"> @lang('fields.end_stage_step')   </label>
                                    <input name="end_date" id="end_date" class="form-control" width="276" required/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="position">  @lang('fields.phase_end')   </label>
                                    <input name="end_time" id="end_time" class="form-control" width="276" required/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer" style="@lang('sidebar.flex_edit_modal_btn')">
                <button id="addStep" type="submit" class="btn btn-default waves-effect waves-light">@lang('dashboard.save')</button>
                <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">@lang('dashboard.cancel')</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal eddit-->
<div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content @lang('sidebar.right_class')">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" for="position">@lang('dashboard.add_new_phase')</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="custom-modal-text text-left">
                    <form id="myForm" role="form">
                        <div class="form-group">
                            <label for="sel1"> @lang('fields.name_step') </label>
                            <select class="form-control" name="arabic_name" id="stepType" required>
                                <option value="0" disabled selected>@lang('fields.chose_stage')  </option>
                                <option value="registredPeriod"> @lang('fields.register_step')</option>
                                <option value="reviewsPeriod">@lang('fields.review_step') </option>
                                <option value="resultPeriod">  @lang('fields.step_result')</option>
                            </select>
                        </div><br>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="position">@lang('fields.brgin_stage_step')</label>
                                    <input value="" name="start_date" id="start_date_update" class="form-control" width="276" required/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="position">@lang('fields.phase_start')  </label>
                                    <input name="start_time" id="start_time_update" class="form-control" width="276" required/>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="position">  @lang('fields.end_stage_step')   </label>
                                    <input name="end_date" id="end_date_update" class="form-control" width="276" required/>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="position">   @lang('fields.phase_end') </label>
                                    <input name="end_time" id="end_time_update" class="form-control" width="276" required/>
                                 </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button id="editStepAction" type="submit" class="btn btn-default waves-effect waves-light">@lang('dashboard.edit') </button>
                <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">@lang('dashboard.cancel')</button>
            </div>
        </div>
    </div>
</div>

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
@include('layouts/back/script');


<script type="text/javascript">
    $(document).ready(function() {

        $('#start_time, #end_time').timepicker({
            template: 'dropdown',
            snapToStep: true,
            minuteStep: 5,
            showMeridian: true,
            modalBackdrop: true,
            icons:
                {
                    up: 'dripicons-chevron-up',
                    down: 'dripicons-chevron-down'
                }
        });

        $( "#start_date" ).datepicker();
        $( "#end_date" ).datepicker();
        $( "#start_time" ).timepicker();
        $( "#end_time" ).timepicker();

        var getDatafromForm = () => {
            var startDate = $( "#start_date" ).val();
            var startTime = $( "#start_time" ).val();
            var endDate = $( "#end_date" ).val();
            var endTime = $( "#end_time" ).val();
            var arabic_name = $("#arabic_name").val();
            var start_date = moment(startDate+' '+startTime).format("YYYY-MM-DD HH:mm:ss");
            var end_date = moment(endDate+' '+endTime).format("YYYY-MM-DD HH:mm:ss");

            return {'arabic_name':arabic_name,'english_name':arabic_name,'period_type':arabic_name,'start_date':start_date,'end_date':end_date};
        };

        $("#addStep").click(function(e) {
            e.preventDefault();
            var data = getDatafromForm();
            console.log(data);
            axios.post('/api/admin/gift-steps', data)
            .then(response => {
                $("#exampleModal").modal('hide');
                if($.isEmptyObject(response.data.error)) {
                    $(".success-message").fadeIn();
                    $("html, body").animate({
                        scrollTop: 0
                    }, "slow");
                    setTimeout(function () {
                        location.reload();
                    }, 2500);
                }else{
                    $(".error-add-message").fadeIn();
                    $("html, body").animate({
                        scrollTop: 0
                    }, "slow");
                }
            })
            .catch(error => {
                console.log(error.response)
            });

        });

        $(".editStep").click(function(e) {
            e.preventDefault();
            var path = $(this).attr("href");
            axios.get(path)
                .then(response => {
                    console.log(response.data);
                    $( "#start_date_update" ).val(response.data.start_date);
                    $( "#start_time_update" ).val(response.data.start_date);
                    $( "#end_date_update" ).val(response.data.end_date);
                    $( "#end_time_update" ).val(response.data.end_date);
                    $("#stepType").val(response.data.arabic_name);
                })
                .catch(error => {
                    console.log(error.response)
                });
        });

        var getDatafromFormUpdate = () => {
            var startDate = $( "#start_date_update" ).val();
            var startTime = $( "#start_time_update" ).val();
            var endDate = $( "#end_date_update" ).val();
            var endTime = $( "#end_time_update" ).val();

            var arabic_name = $("#stepType").val();
            var start_date = moment(startDate+' '+startTime).format("YYYY-MM-DD HH:mm:ss");
            var end_date = moment(endDate+' '+endTime).format("YYYY-MM-DD HH:mm:ss");

            return {'arabic_name':arabic_name,'english_name':arabic_name,'period_type':arabic_name,'start_date':start_date,'end_date':end_date};
        };

        $("#editStepAction").click(function(e) {
            e.preventDefault();
            var data = getDatafromFormUpdate();
            var path = $(".editStep").attr('href');
            axios.put(path, data)
                .then(response => {
                    $("#exampleModalEdit").modal('hide');
                    if($.isEmptyObject(response.data.error)) {
                        $(".success-message").fadeIn();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                      setTimeout(function(){ location.reload(); }, 3500);
                    }else{
                        $(".error-update-message").fadeIn();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                    }
                })
                .catch(error => {
                    console.log(error.response)
                });
        });

        $('.deleteNow').click(function(e) {
            e.preventDefault();
            var path = $('.btnDelete').attr("href");
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
                        setTimeout(function(){ location.reload(); }, 2500);
                    }else{
                        $("#custom-width-modal").modal('hide');
                        $(".error-deleted-message").fadeIn();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                    }
                })
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
