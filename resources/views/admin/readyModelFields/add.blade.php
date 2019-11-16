
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
                    <div id="akbarDiv" class="col-md-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">حقول نموذج الجاهزية</h4><br>
                            <div style="margin-right: 30%" class="row">
                                <div class="col-md-6">
                                    <form id="mainStandard" class="form-inline">
                                        <div class="form-group mx-sm-3">
                                            @if(empty($totalMarks))
                                            <label style="margin-left: 10px" for="inputPassword2" class="">حدد الدرجة الكلية لجميع المعايير </label>
                                                <input id="newTotalMark" value="" type="text" class="form-control">
                                                <button id="addTotalMarks" type="" class="btn btn-success">تأكيد الدرجة الكلية  </button>
                                            @else
                                            <label style="margin-left: 10px" for="inputPassword2" class=""> الدرجة الكلية لجميع المعايير </label>
                                            <input id="totalMark" value="{{$totalMarks->total}}" type="text" class="form-control" readonly>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <button id="1" type="" class="btn btn-primary addMainStandard">أضف معيار رئيسي </button>
                            <div class="row m-b-30">
                                <div class="col-sm-12">

                                    <form id="formMainStandard" class="form-inline">

                                    </form>
                                </div>

                            </div>

                            <div id="DivSubStandard-1" class="row">

                                <div class="col-sm-12">
                                    <span style="display: none" id="labelSubStandard" class="">أضف المعايير الفرعية </span><br><br>
                                    <form id="formSubStandard" class="form-inline">

                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
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

<script src="{{asset('back')}}/assets/js/jquery.core.js"></script>
<script src="{{asset('back')}}/assets/js/jquery.app.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#addTotalMarks").click(function(e) {
            e.preventDefault();
            var total = "";
            total = $("#newTotalMark").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type:"POST",
                url:"/admin/total-marks/add",
                data :  {
                    "total": total,
                    "_token": "{{ csrf_token() }}",
                },
                datatype:"html",
                success:function(response) {
                    alert(response);
                    if(response){
                        location.reload();
                    }else {
                        alert("erreur");
                    }
                }
            });

        });
        var count = 1
        var check1 = false;
        var check2 = false;
        var check3 = false;
        var mainStandardclickedId = '#addMainStandard-'+count+'';
        $(document).on("click", ".button-delete", function() {
//   console.log("inside";   <-- here it is
            console.log("inside");
        });
        $(document).on("click",".addMainStandard", function(e) {
            alert("here first");
            e.preventDefault();
            var newdivMainStandard = '<form id="mainStandard" class="form-inline">'+
                '<div style="" class="form-group mx-sm-3 mainStandard">'+
                '<label for="inputPassword2" class="sr-only">إسم المعيار الرئيسي </label>'+
                '<input type="text" class="form-control" id="mainStandardArabicName" placeholder="إسم المعيار الرئيسي">'+
                '</div>'+
                '<div style="" class="form-group mx-sm-3 mainStandard">'+
                '<label for="inputPassword2" class="sr-only"> حدد وزنه</label>'+
                '<input type="text" class="form-control" id="weightMainStandard" placeholder="حدد وزنه">'+
                '</div>'+
                '</form>';

            var newdivSubStandard = '<div style="" class="form-group mx-sm-3 sub-standard">\n' +
                '                                            <label for="inputPassword2" class="sr-only">إسم المعيار الفرعي  </label>\n' +
                '                                            <input type="text" class="form-control" id="subStandardArabicName1" placeholder="إسم المعيار الفرعي ">\n' +
                '                                        </div>\n' +
                '                                        <div style="" class="form-group mx-sm-3 sub-standard">\n' +
                '                                            <label for="inputPassword2" class="sr-only"> حدد وزنه</label>\n' +
                '                                            <input type="text" class="form-control" value="0" id="weightSubStandard1" placeholder="حدد وزنه">\n' +
                '                                        </div><br><br><br>\n' +
                '<div style="" class="form-group mx-sm-3 sub-standard">\n' +
                '                                            <label for="inputPassword2" class="sr-only">إسم المعيار الفرعي  </label>\n' +
                '                                            <input type="text" class="form-control" id="subStandardArabicName2" placeholder="إسم المعيار الفرعي ">\n' +
                '                                        </div>\n' +
                '                                        <div style="" class="form-group mx-sm-3 sub-standard">\n' +
                '                                            <label for="inputPassword2" class="sr-only"> حدد وزنه</label>\n' +
                '                                            <input type="text" class="form-control" value="0" id="weightSubStandard2" placeholder="حدد وزنه">\n' +
                '                                        </div>\n' +
                '                                        <div style="" class="form-group mx-sm-3 sub-standard">\n' +
                '                                            <label for="inputPassword2" class="sr-only">إسم المعيار الفرعي  </label>\n' +
                '                                            <input type="text" class="form-control" id="subStandardArabicName3" placeholder="إسم المعيار الفرعي ">\n' +
                '                                        </div>\n' +
                '                                        <div style="" class="form-group mx-sm-3 sub-standard">\n' +
                '                                            <label for="inputPassword2" class="sr-only"> حدد وزنه</label>\n' +
                '                                            <input type="text" class="form-control" value="0" id="weightSubStandard3" placeholder="حدد وزنه">\n' +
                '                                        </div><br><br><br>';

            var newNew = '<div class="card-box"><div class="row m-b-30">\n' +
                '                                <div class="col-sm-12">\n' +
                '                                    <button id="1" type="" class="btn btn-primary addMainStandard">أضف معيار رئيسي </button>\n' +
                '                                    <form id="formMainStandard-'+count+'" class="form-inline">\n' +
                '\n' +
                '                                    </form>\n' +
                '                                </div>\n' +
                '\n' +
                '                            </div>\n' +
                '\n' +
                '                            <div id="DivSubStandard-'+count+'" class="row">\n' +

                '\n' +
                '                                <div class="col-sm-12">\n' +
                '                                    <span style="display: none" id="labelSubStandard" class="">أضف المعايير الفرعية </span><br><br>\n' +
                '                                    <form id="formSubStandard-'+count+'" class="form-inline">\n' +
                '\n' +
                '                                    </form>\n' +
                '                                </div>\n' +
                '\n' +
                '                            </div></div>';

                var testId= $(this).attr('id');

                // $(".mainStandard").fadeIn();
                $("#labelSubStandard").fadeIn();
                // $(".sub-standard").fadeIn();
                //$("#akbarDiv").append(newNew);
                $('#formMainStandard').append(newdivMainStandard);
                $('#formSubStandard').append(newdivSubStandard);
                $('#DivSubStandard-'+count+'').append('<buttons style="display: none" id="saveMainSubStandard" type="\" class="btn btn-primary">أضف الآن </buttons></div>');

        });

        // check value Now for MainStandard

        $(document).on("change","#weightMainStandard", function(e) {
            var weight = $(this).val();

        });
        // Check Values Now
        $(document).on("keyup","#weightSubStandard1", function(e) {
            var allWeightSubStandard;
            var weightMainStandard = parseInt($("#weightMainStandard").val());
            var weightOne = parseInt($("#weightSubStandard1").val());
            var weightTwo = parseInt($("#weightSubStandard2").val());
            var weightTree = parseInt($("#weightSubStandard3").val());
            allWeightSubStandard = weightOne + weightTwo + weightTree;

            //alert(allWeightSubStandard);

            if (allWeightSubStandard > weightMainStandard) {
                alert("لا يمكن لمجموع المعايير الفرعية أن تكون أكبر من المعيار الرئيسي ");
                check1 = false;
                $("#saveMainSubStandard").hide();
            }else {
                check1 = true;
                if(check1) {
                    $("#saveMainSubStandard").fadeIn();
                }
            }

        });
        $(document).on("keyup","#weightSubStandard2", function(e) {
            var allWeightSubStandard;
            var weightMainStandard = parseInt($("#weightMainStandard").val());
            var weightOne = parseInt($("#weightSubStandard1").val());
            var weightTwo = parseInt($("#weightSubStandard2").val());
            var weightTree = parseInt($("#weightSubStandard3").val());
            allWeightSubStandard = weightOne + weightTwo + weightTree;

            //alert(allWeightSubStandard);

            if (allWeightSubStandard > weightMainStandard) {
                alert("لا يمكن لمجموع المعايير الفرعية أن تكون أكبر من المعيار الرئيسي ");
                check2 = false;
                $("#saveMainSubStandard").hide();
            }else {
                check2 = true;
                if(check2) {
                    $("#saveMainSubStandard").fadeIn();
                }
            }


        });
        $(document).on("keyup","#weightSubStandard3", function(e) {
            var allWeightSubStandard;
            var weightMainStandard = parseInt($("#weightMainStandard").val());
            var weightOne = parseInt($("#weightSubStandard1").val());
            var weightTwo = parseInt($("#weightSubStandard2").val());
            var weightTree = parseInt($("#weightSubStandard3").val());
            allWeightSubStandard = weightOne + weightTwo + weightTree;

            //alert(allWeightSubStandard);

            if (allWeightSubStandard > weightMainStandard) {
                alert("لا يمكن لمجموع المعايير الفرعية أن تكون أكبر من المعيار الرئيسي ");
                check3 = false;
                $("#saveMainSubStandard").hide();
            } else {
                check3 = true;
                if(check3 &&  $(this).val() != 0) {
                    $("#saveMainSubStandard").fadeIn();
                }
            }

        });

        $(document).on("click","#saveMainSubStandard", function(e) {
            e.preventDefault();
            var weightMainStandard = parseInt($("#weightMainStandard").val());
            var weightOne = parseInt($("#weightSubStandard1").val());
            var weightTwo = parseInt($("#weightSubStandard2").val());
            var weightTree = parseInt($("#weightSubStandard3").val());

            var mainStandardArabicName = $("#mainStandardArabicName").val();
            var subStandardArabicName1 = $("#subStandardArabicName1").val();
            var subStandardArabicName2 = $("#subStandardArabicName2").val();
            var subStandardArabicName3 = $("#subStandardArabicName3").val();

            if($("#weightSubStandard1").val().length == 0 || weightOne == 0) {
                //$('#err-name').fadeIn('slow'); // show the error message
                alert("أدخل وزن صحيح أكبر من الصفر ");
            }else if($("#weightSubStandard2").val().length == 0 || weightTwo == 0) {
                alert("أدخل وزن صحيح أكبر من الصفر ");
            }else if($("#weightSubStandard3").val().length == 0 || weightTree == 0) {
                alert("أدخل وزن صحيح أكبر من الصفر ");
            }else {
                alert("save now");
                $.ajax({
                    type:"POST",
                    url:"/api/fields-ready-model",
                    data :  {
                        "weightMainStandard": weightMainStandard, "weightOne": weightOne, "weightTwo": weightTwo,
                        "weightTree": weightTree, "mainStandardArabicName": mainStandardArabicName,
                        "subStandardArabicName1": subStandardArabicName1,
                        "subStandardArabicName2": subStandardArabicName2, "subStandardArabicName3": subStandardArabicName3
                    },
                    datatype:"html",
                    success:function(data) {
                        window.location.replace('/admin/ready-model-fields');
                        //$("#subSectorList").html(data);

                    }
                });
            }


        });



            $("#type").change(function() {
            if(parseInt($(this).val())!== 0) {
                var mainSector = $(this).val();
                alert(mainSector);

                $.ajax({
                    type:"GET",
                    url:"/main-sector/sub-sector",
                    data :  {
                        "mainSector": mainSector,
                    },
                    datatype:"html",
                    success:function(data) {

                        console.log(data);
                        $("#subSectorList").html(data);

                    }
                });
            }

        });
    });

</script>
</body>
</html>
