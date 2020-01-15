
<!DOCTYPE html>
<html>
@include('layouts/back/head');
<style>
    .mainStandard {
        padding-right: 140px !important;
    }
    .sub-standard {
        padding-right: 140px !important;
    }
</style>

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

                <!-- Inline Form -->
                <div class="row">
                    <form action="{{ route('company.ready.model.reply.store') }}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                        @foreach($readyModels as $readyModel)
                        <div id="" class="col-md-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title">حقول نموذج الجاهزية</h4><br>
                                <div style="margin-right: 30%" class="row">
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <span id="{{ $readyModel->id }}" style="color: #0b97c4">{{ $readyModel->arabic_name }}</span>
                                <div class="row m-b-30">
                                    <div class="col-sm-12">
                                        <!-- <form action="{{ route('company.ready.model.reply.store') }}" method="POST" enctype="multipart/form-data">  -->
                                            <!-- @csrf -->
                                            @foreach($readyModel->subStandard as $rModel)
                                            <div id="" class="form-inline">
                                                <div style="" class="form-group mx-sm-3 mainStandard">
                                                    <label for="" class="">{{ $rModel->arabic_name }}</label>
                                                </div>
                                                <div id="rModel-{{ $rModel->id }}" class="form-group mx-sm-3 mainStandard subStandard">
                                                    <textarea id="{{ $readyModel->english_name }}_{{ $rModel->english_name }}_{{ $rModel->id }}" name="{{ $readyModel->english_name }}_{{ $rModel->english_name }}_{{ $rModel->id }}" class="form-control " maxlength="225" rows="2" placeholder=""></textarea>
                                                    <div>
                                                        <label>مرفقات</label>
                                                        <input type="file" id="{{ $readyModel->english_name }}_{{ $rModel->english_name }}_{{ $rModel->id }}_file" name="{{ $readyModel->english_name }}_{{ $rModel->english_name }}_{{ $rModel->id }}_file" class="form-control " placeholder="Upload" />
                                                    </div>
                                                </div>
                                            </div><br>
                                            @endforeach
                                        <!-- </form> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                        <div class="m-t-30 text-center">
                            <button type="submit" id="addReadyModel" class="btn btn-default waves-effect waves-light btn-sm">سلم الطلب</button>
                        </div>
                    </form>
                </div>
                <!-- end row -->

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



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->

<!-- jQuery  -->
@include('layouts/back/script');

<script type="text/javascript">
    $(document).ready(function() {

        $(document).on("click", ".button-delete", function() {
            console.log("inside");
        });
        // $(document).on("click","#addReadyModel", function(e) {
        //     e.preventDefault();
        //     var data = [];
        //     $(".subStandard > textarea").each(function() {
        //         console.log( $(this).attr("id") );
        //         console.log( $(this).val());
        //         var myObject = {
        //             sub_standard_id : $(this).attr("id"),
        //             value : $(this).val(),
        //         }
        //         data.push(myObject);
        //     });
        //     axios.post('/company/ready-model-reply', data)
        //         .then(response => {
        //             console.log(response);
        //             window.location.replace('/home');

        //         })
        //         .catch(error => {
        //             console.log(error.response)
        //         });

        // });

    });

</script>
</body>
</html>
