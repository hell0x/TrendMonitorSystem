<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ route('admin.index') }}"><i class="fa fa-dashboard fa-fw"></i> 面板概览</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 热点管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">热度查看</a>
                    </li>
                    <li>
                        <a href="{{ route('sources.index') }}">来源配置</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> 因素管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">因素匹配</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> 影响力预估<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">影响力分析</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-table fa-fw"></i> 文章管理</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> 用户管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('permissions.index') }}">权限管理</a>
                    </li>
                    <li>
                        <a href="{{ route('roles.index') }}">角色管理</a>
                    </li>
                    <li>
                        <a href="{{ route('adm_users.index') }}">用户管理</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-edit fa-fw"></i> 网站配置</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-edit fa-fw"></i> 日志管理</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>