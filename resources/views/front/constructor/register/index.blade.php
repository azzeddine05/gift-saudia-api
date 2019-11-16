
<!DOCTYPE html>
<html>
@include('layouts/back/head');
<style>
    h3, button, p, b {
        font-family: 'Cairo', sans-serif;
    }
</style>


<body>

<div class="account-pages"></div>
<div class="clearfix"></div>

<div class="wrapper-page">
    <div class="card-box">
        @if(session()->has('message'))
            <div class="alert-success">
                <h6>@lang('constructorRegister.success_registre')</h6>
            </div>
        @endif
        <div class="panel-heading">
            <h3 class="text-center"> @lang('constructorRegister.gift_registred') </h3>
        </div>

        <div class="p-20">
            <form class="form-horizontal m-t-20" method="POST" action="{{ url('company/register')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-12">
                    <select class="form-control" id="type" name="type">
                        <option value="0">@lang('constructorRegister.main_sector')</option>
                        @foreach ($mainSectors as $mainSector)
                            <option value="{{$mainSector->id}}" >{{$mainSector->arabic_name}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div id="subSectorList" class="form-group">

                </div>
                <div class="form-group ">
                    <div class="col-12">
                        <input class="form-control" name="name" type="text" required="" placeholder="@lang('constructorRegister.constructor_name')">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-12">
                        <input class="form-control" name="headquarters" type="text" required="" placeholder="@lang('constructorRegister.constructor_headquarters')">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <input class="form-control" name="phone" type="text" required="" placeholder="@lang('constructorRegister.constructor_phone')">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <input class="form-control" name="email" type="text" placeholder="@lang('constructorRegister.constructor_email')" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <input class="form-control" name="password" type="text" placeholder="@lang('constructorRegister.password')" required>
                    </div>
                </div>

{{--                <div class="form-group">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="checkbox checkbox-primary">--}}
{{--                            <input id="checkbox-signup" type="checkbox" checked="checked">--}}
{{--                            <label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="form-group text-center m-t-40">
                    <div class="col-12">
                        <button id="registerCompany" class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
                            سجل الآن
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <p>
                لدي حساب مسبقا ?<a href="page-login.html" class="text-primary m-l-5"><b>أدخل الآن  </b></a>
            </p>
        </div>
    </div>

</div>

<script>
    var resizefunc = [];
</script>

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

        // $("#registerCompany").submit(function() {
        //     alert("here");
        //     var form_data = $(this).serialize(); //Encode form elements for submission
        //     $.ajax({
        //         type:"GET",
        //         url:"/main-sector/sub-sector",
        //         data :  {
        //             "mainSector": mainSector,
        //         },
        //         datatype:"html",
        //         success:function(data) {
        //
        //             console.log(data);
        //             $("#subSectorList").html(data);
        //
        //         }
        //     });
        // });

        //     axios.get('/main-sector/sub-sector', {
        //         params: {
        //             mainSector: mainSector
        //         }
        //     })
        //         .then(response => {
        //             console.log(response.data);
        //             var h1 = "<h1>trerererre</h1>";
        //             $("#subSectorList").html(h1);
        //
        //         })
        //         .catch(error => {
        //             console.log(error.response)
        //         });

    });
</script>

</body>
</html>
