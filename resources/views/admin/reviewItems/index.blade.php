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
                        <li class="breadcrumb-item active">@lang('fields.managing_evaluation_fields')</li>
                    </ol>

                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <div style="display: none" class="alert alert-success success-message">
                            <strong>Success!</strong> add with success.
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="#custom-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="md md-add"></i>@lang('fields.add_new_field2') </a>
                            </div>
                        </div>
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>@lang('review.arabic_name')</th>
                                <th>@lang('review.english_name')</th>
                                <th>@lang('review.sub_standar')</th>
                                <th>@lang('fields.operation') </th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach ($reviewItems as $reviewItem)
                                <tr>
                                    <?php //echo "<p>$reviewItem->arabic_name</p>"; ?>
                                    <td>{{ $reviewItem->arabic_name }}</td>
                                    <td>{{ $reviewItem->english_name }}</td>
                                    <td> <a href="{{ url('admin/sub-standars/reviewItems/'.$reviewItem->id) }}" class="btn btn-success btn-rounded waves-effect waves-light">
                                            @lang('fields.sub-calibration')
                                        </a></td>
                                    <td>
                                        <button data-id="{{ $reviewItem->id }}" href="{{ url('/admin/review-items/'.$reviewItem->id) }}" class="btn btn-primary btn-rounded waves-effect waves-light editField">@lang('dashboard.edit')</button>
                                        <a href="{{ url('/admin/review-items/'.$reviewItem->id) }}" class="btn btn-danger btn-rounded waves-effect waves-light btnDelete" data-toggle="modal" data-url="" data-id="" data-target="#custom-width-modal">@lang('dashboard.delete')</a>
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
    <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>
    <h4 class="custom-modal-title">@lang('review.add_new_field') </h4>
    <div class="custom-modal-text @lang('sidebar.text_align')" style="@lang('sidebar.direction')">
        <form id="myForm" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="arabic_name">@lang('review.arabic_name')</label>
                <input type="text" class="form-control" name="arabic_name" id="arabic_name">
            </div>

            <div class="form-group">
                <label for="english_name">@lang('review.english_name')</label>
                <input type="text" class="form-control" name="english_name" id="english_name">
            </div>
            <div class="form-group">
                <!-- Multiselect dropdown -->
                <label for="type">@lang('review.type')</label>
                <select multiple data-style="bg-white rounded-pill px-4 border" name="sub_standards_id" id="sub_standards_id"  class="selectpicker w-100">
                    @foreach ($subStandards as $subStandard)
                        <option value="{{ $subStandard->id }}">{{ $subStandard->arabic_name}}</option>
                    @endforeach
                </select><!-- End -->
            </div>
            <button id="addField" type="submit" class="btn btn-default waves-effect waves-light">@lang('dashboard.save')</button>
            <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" onclick="Custombox.close();">@lang('dashboard.cancel')</button>
        </form>
    </div>
</div>

<!-- Modal edit-->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="@lang('sidebar.direction')">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" for="position">@lang('review.edit_field') </h5>
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
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="arabic_name">@lang('review.arabic_name')</label>
                            <input type="text" class="form-control" name="arabic_name_update" id="arabic_name_update">
                            <input type="hidden" value="" id="idField">
                        </div>

                        <div class="form-group">
                            <label for="english_name">@lang('review.english_name')</label>
                            <input type="text" class="form-control" name="english_name_update" id="english_name_update">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer" style="@lang('sidebar.flex_edit_modal_btn')">
                <button id="updateFieldRegistred" class="btn btn-default waves-effect waves-light" data-dismiss="modal" aria-label="Close">@lang('dashboard.save') </button>
                <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" data-dismiss="modal" aria-label="Close">@lang('dashboard.cancel')</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->


<script>
    var resizefunc = [];
</script>
@include('layouts/back/script');


<script type="text/javascript">
    var selectedItem="";
    $(document).ready(function() {


        var $elem = $('#sub_standards_id');
        $elem.on('change', function(){
            selectedItem=$('#sub_standards_id').val()
        });
        var getDatafromForm = () => {
            var bodyFormData = new FormData();
            var arabic_name = $("#arabic_name").val();
            var english_name = $("#english_name").val();
            var sub_standards_id =selectedItem;


            bodyFormData.set('arabic_name', arabic_name);
            bodyFormData.set('english_name', english_name);
            bodyFormData.set('sub_standards_id', sub_standards_id);
            return bodyFormData;
        };

        $("#addField").click(function(e) {
            e.preventDefault();
            var data = getDatafromForm();
            axios.post('review-items/add', data)
                .then(response => {
                    if($.isEmptyObject(response.data.error)){
                        Custombox.close();
                        $(".success-add").fadeIn();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        setTimeout(function(){ location.reload(); }, 2200);
                    }else{
                        printErrorMsg(response.data.error);
                    }
                })
        });


        $(".editField").click(function(e) {
            e.preventDefault();
            var data = getDatafromForm();
            var path = $(this).attr("href");
            var id = $(this).attr("data-id");
            $("#idField").val(id);
            axios.get(path,data)
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
            var arabic_name = "";
            var english_name = "";
            //var data = getDatafromFormUpdate();
            var id = $("#idField").val();
            var path = '/admin/review-items/'+id;

            var data = {
                arabic_name :document.getElementById('arabic_name_update').value, //$("#arabic_name_update" ).val(),
                english_name : document.getElementById('english_name_update').value,//$("#arabic_name_update" ).val(),
                id: id
            };
            axios.put(path, data)
                .then(response => {
                    if($.isEmptyObject(response.data.error)){
                        $(".success-update").fadeIn();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        setTimeout(function(){ location.reload(); }, 2200);
                    }else{
                        printErrorMsg(response);
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
                        $(".error-deleted-message").fadeIn();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        setTimeout(function(){ location.reload(); }, 3000);
                    }
                })
        });


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
