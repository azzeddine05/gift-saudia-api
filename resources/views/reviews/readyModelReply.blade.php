
<!DOCTYPE html>
<html>
@include('layouts/back/head');

<style>
    .filter-option{
        text-align:@lang('sidebar.multiSelect') !important
    }
    .dropdown-toggle::after{
        float:@lang('sidebar.icon') !important;
        margin-top:-10px
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
    <div class="content-page  @lang('sidebar.right_class')">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div id="akbarDiv" class="col-md-12">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-30 header-title">اسم معيار فرعي </h4>
                            <div class="m-b-15">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form id="mainStandard" class="form-group">
                                            <div class="form-group mb-2">
                                                    <p style="margin-left: 10px" class="">ما تقول المنشأة على هذا المعيار </p>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-15">
                                    <button id="show-standar-container" type="" class="btn btn-primary addMainStandard ">أضف نقطة قوة أو فرصة تحسين </button>
                            </div>

                            <div id="standar-container" style="display : none;">
                                <form id="standars-form" method="POST">
                                    <div id="all_power">
                                        <div class="row">
                                            <div class="col-md-11 form-group">
                                                <label  for="inputPawor1" class="mx-2">نقطة قوة&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
                                                <input id="inputPawor1" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary my-3" id="add-power">
                                        <i class="fa fa-plus"></i>
                                    </button>

                                    <div id="all_improve">
                                        <div class="row">
                                            <div class="col-md-11 form-group ">
                                                <label  for="improve1" class="mx-2">فرصة تحسين : </label>
                                                <textarea id="improve1" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary my-3" id="add-improve" >
                                        <i class="fa fa-plus"></i>
                                    </button>

                                    <div class="form-action text-center">
                                        <button type="submit" class="btn btn-success">حفظ الآن </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>




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
@include('layouts/back/script');


<script type="text/javascript">
    $(document).ready(function () {
        $("#show-standar-container").on("click",function (e) {
            e.preventDefault();
            $("#standar-container").slideDown();
        });

      /*  $("#sub-standar-items").on("click",".delete-sub-standar",function (e) {
            e.preventDefault();
            $(this).parents(".sub-standar-item").remove();
        });*/

        $("#standars-form").on("submit",function (e) {
            e.preventDefault();


        });

        let counter=1;
        $("#add-power").on("click",function (e) {
            e.preventDefault();
            counter++;
            var newTextBoxDiv = $(document.createElement('div')).attr("class", 'row');
            newTextBoxDiv.after().html('<div class="col-md-11 form-group"><label  for="inputPawor'+counter+'" class="mx-2">نقطة قوة&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label> <input id="inputPawor'+counter+'" class="form-control" /></div><div class="col-md-1">' +
                '                                            <div class="item-action"><a href="javascript:void(0);" class="btn btn-danger btn-block mt-4 remove_pawor" >' +
                '                                                    <i class="fa fa-trash "></i>' +
                '                                                </a></div>' +
                '                                        </div>');
            newTextBoxDiv.appendTo("#all_power").slideDown();
        });


        $(wrapper).on('click', '.remove_pawor', function(e){
            e.preventDefault();
            $(this).parent('div').parent('div').parent('div').remove(); //Remove field html
        });



        counter_2=1;
        $("#add-improve").on("click",function (e) {
            e.preventDefault();
            counter++;
            var newTextBoxDiv = $(document.createElement('div')).attr("class", 'row');
            newTextBoxDiv.after().html('<div class="col-md-11 form-group"><label  for="improve'+counter_2+'" class="mx-2">فرصة تحسين :</label> <textarea id="improve'+counter_2+'" class="form-control" ></textarea></div><div class="col-md-1">' +
                '                                            <div class="item-action"><a href="javascript:void(0);" class="btn btn-danger btn-block mt-4 remove_improve" >' +
                '                                                    <i class="fa fa-trash "></i>' +
                '                                                </a></div>' +
                '                                        </div>');
            newTextBoxDiv.appendTo("#all_improve").slideDown();
        });


        $(wrapper).on('click', '.remove_improve', function(e){
            e.preventDefault();
            $(this).parent('div').parent('div').parent('div').remove(); //Remove field html
        });

    });

</script>




</body>
</html>
