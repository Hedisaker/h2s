<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dashboard_files/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> @lang('site.online')</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ route('dashboard.homes.index') }}"><i class="fa fa-th"></i><span>@lang('site.dashboard')</span></a></li>

                <li><a href="{{ route('dashboard.products.index') }}"><i class="fa fa-th"></i><span>@lang('site.products')</span></a></li>

                <li><a href="{{ route('dashboard.services.index') }}"><i class="fa fa-th"></i><span>@lang('site.services')</span></a></li>
                <li><a href="{{ route('dashboard.teams.index') }}"><i class="fa fa-th"></i><span>@lang('site.teams')</span></a></li>

        </ul>

    </section>

</aside>

