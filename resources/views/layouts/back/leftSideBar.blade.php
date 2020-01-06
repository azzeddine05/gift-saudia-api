<style>
    span {
        font-family: 'Cairo', sans-serif;
    }
</style>
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

{{--                <li class="text-muted menu-title">Navigation</li>--}}
                @role('company')
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-home"></i> <span> @lang('dashboard.dashboard') </span> <span class="menu-arrow"></span></a>
                </li>
                @endrole
                @role('admin')
                <li class="has_sub">
                    <a href="{{ url('/dashboard') }}" class="waves-effect"><i class="ti-home"></i> <span> @lang('dashboard.dashboard') </span> <span class="menu-arrow"></span></a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> @lang('company.title_sidebar') </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('admin/all-companies') }}">@lang('company.all_companies')</a></li>
                        <li><a href="dashboard_2.html">@lang('company.companies_paid')</a></li>
                        <li><a href="dashboard_3.html">@lang('company.companies_not_paid')</a></li>
                        <li><a href="dashboard_4.html">@lang('company.companies_not_complet_registration')</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="{{ url('admin/gift-steps') }}" class="waves-effect"><i class="ti-paint-bucket"></i> <span> @lang('dashboard.gift_steps')</span> <span class="menu-arrow"></span> </a>
                </li>
{{--                <li class="has_sub">--}}
{{--                    <a href="{{route('fees.registred')}}" class="waves-effect"><i class="ti-paint-bucket"></i> <span> تكاليف التسجيل</span> <span class="menu-arrow"></span> </a>--}}
{{--                </li>--}}
{{--                <li class="has_sub">--}}
{{--                    <a href="{{route('fees.subscribed')}}" class="waves-effect"><i class="ti-paint-bucket"></i> <span>تكاليف الإشتراك </span> <span class="menu-arrow"></span> </a>--}}
{{--                </li>--}}
                <li class="has_sub">
                    <a href="{{ url('admin/main-sectors') }}" class="waves-effect"><i class="ti-paint-bucket"></i> <span>@lang('dashboard.type_sectors')</span> <span class="menu-arrow"></span> </a>
                </li>
                <li class="has_sub">
                    <a href="{{url('admin/employes')}}" class="waves-effect"><i class="ti-paint-bucket"></i> <span> @lang('dashboard.gift_teams')   </span> <span class="menu-arrow"></span> </a>
                </li>
                <li class="has_sub">
                    <a href="{{url('admin/registration-fields')}}" class="waves-effect"><i class="ti-paint-bucket"></i> <span> حقول التسجيل </span> <span class="menu-arrow"></span> </a>
                </li>
                <li class="has_sub">
                    <a href="{{url('admin/ready-model-fields')}}" class="waves-effect"><i class="ti-paint-bucket"></i> <span> حقول نموذج الجاهزية</span> <span class="menu-arrow"></span> </a>
                </li>
                <li class="has_sub">
                    <a href="{{route('reviews.fields')}}" class="waves-effect"><i class="ti-paint-bucket"></i> <span>  حقول التقييم </span> <span class="menu-arrow"></span> </a>
                </li>
                <li class="has_sub">
                    <a href="{{url('admin/review-items')}}" class="waves-effect"><i class="ti-paint-bucket"></i> <span> عناصر التقييم </span> <span class="menu-arrow"></span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span>المراجعة والاعتماد </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="">منشآت لم تسلم بعد</a></li>
                        <li><a href="{{ url('/companies/ready-model-notcofirmed') }}">منشآت  سلمت النموذج</a></li>
                        <li><a href="dashboard_4.html">قوائم المنشآت المعتمدة</a></li>
                    </ul>
                </li>
                @endrole

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
