<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>ال<i class="md md-album"></i>جائزة</span></a>
            <!-- Image Logo here -->
            <!--<a href="index.html" class="logo">-->
            <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
            <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
            <!--</a>-->
        </div>
    </div>

    <!-- Button mobile view to collapse sidebar menu -->
    <nav class="navbar-custom">

        <ul class="list-inline float-right mb-0">
            <li class="list-inline-item dropdown notification-list">
                <a href="{{url('locale/ar')}}">العربية </a>
                <a href="{{url('locale/en')}}">English</a>

                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="dripicons-bell noti-icon"></i>
                    <span class="badge badge-pink noti-icon-badge">4</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                    </div>

                    <!-- item-->
                    @foreach(Auth::user()->notifications as $notification)
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                        <p class="notify-details">New user registered. {{ $notification->data['user_name'] }}<small class="text-muted">1 min ago</small></p>
                    </a>
                    @endforeach
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                        View All
                    </a>

                </div>
            </li>

            <li class="list-inline-item notification-list">
                <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                    <i class="dripicons-expand noti-icon"></i>
                </a>
            </li>

            <li class="list-inline-item notification-list">
                <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                    <i class="dripicons-message noti-icon"></i>
                </a>
            </li>

            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('back')}}/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small>مرحبا !  أبو أسامة </small> </h5>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="md md-account-circle"></i> <span>الملف الشخصي</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="md md-settings"></i> <span>الإعدادات</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="md md-settings-power"></i> <span>تسجيل الخروج </span>
                    </a>

                </div>
            </li>

        </ul>
        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="dripicons-menu"></i>
                </button>
            </li>
            <li class="hide-phone app-search">
                <form role="search" class="">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>
            </li>
        </ul>

    </nav>

</div>
