<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                {{ __('menus.backend.sidebar.general') }}
            </li>

            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/dashboard')) }}" href="{{ route('admin.dashboard') }}"><i class="icon-speedometer"></i> {{ __('menus.backend.sidebar.dashboard') }}</a>
            </li>


        {{--start_Country_start--}}
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/countries')) }}" href=" {{ route('admin.country.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.countries') }}</a>
            </li>
            {{--end_Country_end--}}

        {{--start_City_start--}}
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/cities')) }}" href=" {{ route('admin.city.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.cities') }}</a>
            </li>
            {{--end_City_end--}}

        {{--start_Orphan_start--}}
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/orphans')) }}" href=" {{ route('admin.orphan.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.orphans') }}</a>
            </li>
            {{--end_Orphan_end--}}

        {{--start_DonorType_start--}}
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/donor_types')) }}" href=" {{ route('admin.donor_type.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.donor_types') }}</a>
            </li>
            {{--end_DonorType_end--}}

        {{--start_Fundraising_start--}}
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/fundraisings')) }}" href=" {{ route('admin.fundraising.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.fundraisings') }}</a>
            </li>
            {{--end_Fundraising_end--}}

        {{--start_Donor_start--}}
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/donors')) }}" href=" {{ route('admin.donor.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.donors') }}</a>
            </li>
            {{--end_Donor_end--}}

        {{--start_Donation_start--}}
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/donations')) }}" href=" {{ route('admin.donation.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.donations') }}</a>
            </li>
            {{--end_Donation_end--}}

        {{--start_OrphanSponsorship_start--}}
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/orphan_sponsorships')) }}" href=" {{ route('admin.orphan_sponsorship.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.orphan_sponsorships') }}</a>
            </li>
            {{--end_OrphanSponsorship_end--}}

{{--Do not delete me :) I'm used for auto-generation--}}

            <li class="nav-title">
                {{ __('menus.backend.sidebar.system') }}
            </li>

            @if ($logged_in_user->isAdmin())
                <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/auth*'), 'open') }}">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="icon-user"></i> {{ __('menus.backend.access.title') }}

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/auth/user*')) }}" href="{{ route('admin.auth.user.index') }}">
                                {{ __('labels.backend.access.users.management') }}

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/auth/role*')) }}" href="{{ route('admin.auth.role.index') }}">
                                {{ __('labels.backend.access.roles.management') }}
                            </a>
                        </li>
                    </ul>
                </li>
            @endif

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-list"></i> {{ __('menus.backend.log-viewer.main') }}
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer')) }}" href="{{ route('log-viewer::dashboard') }}">
                            {{ __('menus.backend.log-viewer.dashboard') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer/logs*')) }}" href="{{ route('log-viewer::logs.list') }}">
                            {{ __('menus.backend.log-viewer.logs') }}
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div><!--sidebar-->