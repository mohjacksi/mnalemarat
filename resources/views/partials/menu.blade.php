<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('follow_up_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-search c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.followUp.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('project_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.projects.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/projects") || request()->is("admin/projects/*") ? "active" : "" }}">
                                <i class="fa-fw far fa-building c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.project.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('property_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.properties.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/properties") || request()->is("admin/properties/*") ? "active" : "" }}">
                                <i class="fa-fw far fa-arrow-alt-circle-up c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.property.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('report_accident_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.report-accidents.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/report-accidents") || request()->is("admin/report-accidents/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-car c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.reportAccident.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-search c-sidebar-nav-icon">

                    </i>
                    تقارير
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('project_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.reports.projects") }}" class="c-sidebar-nav-link {{ request()->is("admin/projects") || request()->is("admin/projects/*") ? "active" : "" }}">
                                <i class="fa-fw far fa-building c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.project.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('property_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.reports.properties") }}" class="c-sidebar-nav-link {{ request()->is("admin/properties") || request()->is("admin/properties/*") ? "active" : "" }}">
                                <i class="fa-fw far fa-arrow-alt-circle-up c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.property.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('report_accident_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.reports.accidents") }}" class="c-sidebar-nav-link {{ request()->is("admin/report-accidents") || request()->is("admin/report-accidents/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-car c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.reportAccident.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>
