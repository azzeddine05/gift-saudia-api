
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
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">@lang('giftTeams.staff_management')</li>
                    </ol>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div style="display: none" class="alert alert-danger success-add-permissions">
                        <h5>@lang('employee.Successfully_added_powers')</h5>
                    </div>
                    @if(Session::has('msg'))
                        <div class="alert alert-danger">
                            <strong>@lang('employee.Attention')</strong> {{ Session::get('msg') }}.
                        </div>
                    @endif
                    <div class="card-box table-responsive">
                        <div class="col-md-10">
                            <div style="display: none" class="alert alert-success success-message">
                                <strong>@lang('employee.Operation_success')</strong>@lang('employee.The_employee_was_added_successfully')
                            </div>
                        </div>
                        <div style="display: none" class="alert alert-success success-deleted-message">
                            <strong>@lang('employee.Operation_success')</strong>@lang('employee.Deletion_successful')
                        </div>
                        <div style="display: none" class="alert alert-success error-deleted-message">
                            <strong>@lang('employee.Operation_error')</strong> @lang('employee.Error_eliminating_deletion')
                        </div>
                        <div class="row">
                        <div class="col-sm-4">
                            <a href="#custom-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="md md-add"></i>@lang('giftTeams.add_new_employee')</a>
                        </div>
                        </div>
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>@lang('giftTeams.name')</th>
                                <th>@lang('giftTeams.email')</th>
                                <th> @lang('giftTeams.adress')</th>
                                <th>@lang('giftTeams.employee_powers') </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($employes as $employe)
                                <tr>
                                    <td>{{ $employe->name }}</td>
                                    <td>{{ $employe->email }}</td>
                                    <td>{{ $employe->adresse }}</td>
                                    <td>
                                        <a href="{{ url('admin/employe/permissions/'.$employe->id) }}" class="btn btn-success btn-rounded waves-effect waves-light">@lang('dashboard.permissions')</a>
                                        <a  href="{{ url('admin/employes/edit/'.$employe->id) }}" data-id="{{ $employe->id }}" data-toggle="modal" data-target="#exampleModalEdit" data-animation="fadein" class="btn btn-primary btn-rounded waves-effect waves-light editEmployee">@lang('dashboard.edit')</a>
                                       <!-- <a href="{{ url('api/admin/main-sector/'.$employe->id) }}" class="btn btn-danger btn-rounded waves-effect waves-light btnDelete" data-toggle="modal" data-url="" data-id="" data-target="#custom-width-modal">@lang('dashboard.delete')</a>
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
                                        </div>-->
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
    <h4 class="custom-modal-title text-center"> @lang('dashboard.add_new_employee') </h4>
    <div class="custom-modal-text @lang('sidebar.text_align')">
        <form id="myForm" role="form">
            <div class="form-group">
                <label for="english_name">@lang('giftTeams.name') </label>
                <input type="text" class="form-control" name="name" id="name" placeholder="">
            </div>
            <div class="form-group">
                <label for="arabic_name">@lang('giftTeams.email')</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="">
            </div>
            <div class="form-group">
                <label for="arabic_name"> @lang('giftTeams.adress')</label>
                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="">
            </div>
            <button id="addEmploye" type="submit" class="btn btn-default waves-effect waves-light">@lang('dashboard.save')</button>
            <button onclick="Custombox.close();" type="button" class="btn btn-danger waves-effect waves-light m-l-10">@lang('dashboard.cancel')</button>
        </form>
    </div>
</div>
<!-- Modal eddit-->
<div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content @lang('sidebar.right_class')">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" for="position">@lang('dashboard.edit_employee')</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="custom-modal-text @lang('sidebar.text_align')">
                    <form id="myForm" role="form">
                        <div class="form-group">
                            <label for="arabic_name">@lang('dashboard.employee_name')</label>
                            <input type="text" class="form-control" name="name1" id="name1" placeholder="">
                            <input type="hidden" value="" id="idEmploye">
                        </div>

                        <div class="form-group">
                            <label for="english_name">@lang('dashboard.employee_adress')</label>
                            <input type="text" class="form-control" name="adress" id="adress" placeholder="">
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button id="editEmployeeAction" type="submit" class="btn btn-default waves-effect waves-light">@lang('dashboard.edit') </button>
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

        var getDatafromForm = () => {
            var bodyFormData = new FormData();
            var name = $("#name").val();
            var email = $("#email").val();
            var adresse = $("#adresse").val();
            bodyFormData.set('name', name);
            bodyFormData.set('email', email);
            bodyFormData.set('adresse', adresse);
            return bodyFormData;
        };

        var getDatafromFormEdit = () => {
            var bodyFormData = new FormData();
            var name = $("#name1").val();
            var adresse = $("#adress").val();
            var id = $("#idEmploye").val();
            alert(name+' '+adresse+' '+id);
            bodyFormData.set('name', name);
            bodyFormData.set('adresse', adresse);
            bodyFormData.set('id', id);
            return bodyFormData;
        };
        $("#addEmploye").click(function(e) {
            e.preventDefault();
            var data = getDatafromForm();
            axios.post('/admin/employes/add', data)
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

        // Delete MainSector
       /* $('.deleteNow').click(function(e) {
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
                        setTimeout(function(){ location.reload(); }, 3500);
                    }else{
                        $(".error-deleted-message").fadeIn();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "slow");
                        setTimeout(function(){ location.reload(); }, 4000);
                    }
                })
        });*/

        $("#addSubSector").click(function(e) {
            e.preventDefault();
            var data = getDatafromForm();
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

        $(".editEmployee").click(function(e) {
            e.preventDefault();
            var path = $(this).attr("href");
            var id = $(this).attr("data-id");
            $("#idEmploye").val(id);
            axios.get(path)
                .then(response => {
                    console.log(response.data);
                    $( "#name1" ).val(response.data.name);
                    $( "#adress" ).val(response.data.adresse);
                })
                .catch(error => {
                    console.log(error.response)
                });
        });


        $("#editEmployeeAction").click(function(e) {
            e.preventDefault();
            var data = {
                'name':document.getElementById('name1').value,
                'adresse':document.getElementById('adress').value,
                'id':document.getElementById('idEmploye').value
            };
            var path = $(".editEmployee").attr('href');

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

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
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
