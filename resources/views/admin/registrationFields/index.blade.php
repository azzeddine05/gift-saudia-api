
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
                        <li class="breadcrumb-item active"> ho9ol tasjiil</li>
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
                            <a href="#custom-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="md md-add"></i>@lang('fields.add_new_field') </a>
                        </div>

                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>@lang('fields.arabic_name')</th>
                                <th>@lang('fields.english_name')</th>
                                <th>@lang('fields.type')</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($registrationFields as $registrationField)
                                <tr>
                                    <td>{{ $registrationField->arabic_name }}</td>
                                    <td>{{ $registrationField->english_name }}</td>
                                    <td>{{ $registrationField->type }}</td>
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
    <h4 class="custom-modal-title">@lang('fields.add_new_field')</h4>
    <div class="custom-modal-text text-left">
        <form id="myForm" role="form">
            <div class="form-group">
                <label for="arabic_name">@lang('fields.arabic_name')</label>
                <input type="text" class="form-control" name="arabic_name" id="arabic_name">
            </div>

            <div class="form-group">
                <label for="english_name">@lang('fields.english_name')</label>
                <input type="text" class="form-control" name="english_name" id="english_name">
            </div>
            <div class="form-group">
                <label for="type">@lang('fields.type')</label>
                <select class="form-control" id="type" name="type">
                    <option>@lang('fields.type')</option>
                    <option value="text" >@lang('fields.text')</option>
                    <option value="number">@lang('fields.number')</option>
                    <option value="email">@lang('fields.email')</option>

                </select>
            </div>
            <button id="addField" type="submit" class="btn btn-default waves-effect waves-light">Save</button>
            <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">Cancel</button>
        </form>
    </div>
</div>



<script>
    var resizefunc = [];
</script>
@include('layouts/back/script');


<script type="text/javascript">
    $(document).ready(function() {

        const getDatafromForm = () => {
            var bodyFormData = new FormData();
            var arabic_name = $("#arabic_name").val();
            var english_name = $("#english_name").val();
            var type = $("#type").val();

            bodyFormData.set('arabic_name', arabic_name);
            bodyFormData.set('english_name', english_name);
            bodyFormData.set('type', type);
            return bodyFormData;
        };

        $("#addField").click(function(e) {
            e.preventDefault();
            var data = getDatafromForm();
            axios.post('http://localhost:8000/api/admin/registration-fields', data)
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
