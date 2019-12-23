
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
                            حقل نمودج الجاهزية (معيار فرعي )
                        </li>
                    </ol>

                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">

                        <div class="col-sm-4">

                        </div>
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>المعيار  الفرعي</th>
                                <th>المعيار  الفرعي بالانجليزية</th>
                                <th>وزنه</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($subStandards as $item)
                                <tr>
                                    <td>{{ $item->arabic_name }}</td>
                                    <td>{{ $item->english_name }}</td>
                                    <td>{{ $item->weight }}</td>
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

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
@include('layouts/back/script');

<script type="text/javascript">
    $(document).ready(function() {

        // Default Datatable
        $('#datatable').DataTable();

    } );
</script>

</body>
</html>
