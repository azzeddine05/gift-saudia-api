<style>
    span {
        font-family: 'Cairo', sans-serif;
    }
    @lang('sidebar.sidebar_icon_right')
</style>
<div class="left side-menu @lang('sidebar.right_sidebar')">
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
                    <a href="{{url('admin/registration-fields')}}" class="waves-effect"><i class="ti-paint-bucket"></i> <span>@lang('dashboard.registration_fields') </span> <span class="menu-arrow"></span> </a>
                </li>
                <li class="has_sub">
                    <a href="{{url('admin/ready-model-fields')}}" class="waves-effect"><i class="ti-paint-bucket"></i> <span>@lang('dashboard.readiness_form_fields')</span> <span class="menu-arrow"></span> </a>
                </li>
                <li class="has_sub">
                    <a href="{{route('reviews.fields')}}" class="waves-effect"><i class="ti-paint-bucket"></i> <span> @lang('dashboard.evaluation_fields') </span> <span class="menu-arrow"></span> </a>
                </li>
                <li class="has_sub">
                    <a href="{{url('admin/review-items')}}" class="waves-effect"><i class="ti-paint-bucket"></i> <span>@lang('dashboard.elements_of_evaluation') </span> <span class="menu-arrow"></span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> @lang('dashboard.auditing_and_accreditation') </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="">@lang('dashboard.facilities_not_yet_delivered')</a></li>
                        <li><a href="{{ url('/companies/ready-model-notcofirmed') }}">@lang('dashboard.facilities_delivered_form')   </a></li>
                        <li><a href="dashboard_4.html">@lang('dashboard.lists_approved_establishments')  </a></li>
                    </ul>
                </li>
                @endrole

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
