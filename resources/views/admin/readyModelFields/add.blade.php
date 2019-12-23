
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
                            <h4 class="m-t-0 m-b-30 header-title">حقول نموذج الجاهزية</h4>
                            <div class="m-b-15">
                                <div class="row">
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
                                                <h6><span style="margin-right: 33px" class="label label-danger"> المتبقي للإستعمال من الدرجة الكلية   <b> {{ $restOftotal }} </b> </span></h6>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-15">
                                @if(empty($totalMarks))
                                    <button id="show-standar-container" type="" title="يرجى إضافة الدرجة الكلية أولا " class="btn btn-primary disabled">أضف معيار رئيسي </button>
                                @else
                                    <button id="show-standar-container" type="" class="btn btn-primary addMainStandard ">أضف معيار رئيسي </button>
                                @endif
                            </div>

                            <div id="standar-container" style="display : none;">
                                <form id="standars-form" method="POST" action="/api/fields-ready-model">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div style="" class="form-group">
                                                    <label class="sr-only">إسم المعيار الرئيسي </label>
                                                    <input type="text" name="mainstandard[arabic_name]" class="form-control input_main_arabic_name" placeholder="إسم المعيار الرئيسي">
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div style="" class="form-group">
                                                    <label class="sr-only">إسم المعيار الرئيسي </label>
                                                    <input type="text" name="mainstandard[english_name]" class="form-control input_main_english_name" placeholder="إسم المعيار الرئيسي بالانجليزية">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div style="" class="form-group">
                                                    <label class="sr-only"> حدد وزنه</label>
                                                    <input type="number" name="mainstandard[weight]" id="weightMainStandard" class="form-control input_main_weight" placeholder="حدد وزنه">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-standars-list">
                                        <div class="">
                                            <label class="control-label m-b-15">أضف المعايير الفرعية </label>
                                            <div id="sub-standar-items">
                                                <div class="sub-standar-item" id="clonable-item">

                                                    <div class="row">
                                                        <div class="col-md-11">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="sr-only">إسم المعيار الفرعي  </label>
                                                                        <input type="text" name="substandards[1][arabic_name]" class="form-control input_arabic_name" placeholder="إسم المعيار الفرعي ">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="sr-only">إسم المعيار الفرعي بالانجليزية  </label>
                                                                        <input type="text" name="substandards[1][english_name]" class="form-control input_english_name" placeholder="إسم المعيار الفرعي بالانجليزية ">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="sr-only"> حدد وزنه</label>
                                                                        <input type="number" name="substandards[1][weight]" class="form-control input_weight" value="0" placeholder="حدد وزنه">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="item-action"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="">
                                                <button type="button" class="btn btn-primary" id="add-sub-standar" title="أضف معيار فرعي جديد">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-action text-center">
                                        <button type="submit" class="btn btn-primary">أضف الآن </button>
                                    </div>
                                </form>
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
<script src="{{asset('back')}}/plugins/sweet-alert2/sweetalert2.min.js"></script>

<script src="{{asset('back')}}/assets/js/jquery.core.js"></script>
<script src="{{asset('back')}}/assets/js/jquery.app.js"></script>

<script type="text/javascript">

    $(document).ready(function () {

        $("#addTotalMarks").click(function(e) {
            e.preventDefault();
            var total = "";
            total = $("#newTotalMark").val();
            $.ajax({
                type:"POST",
                url:"/admin/total-marks/add",
                data :  {
                    "total": total,
                    "_token": "{{ csrf_token() }}",
                },
                datatype:"html",
                success:function(response) {
                    //alert(response);
                    if(response){
                        location.reload();
                    }else {
                        alert("erreur");
                    }
                }
            });
        });

        $("#show-standar-container").on("click",function (e) {
            e.preventDefault();
            $("#standar-container").slideDown();
        });

        $("#add-sub-standar").on("click",function (e) {
            e.preventDefault();
            var item = $("#clonable-item").clone();

            var deleteBtn = '<button type="button" class="btn btn-danger btn-block delete-sub-standar" title="حدف المعيار الفرعي">\n' +
                '<i class="fa fa-trash"></i>\n'+
                '</button>';

            var index = $("#sub-standar-items .sub-standar-item").length + 1;

            item.find(".item-action").html(deleteBtn);
            item.find(".input_arabic_name").attr("name","substandards["+ index +"][arabic_name]").val("");
            item.find(".input_english_name").attr("name","substandards["+ index +"][english_name]").val("");
            item.find(".input_weight").attr("name","substandards["+ index +"][weight]").val(0);

            $("#sub-standar-items").append(item);
        });

        $("#sub-standar-items").on("click",".delete-sub-standar",function (e) {
            e.preventDefault();
            $(this).parents(".sub-standar-item").remove();
        });

        $("#standars-form").on("submit",function (e) {
            e.preventDefault();

            if(validateForm())
            {
                $.ajax({
                    type:"POST",
                    url:"/api/fields-ready-model",
                    data :  $("#standars-form").serialize(),
                    success:function(data) {

                        if(data.done)
                        {
                            swal(
                                {
                                    type: 'success',
                                    text: 'تم الاضافة بنجاح',
                                    allowOutsideClick: false
                                }
                            ).then(function(result){
                                window.location.replace('/admin/ready-model-fields');

                            });
                        }
                    }
                });
            }
        });



    });

    function validateForm() {
        var weight                  = $("#weightMainStandard").val();
        var totalWeightMainStandard = "{{ $totalWeightMainStandard }}"
        var totalMark               = $("#totalMark").val();
        var restOftotal             = "{{ $restOftotal }}";

        var validInputs = true;
        $(".input_arabic_name, .input_english_name, .input_main_arabic_name, .input_main_english_name").each(function () {
            if($(this).val() == "")
                validInputs = false;

        });

        if(!validInputs)
        {
            //alert("المرجو ملئ كل الخانات ");
            swal(
                {
                    type: 'warning',
                    text: 'المرجو ملئ كل الخانات'
                }
            );
            return false;
        }
        else
        {
            if (parseInt(totalWeightMainStandard) + parseInt(weight) > parseInt(totalMark) ) {
                //alert(`لا يمكن لمجموع  أوزان المعايير الرئيسية أن تكون أكبر من الدرجة الكلية  الحد المسموح به لوزن المعيار الرئيسي هو ${restOftotal}!`)
                swal(
                    {
                        type: 'warning',
                        text: `لا يمكن لمجموع  أوزان المعايير الرئيسية أن تكون أكبر من الدرجة الكلية  الحد المسموح به لوزن المعيار الرئيسي هو ${restOftotal}!`
                    }
                );
                return false;
            }
            else
            {
                var sum = 0;
                let validWeight = true;
                $(".input_weight").each(function () {
                    if($(this).val() == 0 || $(this).val() == ""){
                        validWeight = false;
                    }
                    else
                    {
                        sum += parseInt($(this).val());
                    }
                });

                if(!validWeight)
                {
                    //alert("أدخل وزن صحيح أكبر من الصفر ");
                    swal(
                        {
                            type: 'warning',
                            text: 'أدخل وزن صحيح أكبر من الصفر'
                        }
                    );
                    return false;
                }
                else
                {
                    if(sum > 0)
                    {
                        if(sum != parseInt(weight))
                        {
                            //alert("مجموع المعايير الفرعية  يجب أن تساوي وزن المعيار الرئيسي  ");
                            swal(
                                {
                                    type: 'warning',
                                    text: 'مجموع المعايير الفرعية  يجب أن تساوي وزن المعيار الرئيسي'
                                }
                            );
                            return false;
                        }
                    }
                }


            }


        }



        return true;

    }

</script>
</body>
</html>
