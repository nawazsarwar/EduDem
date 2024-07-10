<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs("admin.home") ? "active" : "" }}" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('member_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.members.index") }}" class="nav-link {{ request()->is("admin/members") || request()->is("admin/members/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-user-alt">

                            </i>
                            <p>
                                {{ trans('cruds.member.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('notification_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.notifications.index") }}" class="nav-link {{ request()->is("admin/notifications") || request()->is("admin/notifications/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-envelope-open">

                            </i>
                            <p>
                                {{ trans('cruds.notification.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('institution_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.institutions.index") }}" class="nav-link {{ request()->is("admin/institutions") || request()->is("admin/institutions/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-university">

                            </i>
                            <p>
                                {{ trans('cruds.institution.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('state_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.states.index") }}" class="nav-link {{ request()->is("admin/states") || request()->is("admin/states/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-map-marked">

                            </i>
                            <p>
                                {{ trans('cruds.state.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('district_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.districts.index") }}" class="nav-link {{ request()->is("admin/districts") || request()->is("admin/districts/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-map-marker-alt">

                            </i>
                            <p>
                                {{ trans('cruds.district.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle {{ request()->is("admin/permissions*") ? "active" : "" }} {{ request()->is("admin/roles*") ? "active" : "" }} {{ request()->is("admin/users*") ? "active" : "" }}" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>